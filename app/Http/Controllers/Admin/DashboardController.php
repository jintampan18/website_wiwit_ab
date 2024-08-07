<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\WorkInterface;
use App\Interfaces\ExperienceInterface;
use App\Interfaces\EventInterface;
use App\Interfaces\MaterialInterface;
use App\Interfaces\TestimonialInterface;
use App\Interfaces\BlogInterface;




class DashboardController extends Controller
{
    private $work;
    private $experience;
    private $event;
    private $material;
    private $testimonial;
    private $blog;

    public function __construct(WorkInterface $work, ExperienceInterface $experience, EventInterface $event, MaterialInterface $material, TestimonialInterface $testimonial, BlogInterface $blog)
    {
        $this->work = $work;
        $this->experience = $experience;
        $this->event = $event;
        $this->material = $material;
        $this->testimonial = $testimonial;
        $this->blog = $blog;
    }

    public function index()
    {
        return view('admin.dashboard',[
            'works' => $this->work->getAll(),
            'experiences' => $this->experience->getAll(),
            'events' => $this->event->getAll(),
            'materials' => $this->material->getAll(),
            'testimonials' => $this->testimonial->getAll(),
            'blogs' => $this->blog->getAll()
        ]);
    }
}
