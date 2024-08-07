<?php

namespace App\Repositories;

use App\Interfaces\MaterialInterface;
use App\Models\Material;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MaterialRepository implements MaterialInterface
{
    private $material;

    public function __construct(Material $material)
    {
        $this->material = $material;
    }

    public function getAll()
    {
        return $this->material->with('materialCategory')->orderBy('created_at', 'desc')->get();
    }

    public function getById($id)
    {
        return $this->material->with('materialCategory')->find($id);
    }

    public function store($data)
    {
        $filenameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
        $data['thumbnail']->storeAs('public/materials', $filenameThumbnail);

        $filenameFile = uniqid() . '.' . $data['file']->extension();
        $data['file']->storeAs('public/materials', $filenameFile);

        DB::beginTransaction();

        try {
            $material = $this->material->create(array_merge($data, [
                'thumbnail'      => $filenameThumbnail,
                'file'           => $filenameFile,
                'download_count' => 0,
            ]));

            DB::commit();
        } catch (\Exception $e) {
            Storage::delete('public/materials/' . $filenameThumbnail);
            Storage::delete('public/materials/' . $filenameFile);
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function update($id, $data)
    {
        $material = $this->material->find($id);

        if (isset($data['thumbnail'])) {
            Storage::delete('public/materials/' . $material->thumbnail);
            $filenameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/materials', $filenameThumbnail);
        }

        if (isset($data['file'])) {
            Storage::delete('public/materials/' . $material->file);
            $filenameFile = uniqid() . '.' . $data['file']->extension();
            $data['file']->storeAs('public/materials', $filenameFile);
        }

        DB::beginTransaction();

        try {
            $material->update(array_merge($data, [
                'thumbnail' => $filenameThumbnail ?? $material->thumbnail,
                'file'      => $filenameFile ?? $material->file,
            ]));

            DB::commit();
        } catch (\Exception $e) {
            Storage::delete('public/materials/' . $filenameThumbnail);
            Storage::delete('public/materials/' . $filenameFile);
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $material = $this->material->find($id);

        Storage::delete('public/materials/' . $material->thumbnail);
        Storage::delete('public/materials/' . $material->file);

        $material->delete();
    }

    public function filter()
    {
        $downloadRange = request()->filled('download') ? explode(',', request()->download) : null;

        $materials = $this->material
            ->query()
            ->when(request()->filled('year'), function ($query) {
                $query->where('published_date', 'like', '%' . request()->year . '%');
            })
            ->when(request()->filled('category'), function ($query) {
                $query->where('material_category_id', request()->category);
            })
            ->when($downloadRange, function ($query) use ($downloadRange) {
                $query->whereBetween('download_count', [$downloadRange[0], $downloadRange[1]]);
            })
            ->when(request()->filled('title'), function ($query) {
                $query->where('title', 'like', '%' . request()->title . '%');
            })
            ->get();

        return $materials;
    }
}