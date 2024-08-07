<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\WorkCategoryInterface;
use Illuminate\Http\Request;

class WorkCategoryController extends Controller
{
    private $workCategory;

    public function __construct(WorkCategoryInterface $workCategory)
    {
        $this->workCategory = $workCategory;
    }

    public function index()
    {
        return view('admin.work_category.index', [
            'workCategories' => $this->workCategory->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->workCategory->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required'
        ]);

        try {
            $this->workCategory->store($request->all());
            return redirect()->route('admin.work-category.index')->with('success', 'Work category added successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.work-category.index')->with('error', 'Work category failed to add.');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'        => 'required'
        ]);

        try {
            $this->workCategory->update($id, $request->all());
            return redirect()->route('admin.work-category.index')->with('success', 'Work category updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.work-category.index')->with('error', 'Work category failed to update.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->workCategory->destroy($id);
            return redirect()->route('admin.work-category.index')->with('success', 'Work category deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.work-category.index')->with('error', 'Work category failed to delete.');
        }
    }
}
