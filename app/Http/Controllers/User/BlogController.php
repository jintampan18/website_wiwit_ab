<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\BlogCategoryInterface;
use App\Interfaces\BlogInterface;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    private $blogCategory;

    public function __construct(BlogInterface $blog, BlogCategoryInterface $blogCategory)
    {
        $this->blog         = $blog;
        $this->blogCategory = $blogCategory;
    }

    public function index()
    {
        return view('user.blog.index', [
            'blogs' => $this->blog->getAll(),
        ]);
    }

    public function detail($slug)
    {
        $this->blog->increment($slug); // increment the view_count

        return view('user.blog.detail', [
            'blog'           => $this->blog->getBySlug($slug),
            'blogCategories' => $this->blogCategory->getAll()
        ]);
    }
}
