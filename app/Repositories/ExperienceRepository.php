<?php

namespace App\Repositories;

use App\Interfaces\ExperienceInterface;
use App\Models\Experience;

class ExperienceRepository implements ExperienceInterface
{
    private $experience;

    public function __construct(Experience $experience)
    {
        $this->experience = $experience;
    }

    public function getAll()
    {
        return $this->experience->all();
    }

    public function getById($id)
    {
        return $this->experience->find($id);
    }

    public function store($data)
    {
        return $this->experience->create($data);
    }

    public function update($id, $data)
    {
        return $this->experience->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->experience->find($id)->delete();
    }
}
