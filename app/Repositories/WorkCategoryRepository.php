<?php

namespace App\Repositories;

use App\Interfaces\WorkCategoryInterface;
use App\Models\WorkCategory;

class WorkCategoryRepository implements WorkCategoryInterface
{
    private $workCategory;

    public function __construct(WorkCategory $workCategory)
    {
        $this->workCategory = $workCategory;
    }

    public function getAll()
    {
        return $this->workCategory->all();
    }

    public function getById($id)
    {
        return $this->workCategory->find($id);
    }

    public function store($data)
    {
        return $this->workCategory->create($data);
    }

    public function update($id, $data)
    {
        return $this->workCategory->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->workCategory->find($id)->delete();
    }


}