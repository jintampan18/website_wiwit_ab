<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\MaterialCategoryInterface;
use Illuminate\Http\Request;

class MaterialCategoryController extends Controller
{

    private $materialCategory;

    public function __construct(MaterialCategoryInterface $materialCategory)
    {
        $this->materialCategory = $materialCategory;
    }

    public function index()
    {
        return view('admin.material_category.index', [
            'materialCategories' => $this->materialCategory->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->materialCategory->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $this->materialCategory->store($request->all());
        return redirect()->route('admin.material-category.index')->with('success', 'Material category created successfully');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $this->materialCategory->update($id, $request->all());
        return redirect()->route('admin.material-category.index')->with('success', 'Material category updated successfully');
    }

    public function destroy($id)
    {
        $this->materialCategory->destroy($id);
        return redirect()->route('admin.material-category.index')->with('success', 'Material category deleted successfully');
    }
}
