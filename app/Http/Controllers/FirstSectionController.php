<?php

namespace App\Http\Controllers;

use App\FirstSection;
use Illuminate\Http\Request;

class FirstSectionController extends Controller
{
    public function index()
    {
       return view('admin-dashbord.first_secation.index')->With('firsts',FirstSection::first());
    }
    public function store(Request $request){
        $first= FirstSection::first();
        if($request->image != null){
            $first ->update([
                'main_title'    => ['en' => $request->main_title_en, 'ar' => $request->main_title_ar],
                'secand_title' => ['en' => $request->secand_title_en, 'ar' => $request->secand_title_ar],
                'first_btn'  =>  ['en' => $request->first_btn_en, 'ar' => $request->first_btn_ar],
                'first_link'    => $request->first_link,
                'secand_btn'  =>  ['en' => $request->secand_btn_en, 'ar' => $request->secand_btn_ar],
                'secand_link'    => $request->secand_link,
                'image' => $request->image->store('public/first_section'),
            ]);
        }else{
            $first ->update([
                'main_title'    => ['en' => $request->main_title_en, 'ar' => $request->main_title_ar],
                'secand_title' => ['en' => $request->secand_title_en, 'ar' => $request->secand_title_ar],
                'first_btn'  =>  ['en' => $request->first_btn_en, 'ar' => $request->first_btn_ar],
                'first_link'    => $request->first_link,
                'secand_btn'  =>  ['en' => $request->secand_btn_en, 'ar' => $request->secand_btn_ar],
                'secand_link'    => $request->secand_link,
            ]); 
        }
        
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
    }
}
