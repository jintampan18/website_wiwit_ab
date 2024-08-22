<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\MaterialCategoryInterface;
use App\Interfaces\MaterialInterface;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\View;


class MaterialController extends Controller
{
    private $material;
    private $materialCategory;

    public function __construct(MaterialInterface $material, MaterialCategoryInterface $materialCategory)
    {
        $this->material = $material;
        $this->materialCategory = $materialCategory;
    }

    public function index()
    {
        $materials = $this->material->getAll();
        $materialCategories = $this->materialCategory->getAll();

        // pagination
        $currentPage = Paginator::resolveCurrentPage() ?? 1;
        $perPage = 10;
        $materialsPaginated = new LengthAwarePaginator(
            $materials->forPage($currentPage, $perPage),
            $materials->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );
        return view('admin.material.index')->with('materialsPaginated', $materialsPaginated)->with('materialCategories', $materialCategories);
        return view('admin.material.index', compact('materials', 'materialCategories'));
    }

    public function show($id)
    {
        $material = $this->material->getById($id);
        return response()->json($material);
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);
        $materialCategories = $this->materialCategory->getAll();

        return view('admin.material.edit', compact('material', 'materialCategories'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'material_category_id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'description' => 'required',
            'thumbnail'        => ['nullable', 'mimes:jpg,jpeg,png'],
            'file'        => ['nullable', 'mimes:pdf'],
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = now()->format('Ymd_His') . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/materials', $fileName);
            $validatedData['file'] = $fileName;
        }

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = now()->format('Ymd_His') . '_' . $thumbnail->getClientOriginalName();
            $thumbnailPath = $thumbnail->storeAs('public/materials', $thumbnailName);
            $validatedData['thumbnail'] = $thumbnailName;
        }

        try {
            $this->material->store($validatedData);

            return redirect()->back()->with('success', 'Material created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function detailPage($id)
    {
        $material = Material::find($id);
        return view('user.material.detail', compact('material'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'material_category_id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'jurnal' => 'nullable',
            'volume' => 'nullable',
            'nomor' => 'nullable',
            'halaman' => 'nullable',
            'penerbit' => 'nullable',
            'link' => 'nullable',
            'description' => 'required',
            'thumbnail'        => ['nullable', 'mimes:jpg,jpeg,png'],
            'file'        => ['nullable', 'mimes:pdf'],
        ]);

        try {
            // dd($validatedData);

            // Update material with the validated data
            $this->material->update($id, $validatedData);
            return redirect()->route('admin.material.index')->with('success', 'Material update successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->material->destroy($id);
            return redirect()->back()->with('success', 'Material deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function linkPage($link)
    {
        $fullLink = $link;
        return redirect($fullLink);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $materials = Material::where('title', 'like', '%' . $search . '%')->get();
        return view('partials.material_table', compact('materials'))->render();
    }
}
