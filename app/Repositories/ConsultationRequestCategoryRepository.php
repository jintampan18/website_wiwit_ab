<?php

namespace App\Repositories;

use App\Interfaces\ConsultationRequestCategoryInterface;
use App\Models\ConsultationRequestCategory;


class ConsultationRequestCategoryRepository implements ConsultationRequestCategoryInterface
{
    private $consultationRequestCategory;

    public function __construct(ConsultationRequestCategory $consultationRequestCategory)
    {
        $this->consultationRequestCategory = $consultationRequestCategory;
    }

    public function getAll()
    {
        return $this->consultationRequestCategory->all();
    }

    public function getById($id)
    {
        return $this->consultationRequestCategory->find($id);
    }

    public function store($data)
    {
        return $this->consultationRequestCategory->create($data);
    }

    public function update($id, $data)
    {
        return $this->consultationRequestCategory->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->consultationRequestCategory->find($id)->delete();
    }
    
}