<?php

namespace App\Repositories;

use App\Interfaces\TestimonialInterface;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialRepository implements TestimonialInterface
{
    private $testimonial;

    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function getAll()
    {
        return $this->testimonial->all();
    }

    public function getById($id)
    {
        return $this->testimonial->find($id);
    }

    public function store($data)
    {
        if (isset($data['avatar'])) {
            $filename = uniqid() . '.' . $data['avatar']->extension();
            $data['avatar']->storeAs('public/testimonial', $filename);
            $data['avatar'] = $filename;
        }

        return $this->testimonial->create($data);
    }

    public function update($id, $data)
    {
        $testimonial = $this->getById($id);
        if (isset($data['avatar'])) {
            Storage::delete('public/testimonial/' . $testimonial->avatar);
            $filename = uniqid() . '.' . $data['avatar']->extension();
            $data['avatar']->storeAs('public/testimonial', $filename);
            $data['avatar'] = $filename;
        }

        return $testimonial->update($data);
    }

    public function destroy($id)
    {
        $testimonial = $this->testimonial->find($id);
        Storage::delete('public/testimonial/' . $testimonial->avatar);
        return $testimonial->delete();
    }
}
