<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\EventCategoryInterface;
use App\Interfaces\EventInterface;
use Illuminate\Http\Request;

class EventsController extends Controller
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
        // return $this->eventCategory->getAll();
        return view('user.events.index', [
            'events'          => $this->event->getAll(),
            'eventCategories' => $this->eventCategory->getAll()
        ]);
    }
}
