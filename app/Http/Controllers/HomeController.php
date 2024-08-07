<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ConsultationRequestInterface;
use App\Interfaces\ConsultationRequestCategoryInterface;
use App\Interfaces\TestimonialInterface;
use App\Interfaces\PartnerInterface;
use App\Interfaces\ContactPageSettingInterface;
use App\Interfaces\SocialMediaInterface;

class HomeController extends Controller
{
    private $consultationRequest;
    private $consultationRequestCategory;
    private $testimonial;
    private $partner;
    private $contact;
    private $socialMedia;

    public function __construct(ConsultationRequestInterface $consultationRequest, ConsultationRequestCategoryInterface $consultationRequestCategory, TestimonialInterface $testimonial, PartnerInterface $partner, ContactPageSettingInterface $contact, SocialMediaInterface $socialMedia)
    {
        $this->consultationRequest         = $consultationRequest;
        $this->consultationRequestCategory = $consultationRequestCategory;
        $this->testimonial                 = $testimonial;
        $this->partner                     = $partner;
        $this->contact                     = $contact;
        $this->socialMedia                 = $socialMedia;
    }

    public function index()
    {
        return view('home', [
            'consultationRequests'          => $this->consultationRequest->getAll(),
            'consultationRequestCategories' => $this->consultationRequestCategory->getAll(),
            'testimonials'                  => $this->testimonial->getAll()->take(3),
            'partners'                      => $this->partner->getAll(),
            'contacts'                      => $this->contact->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'consultation_request_category_id' => ['required', 'exists:consultation_request_category,id'],
            'name'                             => ['required'],
            'phone_number'                     => ['required'],
            'email'                            => ['required', 'email'],
            'subject'                          => ['required'],
            'message'                          => ['required']
        ]);
        try {
            $this->consultationRequest->store($request->all());
            return redirect()->route('home')->with('success', 'Consultation Request has been created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('error', 'Consultation Request failed to create');
        }
    }
}
