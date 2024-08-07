<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\WorkCategoryInterface;
use App\Interfaces\WorkInterface;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\WorkCategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class WorkController extends Controller
{
    private $work;
    private $workCategory;

    public function __construct(WorkInterface $work, WorkCategoryInterface $workCategory)
    {
        $this->work         = $work;
        $this->workCategory = $workCategory;
    }

    // public function index()
    // {
    //     return view('admin.work.index', [
    //         'works'          => $this->work->getAll(),
    //         'workCategories' => $this->workCategory->getAll(),
    //     ]);
    // }

    public function index()
    {
        $works = $this->work->getAll();
        $workCategories = $this->workCategory->getAll();

        // Pagination
        $currentPage = Paginator::resolveCurrentPage() ?? 1;
        $perPage = 10;
        $workPaginated = new LengthAwarePaginator(
            $works->forPage($currentPage, $perPage),
            $works->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('admin.work.index', compact('workPaginated', 'workCategories'));
    }

    public function show($id)
    {
        return response()->json($this->work->getById($id));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'work_category_id' => ['required'],
            'title'            => ['required'],
            'description'      => ['required'],
            'date'      => ['required'],
            'photo'        => ['required', 'mimes:jpg,jpeg,png'],
            'location'     => ['required']
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
            'description'      => ['required'],
            'date'      => ['required'],
            'photo'        => ['nullable', 'mimes:jpg,jpeg,png'],
            'location'     => ['required']
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
