<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ConsultationRequestInterface;
use App\Interfaces\ConsultationRequestCategoryInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ConsultationRequestController extends Controller
{
    private $consultationRequest;
    private $consultationRequestCategory;

    public function __construct(ConsultationRequestInterface $consultationRequest, ConsultationRequestCategoryInterface $consultationRequestCategory) {
        $this->consultationRequest = $consultationRequest;
        $this->consultationRequestCategory = $consultationRequestCategory;
    }

    public function index()
    {
        $consultationRequests = $this->consultationRequest->getAll();
        $consultationRequestCategories = $this->consultationRequestCategory->getAll();

        // Pagination
        $currentPage = Paginator::resolveCurrentPage() ?? 1;
        $perPage = 10;
        $consultationRequestsPaginated = new LengthAwarePaginator(
            $consultationRequests->forPage($currentPage, $perPage),
            $consultationRequests->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('admin.consultation_request.index', compact('consultationRequestsPaginated', 'consultationRequestCategories'));

        // return view('admin.consultation_request.index',[
        //     'consultationRequests' => $this->consultationRequest->getAll(),
        //     'consultationRequestCategories' => $this->consultationRequestCategory->getAll()
        // ]);
    }

    public function show($id)
    {
        return response()->json($this->consultationRequest->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'consultation_request_category_id' => ['required','exists:consultation_request_category,id'],
            'name' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required']
        ]);
        try {
            $this->consultationRequest->store($request->all());
            return redirect()->route('admin.consultation-request.index')->with('success', 'Consultation Request has been created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.consultation-request.index')->with('error', 'Consultation Request failed to create');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'consultation_request_category_id' => ['required','exists:consultation_request_category,id'],
            'name' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required']
        ]);

        try {
            $this->consultationRequest->update($id, $request->all());
            return redirect()->route('admin.consultation-request.index')->with('success', 'Consultation Request has been updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.consultation-request.index')->with('error', 'Consultation Request failed to update');
        }
    }



    public function destroy($id)
    {
        $this->consultationRequest->destroy($id);
        return redirect()->route('admin.consultation-request.index')->with('success', 'Consultation Request has been deleted successfully');
    }
}
