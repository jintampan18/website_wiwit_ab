<?php

namespace App\Repositories;

use App\Interfaces\EventInterface;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Storage;

class EventRepository implements EventInterface
{
    private $event;
    private $eventCategory;

    public function __construct(Event $event, EventCategory $eventCategory)
    {
        $this->event = $event;
        $this->eventCategory = $eventCategory;
    }

    public function getAll()
    {
        return $this->event->with('eventCategory')->get();
    }

    public function getById($id)
    {
        return $this->event->with('eventCategory')->find($id);
    }

    public function store($data)
    {
        if (isset($data['thumbnail'])) {
            $filenameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/event', $filenameThumbnail);
            $data['thumbnail'] = $filenameThumbnail;
        }

        try {
            return $this->event->create($data);
        } catch (\Throwable $th) {
            Storage::delete('public/event/' . $filenameThumbnail);
            return $th;
        }
    }

    public function update($id, $data)
    {
        $event = $this->event->find($id);

        if (isset($data['thumbnail'])) {
            $filenameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/event', $filenameThumbnail);
            $data['thumbnail'] = $filenameThumbnail;
        }

        try {
            return $event->update($data);
        } catch (\Throwable $th) {
            Storage::delete('public/event/' . $filenameThumbnail);
            return $th;
        }
    }

    public function destroy($id)
    {
        $event = $this->event->find($id);
        Storage::delete('public/event/' . $event->thumbnail);
        return $event->delete();
    }
}
