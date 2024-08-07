<?php

namespace App\Repositories;

use App\Interfaces\PartnerInterface;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerRepository implements PartnerInterface
{
    private $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function getAll()
    {
        return $this->partner->all();
    }

    public function getById($id)
    {
        return $this->partner->find($id);
    }

    public function store($data)
    {
        $filenameLogo = uniqid() . '.' . $data['logo']->extension();
        $data['logo']->storeAs('public/partner', $filenameLogo);

        $this->partner->create([
            'name' => $data['name'],
            'logo' => $filenameLogo,
        ]);
    }

    public function update($id, $data)
    {
        $partner = $this->partner->find($id);

        if (isset($data['logo'])) {
            Storage::delete('public/partner/' . $partner->logo);
            $filenameLogo = uniqid() . '.' . $data['logo']->extension();
            $data['logo']->storeAs('public/partner', $filenameLogo);
            $partner->logo = $filenameLogo;
        }

        $partner->name = $data['name'];
        $partner->save();
    }

    public function destroy($id)
    {
        $partner = $this->partner->find($id);
        Storage::delete('public/partner/' . $partner->logo);
        $partner->delete();
    }
}
