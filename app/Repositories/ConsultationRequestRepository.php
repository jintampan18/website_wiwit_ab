<?php

namespace App\Repositories;

use App\Interfaces\ConsultationRequestInterface;
use App\Models\ConsultationRequest;


class ConsultationRequestRepository implements ConsultationRequestInterface
{

    private $consultationRequest;

    public function __construct(ConsultationRequest $consultationRequest)
    {
        $this->consultationRequest = $consultationRequest;
    }

    public function getAll()
    {
        return $this->consultationRequest->all();
    }


    public function getById($id)
    {
        return $this->consultationRequest->find($id);
    }

    public function store($data)
    {
        return $this->consultationRequest->create($data);
    }

    public function update($id, $data)
    {
        return $this->consultationRequest->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->consultationRequest->find($id)->delete();
    }

}