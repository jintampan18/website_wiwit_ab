<?php

namespace App\Repositories;

use App\Interfaces\ContactPageSettingInterface;
use App\Models\ContactPageSetting;

class ContactPageSettingRepository implements ContactPageSettingInterface
{
    private $contactPageSetting;

    public function __construct(ContactPageSetting $contactPageSetting)
    {
        $this->contactPageSetting = $contactPageSetting;
    }

    public function get()
    {
        return $this->contactPageSetting->first();
    }

    public function getById($id)
    {
        return $this->contactPageSetting->find($id);
    }

    public function store($data)
    {
        return $this->contactPageSetting->create($data);
    }

    public function update($id, $data)
    {
        return $this->contactPageSetting->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->contactPageSetting->find($id)->delete();
    }
}
