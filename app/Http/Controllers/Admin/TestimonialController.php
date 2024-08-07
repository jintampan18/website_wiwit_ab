<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\TestimonialInterface;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonial;

    public function __construct(TestimonialInterface $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function index()
    {
        return view('admin.testimonial.index', [
            'testimonials' => $this->testimonial->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->testimonial->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'testimonial' => 'required',
            'avatar'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position'    => 'required',
            'job'         => 'required',
        ]);

        try {
            $this->testimonial->store($request->all());
            return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial created successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.testimonial.index')->with('error', 'Testimonial failed to create.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required',
            'testimonial' => 'required',
            'avatar'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position'    => 'required',
            'job'         => 'required',
        ]);

        try {
            $this->testimonial->update($id, $request->all());
            return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.testimonial.index')->with('error', 'Testimonial failed to update.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->testimonial->destroy($id);
            return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.testimonial.index')->with('error', 'Testimonial failed to delete.');
        }
    }
}
