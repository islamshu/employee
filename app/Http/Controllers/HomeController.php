<?php

namespace App\Http\Controllers;

use App\FirstSection;
use App\Partner;
use App\Project;
use App\Statistic;
use App\ThirdSection;
use Session;
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
        ->with('partners',Partner::where('status','active')->get())
        ->with('third',ThirdSection::first())
        ->with('statistic',Statistic::first())
        ->with('programs',Project::get())

        ;
    }
    public function change_lang($lang){
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
