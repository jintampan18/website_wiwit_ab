<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ExperienceInterface;
use App\Interfaces\WorkInterface;
use App\Interfaces\WorkCategoryInterface;


class PortofolioController extends Controller
{
    private $experience;
    private $work;
    private $workCategory;

    public function __construct(ExperienceInterface $experience, WorkInterface $work,WorkCategoryInterface $workCategory)
    {
        $this->experience = $experience;
        $this->work = $work;
        $this->workCategory = $workCategory;
    }

    public function index(){
        return view('user.portofolio.index',[
            'experiences' => $this->experience->getAll(),
            'works' => $this->work->getAll(),
            'workCategories' => $this->workCategory->getAll()
        ]);
    }
}
