<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ConsultationRequestCategoryInterface;

class ConsultationRequestCategoryController extends Controller
{
    private $consultationRequestCategory;

    public function __construct(ConsultationRequestCategoryInterface $consultationRequestCategory)
    {
        $this->consultationRequestCategory = $consultationRequestCategory;
    }



    public function index()
    {
        return view('admin.consultation_request_category.index',[
            'consultationRequestCategories' => $this->consultationRequestCategory->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->consultationRequestCategory->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required']
        ]);

        try {
            $this->consultationRequestCategory->store($request->all());
            return redirect()->route('admin.consultation-request-category.index')->with('success', 'Consultation Request Category has been created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.consultation-request-category.index')->with('error', 'Consultation Request Category failed to create');
        }
    }


    public function update($id, Request $request)
    {
        $request->validate([
            'name' => ['required']
        ]);

        try {
            $this->consultationRequestCategory->update($id, $request->all());
            return redirect()->route('admin.consultation-request-category.index')->with('success', 'Consultation Request Category has been updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.consultation-request-category.index')->with('error', 'Consultation Request Category failed to update');
        }
    }   


    public function destroy($id)
    {
        $this->consultationRequestCategory->destroy($id);
        return redirect()->route('admin.consultation-request-category.index')->with('success', 'Consultation Request Category has been deleted successfully');
    }   


}
