<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MaterialCategory;
use App\Interfaces\MaterialInterface;
use App\Interfaces\MaterialCategoryInterface;
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
        $this->material         = $material;
        $this->materialCategory = $materialCategory;
    }

    public function index(Request $request)
    {
        // Ambil data material dari model Material menggunakan instance query builder
        $materialsQuery = Material::query();

        // Ambil data kategori material dari model MaterialCategory menggunakan instance query builder
        $materialCategories = MaterialCategory::all();

        // Lakukan pagination pada data material
        $materialsPaginated = $materialsQuery->paginate(10);

        return view('user.material.index', [
            'materialsPaginated' => $materialsPaginated,
            'materialCategories' => $materialCategories
        ]);
    }

    public function addPage()
    {
        return view('admin.material.addMaterial', [
            'materials'          => $this->material->getAll(),
            'materialCategories' => $this->materialCategory->getAll()
        ]);
    }

    public function addData(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'material_category_id' => 'required',
            'title'                => 'required|string|max:255',
            'author'               => 'required|string|max:255',
            'description'          => 'required|string',
            'type'                 => 'required',
            'year'                 => 'required',
            'file'                 => 'required|file|mimes:pdf',
            'thumbnail'            => 'required|file|mimes:jpeg,jpg,png',
        ]);

        $filename = null;
        $path = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = now()->format('Ymd_His') . '_' . $file->getClientOriginalName();
            // dd($filename);

            $path = $file->storeAs('public/materials', $filename);
        }

        $thumbnailFilename = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailFilename = now()->format('Ymd_His') . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/materials', $thumbnailFilename);
        }

        Material::create([
            'material_category_id' => $request->input('material_category_id'),
            'title'                => $request->input('title'),
            'author'               => $request->input('author'),
            'description'          => $request->input('description'),
            'type'                 => $request->input('type'),
            'year'                 => $request->input('year'),
            'jurnal'               => $request->input('jurnal'),
            'volume'               => $request->input('volume'),
            'nomor'                => $request->input('nomor'),
            'halaman'              => $request->input('halaman'),
            'penerbit'             => $request->input('penerbit'),
            'link'                 => $request->input('link'),
            'file'                 => $filename,
            'thumbnail'            => $thumbnailFilename,
            'download_count'       => 0
        ]);

        return redirect()->route('admin.material.index')->with('success', 'Material created successfully');
    }

    public function download($id)
    {
        // Find the material by ID
        $material = Material::find($id);

        // Check if the material exists
        if (!$material) {
            return response()->json(['error' => 'Material not found'], 404);
        }

        // Increment the download count
        $material->download_count++;
        $material->save();

        $filePath = public_path('storage/materials/' . $material->file);

        // Check if the file exists
        if (file_exists($filePath)) {
            // Set the appropriate headers for the file download
            $headers = [
                'Content-Type' => 'application/octet-stream',
                'Content-Disposition' => 'attachment; filename="' . $material->file . '"',
            ];

            // Return the file for download
            return response()->download($filePath, $material->file, $headers);
        } else {
            // Handle the case where the file does not exist
            return response()->json(['error' => 'File not found'], 404);
        }
    }

    public function filter(Request $request)
    {
        $year = $request->input('year');
        $category = $request->input('category');
        $download = $request->input('download');

        $materials = Material::query();

        if ($year) {
            $materials->where('year', $year);
        }

        if ($category) {
            $materials->where('material_category_id', $category);
        }

        $filteredMaterials = $materials->get();

        return view('user.material.item', [
            'materials' => $filteredMaterials
        ])->render();
    }

    public function search(Request $request)
    {
        $title = $request->input('title');
        $materials = Material::query();

        if ($title) {
            $materials->where('title', 'like', '%' . $title . '%');
        }

        $filteredMaterials = $materials->get();

        return view('user.material.item', [
            'materials' => $filteredMaterials
        ])->render();
    }
}
