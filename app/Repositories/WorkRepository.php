<?php

namespace App\Repositories;

use App\Interfaces\WorkInterface;
use App\Models\Work;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WorkRepository implements WorkInterface
{
    private $work;

    public function __construct(Work $work)
    {
        $this->work = $work;
    }

    public function getAll()
    {
        return $this->work->all();
    }

    public function getById($id)
    {
        return $this->work->find($id);
    }

    public function store($data)
    {
        $filenamePhoto = uniqid() . '.' . $data['photo']->extension();
        $data['photo']->storeAs('public/works', $filenamePhoto);

        DB::beginTransaction();

        try {
            $work = $this->work->create(array_merge($data, [
                'photo' => $filenamePhoto,
            ]));

            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            Storage::delete('public/works/' . $filenamePhoto);
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function update($id, $data)
    {
        $work = $this->work->find($id);

        if (isset($data['photo'])) {
            Storage::delete('public/works/' . $work->photo);
            $filenamePhoto = uniqid() . '.' . $data['photo']->extension();
            $data['photo']->storeAs('public/works', $filenamePhoto);
        }

        DB::beginTransaction();

        try {
            $work->update(array_merge($data, [
                'photo' => $filenamePhoto ?? $work->photo,
            ]));

            DB::commit();
        } catch (\Exception $e) {
            Storage::delete('public/works/' . $filenamePhoto);
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $work = $this->work->find($id);

        Storage::delete('public/works/' . $work->photo);
        
        $work->delete();
    }


}