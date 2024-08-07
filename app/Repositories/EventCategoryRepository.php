<?php

namespace App\Repositories;

use App\Interfaces\EventCategoryInterface;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Storage;

class EventCategoryRepository implements EventCategoryInterface
{
    private $eventCategory;

    public function __construct(EventCategory $eventCategory)
    {
        $this->eventCategory = $eventCategory;
    }

    public function getAll()
    {
        return $this->eventCategory->with('events')->get();
    }

    public function getById($id)
    {
        return $this->eventCategory->find($id);
    }

    public function store($data)
    {
        return $this->eventCategory->create($data);
    }

    public function update($id, $data)
    {
        return $this->eventCategory->find($id)->update($data);
    }

    public function destroy($id)
    {
        $eventCategory = $this->eventCategory->find($id);
        if (isset($eventCategory->events)) {
            foreach ($eventCategory->events as $event) {
                // delete thumbnail and event
                Storage::delete('public/event/' . $event->thumbnail);
                $event->delete();
            }
        }
        return $eventCategory->delete();
    }
}
