<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ContactPageSettingInterface;
use Illuminate\Http\Request;

class ContactPageSettingController extends Controller
{
    private $contactPageSetting;

    public function __construct(ContactPageSettingInterface $contactPageSetting)
    {
        $this->contactPageSetting = $contactPageSetting;
    }

    public function index()
    {
        return view('admin.contact_page_setting.index', [
            'contactPageSetting' => $this->contactPageSetting->get()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->contactPageSetting->getById($id));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'address'        => 'required',
            'working_hours'  => 'required',
            'personal_email' => 'required',
            'office_email'   => 'required'
        ]);

        try {
            $this->contactPageSetting->store($request->all());
            return redirect()->back()->with('success', 'Contact page setting successfully added!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to add contact page setting!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'address'        => 'required',
            'working_hours'  => 'required',
            'personal_email' => 'required',
            'office_email'   => 'required'
        ]);

        try {
            $this->contactPageSetting->update($id, $request->all());
            return redirect()->back()->with('success', 'Contact page setting successfully updated!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to update contact page setting!');
        }
    }

    public function destroy($id)
    {
        try {
            $this->contactPageSetting->destroy($id);
            return redirect()->back()->with('success', 'Contact page setting successfully deleted!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to delete contact page setting!');
        }
    }

}
