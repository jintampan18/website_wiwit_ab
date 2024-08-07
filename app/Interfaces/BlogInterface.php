<?php

namespace App\Interfaces;

interface BlogInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function getBySlug($slug);

    public function increment($slug);
}
