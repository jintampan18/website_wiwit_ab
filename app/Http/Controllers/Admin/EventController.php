<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\EventCategoryInterface;
use App\Interfaces\EventInterface;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $event;
    private $eventCategory;

    public function __construct(EventInterface $event, EventCategoryInterface $eventCategory)
    {
        $this->event         = $event;
        $this->eventCategory = $eventCategory;
    }

    public function index()
    {
        return view('admin.event.index', [
            'events'          => $this->event->getAll(),
            'eventCategories' => $this->eventCategory->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->event->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_category_id' => 'required',
            'name'              => 'required',
            'location'          => 'required',
            'date'              => 'required',
            'thumbnail'         => 'required|image|mimes:jpeg,png,jpg',
        ]);

        try {
            $this->event->store($request->all());
            return redirect()->back()->with('success', 'Event successfully added!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to add event!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_category_id' => 'required',
            'name'              => 'required',
            'location'          => 'required',
            'date'              => 'required',
            'thumbnail'         => 'image|mimes:jpeg,png,jpg',
        ]);

        try {
            $this->event->update($id, $request->all());
            return redirect()->back()->with('success', 'Event successfully updated!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to update event!');
        }
    }
}
