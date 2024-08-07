<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\SocialMediaInterface;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    private $socialMedia;

    public function __construct(SocialMediaInterface $socialMedia)
    {
        $this->socialMedia = $socialMedia;
    }

    public function index()
    {
        return view('admin.socialmedia.index', [
            'socialMedias' => $this->socialMedia->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->socialMedia->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'icon' => ['required'],
            'url' => ['required']
        ]);

        try {
            $this->socialMedia->store($request->all());
            return redirect()->route('admin.social-media.index')->with('success', 'Social Media has been added successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.social-media.index')->with('error', 'Social Media failed to add');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'icon' => ['required'],
            'url' => ['required']
        ]);

        try {
            $this->socialMedia->update($id, $request->all());
            return redirect()->route('admin.social-media.index')->with('success', 'Social Media has been updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.social-media.index')->with('error', 'Social Media failed to update');
        }
    }

    public function destroy($id)
    {
        try {
            $this->socialMedia->destroy($id);
            return redirect()->route('admin.social-media.index')->with('success', 'Social Media has been deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.social-media.index')->with('error', 'Social Media failed to delete');
        }
    }
}
