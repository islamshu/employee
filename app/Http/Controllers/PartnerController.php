<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
       return view('admin-dashbord.partners.index')->With('partner',Partner::first());
    }
    public function store(Request $request){
        $first= Partner::first();
        if($request->image != null){
            $first ->update([
                'title'    => ['en' => $request->title_en, 'ar' => $request->title_ar],
                'body' => ['en' => $request->body_en, 'ar' => $request->body_ar],
                'btn'  =>  ['en' => $request->btn_en, 'ar' => $request->btn_ar],
                'link'  => $request->link,
                'image' => $request->image->store('public/partner'),
            ]);
        }else{
            $first ->update([
                'title'    => ['en' => $request->title_en, 'ar' => $request->title_ar],
                'body' => ['en' => $request->body_en, 'ar' => $request->body_ar],
                'btn'  =>  ['en' => $request->btn_en, 'ar' => $request->btn_ar],
                'link'  =>  $request->link,
            ]); 
        }
        
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
    }
}
