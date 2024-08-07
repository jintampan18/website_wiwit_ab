<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\BlogCategoryInterface;
use App\Interfaces\BlogInterface;


class BlogController extends Controller
{
    private $blog;
    private $blogCategory;

    public function __construct(BlogInterface $blog, BlogCategoryInterface $blogCategory) {
        $this->blog         = $blog;
        $this->blogCategory = $blogCategory;
    }

    public function index()
    {
        return view('admin.blog.index', [
            'blogs'          => $this->blog->getAll(),
            'blogCategories' => $this->blogCategory->getAll()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'blog_category_id' => ['required', 'exists:blog_category,id'],
            'title'            => ['required'],
            'thumbnail'        => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'author'           => ['required'],
            'content'          => ['required'],
            'published_date'   => ['required'],
        ]);


        try {
            $this->blog->store($request->all());
            return redirect()->back()->with('success', 'Blog berhasil dibuat!');
        } catch (Exception $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Blog gagal dibuat!');
        }
    }

    public function show($id){
        return response()->json($this->blog->getById($id));
    }


    public function update($id, Request $request){
        $request->validate([
            'blog_category_id' => ['required', 'exists:blog_category,id'],
            'title'            => ['required'],
            'thumbnail'        => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'author'           => ['required'],
            'content'          => ['required'],
            'published_date'   => ['required'],
        ]);

        try {
            $this->blog->update($id, $request->all());
            return redirect()->back()->with('success', 'Blog berhasil diupdate!');
        } catch (Exception $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Blog gagal diupdate!');
        }
    }

    public function destroy($id){
        try {
            $this->blog->destroy($id);
            return redirect()->back()->with('success', 'Blog berhasil dihapus!');
        } catch (Exception $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Blog gagal dihapus!');
        }
    }



}
