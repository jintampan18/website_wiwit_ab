<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ExperienceInterface;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    private $work;
    private $workCategory;

    public function __construct(WorkInterface $work, WorkCategoryInterface $workCategory)
    {
        $this->work         = $work;
        $this->workCategory = $workCategory;
    }

    public function index()
    {
        return view('admin.experience.index', [
            'works'          => $this->work->getAll(),
            'workCategories' => $this->workCategory->getAll(),
        ]);
    }

    public function show($id)
    {
        return response()->json($this->work->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'work_category_id' => ['required'],
            'title'            => ['required'],
            'date'      => ['required'],
            'photo'        => ['required', 'mimes:jpg,jpeg,png']
        ]);

        try {
            $this->work->store($request->all());
            return redirect()->back()->with('success', 'Work created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'work_category_id' => ['required'],
            'title'            => ['required'],
            'date'      => ['required'],
            'photo'        => ['mimes:jpg,jpeg,png'],
        ]);

        try {
            $this->work->update($id, $request->all());
            return redirect()->back()->with('success', 'Work updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->work->destroy($id);
            return redirect()->back()->with('success', 'Work deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}