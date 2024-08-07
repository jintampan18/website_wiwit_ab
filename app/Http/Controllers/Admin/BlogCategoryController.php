<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\BlogCategoryInterface;


class BlogCategoryController extends Controller
{
    private $blogCategory;

    public function __construct(BlogCategoryInterface $blogCategory)
    {
        $this->blogCategory = $blogCategory;
    }

    public function index()
    {
        return view('admin.blog_category.index',[
            'blogCategories' => $this->blogCategory->getAll()
        ]);
    }


    public function show($id)
    {
        return response()->json($this->blogCategory->getById($id));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required']
        ]);

        try {
            $this->blogCategory->store($request->all());
            return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category has been created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.blog-category.index')->with('error', 'Blog Category failed to create');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => ['required']
        ]);

        try {
            $this->blogCategory->update($id, $request->all());
            return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category has been updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.blog-category.index')->with('error', 'Blog Category failed to update');
        }
    }

    public function destroy($id)
    {
        try {
            $this->blogCategory->destroy($id);
            return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category has been deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.blog-category.index')->with('error', 'Blog Category failed to delete');
        }
    }
}
