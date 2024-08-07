<?php

namespace App\Repositories;

use App\Interfaces\SocialMediaInterface;
use App\Models\SocialMedia;

class SocialMediaRepository implements SocialMediaInterface
{
    private $socialMedia;

    public function __construct(SocialMedia $socialMedia)
    {
        $this->socialMedia = $socialMedia;
    }

    public function getAll()
    {
        return $this->socialMedia->all();
    }

    public function getById($id)
    {
        return $this->socialMedia->find($id);
    }

    public function store($data)
    {
        return $this->socialMedia->create($data);
    }

    public function update($id, $data)
    {
        return $this->socialMedia->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->socialMedia->find($id)->delete();
    }
}
