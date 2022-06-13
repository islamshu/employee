<?php

namespace App\Http\Controllers;

use App\FirstSection;
use App\Partner;
use App\Project;
use App\Statistic;
use App\ThirdSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.frontend')
        ->with('first_se',FirstSection::first())
        ->with('partner',Partner::first())
        ->with('third',ThirdSection::first())
        ->with('statistic',Statistic::first())
        ->with('programs',Project::get())

        ;
    }
}
