<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\EventCategoryInterface;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    private $eventCategory;

    public function __construct(EventCategoryInterface $eventCategory)
    {
        $this->eventCategory = $eventCategory;
    }

    public function index()
    {
        return view('admin.event_category.index', [
            'eventCategories' => $this->eventCategory->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->eventCategory->getById($id));
    }

    public function store(Request $request)
    {
        $this->eventCategory->store($request->all());
        return redirect()->back()->with('success', 'Event Category Created Successfully');
    }

    public function update(Request $request, $id)
    {
        $this->eventCategory->update($id, $request->all());
        return redirect()->back()->with('success', 'Event Category Updated Successfully');
    }

    public function destroy($id)
    {
        $this->eventCategory->destroy($id);
        return redirect()->back()->with('success', 'Event Category Deleted Successfully');
    }
}
