<?php

namespace App\Http\Controllers;

use App\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index(){
        return view('admin-dashbord.statistic.index')->with('statistic',Statistic::first());
    }
    public function store(Request $request){
        $sta = Statistic::first();
        $sta->update([
            'main_title' => ['en' => $request->main_title_en, 'ar' => $request->main_title_ar],
            'title1' => ['en' => $request->title1_en, 'ar' => $request->title1_ar],
            'title2' => ['en' => $request->title2_en, 'ar' => $request->title2_ar],
            'title3' => ['en' => $request->title3_en, 'ar' => $request->title3_ar],
            'title4' => ['en' => $request->title4_en, 'ar' => $request->title4_ar],
            'number1'=>$request->num1,
            'number2'=>$request->num2,
            'number3'=>$request->num3,
            'number4'=>$request->num4,
            'icon1'=>$request->icon1,
            'icon2'=>$request->icon2,
            'icon3'=>$request->icon3,
            'icon4'=>$request->icon4,
        ]);
        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);

    }
}
