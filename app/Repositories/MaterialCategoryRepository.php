<?php

namespace App\Repositories;

use App\Interfaces\MaterialCategoryInterface;
use App\Models\MaterialCategory;

class MaterialCategoryRepository implements MaterialCategoryInterface
{
    private $materialCategory;

    public function __construct(MaterialCategory $materialCategory)
    {
        $this->materialCategory = $materialCategory;
    }

    public function getAll()
    {
        return $this->materialCategory->all();
    }

    public function getById($id)
    {
        return $this->materialCategory->find($id);
    }

    public function store($data)
    {
        return $this->materialCategory->create($data);
    }

    public function update($id, $data)
    {
        return $this->materialCategory->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->materialCategory->find($id)->delete();
    }
}
