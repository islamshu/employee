<?php

namespace App\Http\Controllers;

use App\FirstSection;
use App\Partner;
use App\Project;
use App\Statistic;
use App\ThirdSection;
use Session;
use Illuminate\Http\Request;
use CountryFlag;

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
    public function index(Request $request)
    {
        if (config('app.env') === 'production') {
            $ip = $request->ip();
        }else{
            $ip ='84.239.49.235';

        }
        $country = \Location::get($ip)->countryCode;
        dd('d');

        return view('layouts.frontend')
        ->with('first_se',FirstSection::first())
        ->with('partners',Partner::where('status','active')->where('deleted_at',null)->get())
        ->with('third',ThirdSection::first())
        ->with('statistic',Statistic::first())
        ->with('programs',Project::get())
        ->with('country',$country)

        ;
    }
    public function change_lang($lang){
        Session::put('lang', $lang);
        return redirect()->back();
    }
    public function about_pr($id)
    {
        $pro = Project::find($id);
        return view('layouts.single_program')->with('pro',$pro);
    }
}
