<?php

namespace App\Repositories;

use App\Interfaces\BlogCategoryInterface;
use App\Models\BlogCategory;

class BlogCategoryRepository implements BlogCategoryInterface
{
    private $blogCategory;

    public function __construct(BlogCategory $blogCategory)
    {
        $this->blogCategory = $blogCategory;
    }

    public function getAll()
    {
        return $this->blogCategory->all();
    }

    public function getById($id)
    {
        return $this->blogCategory->find($id);
    }

    public function store($data)
    {
        return $this->blogCategory->create($data);
    }

    public function update($id, $data)
    {
        return $this->blogCategory->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->blogCategory->find($id)->delete();
    }
    
}