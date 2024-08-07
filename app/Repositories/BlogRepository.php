<?php

namespace App\Repositories;

use App\Interfaces\BlogInterface;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogRepository implements BlogInterface
{
    private $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog
            ->with('blogCategory')
            ->orderBy('view_count', 'desc')
            ->orderBy('published_date', 'desc')
            ->get();
    }

    public function getById($id)
    {
        return $this->blog->find($id);
    }

    public function getBySlug($slug)
    {
        return $this->blog->with(['blogCategory'])->where('slug', $slug)->first();
    }

    public function store($data)
    {
        $fileNameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
        $data['thumbnail']->storeAs('public/blogs/thumbnail', $fileNameThumbnail);

        $slug        = str_replace(' ', '-', strtolower($data['title']));
        $isSlugExist = $this->blog->where('slug', $slug)->first();
        if ($isSlugExist) {
            $slug = $slug . '-' . uniqid();
        }

        DB::beginTransaction();

        try {
            $blog = $this->blog->create(
                array_merge($data, [
                    'blog_category_id' => $data['blog_category_id'],
                    'title'            => $data['title'],
                    'thumbnail'        => $fileNameThumbnail,
                    'content'          => $data['content'],
                    'author'           => $data['author'],
                    'published_date'   => date('Y-m-d', strtotime($data['published_date'])),
                    'slug'             => $slug,
                ]),
            );
        } catch (\Throwable $th) {
            throw $th;

            Storage::delete('public/blogs/thumbnail/' . $fileNameThumbnail);

            DB::rollBack();
        }
        DB::commit();
    }

    public function update($id, $data)
    {
        $blog = $this->blog->find($id);

        if (isset($data['thumbnail'])) {
            // delete old file
            Storage::delete('public/blogs/thumbnail/' . $blog->thumbnail);

            // upload new file
            $fileNameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/blogs/thumbnail', $fileNameThumbnail);
        }

        $slug        = str_replace(' ', '-', strtolower($data['title']));
        $isSlugExist = $this->blog->where('slug', $slug)->first();
        if ($isSlugExist) {
            $slug = $slug . '-' . uniqid();
        }

        DB::beginTransaction();

        try {
            $blog->update(
                array_merge($data, [
                    'blog_category_id' => $data['blog_category_id'],
                    'title'            => $data['title'],
                    'thumbnail'        => isset($data['thumbnail']) ? $fileNameThumbnail : $blog->thumbnail,
                    'content'          => $data['content'],
                    'author'           => $data['author'],
                    'published_date'   => date('Y-m-d', strtotime($data['published_date'])),
                    'slug'             => $slug,
                ]),
            );
        } catch (\Throwable $th) {
            throw $th;

            Storage::delete('public/blogs/thumbnail/' . $fileNameThumbnail);

            DB::rollBack();
        }
        DB::commit();
    }

    public function destroy($id)
    {
        $blog = $this->getById($id);

        // delete old file
        Storage::delete('public/blogs/thumbnail/' . $blog->thumbnail);

        $blog->delete();
    }

    public function increment($slug)
    {
        return $this->blog->where('slug', $slug)->increment('view_count');
    }
}
