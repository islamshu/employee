<?php

namespace App\Http\Controllers;

use App\ThirdRelation;
use App\ThirdSection;
use Illuminate\Http\Request;

class ThirdSectionController extends Controller
{
    public function index()
    {
       return view('admin-dashbord.third_section.index')->With('section',ThirdSection::first());
    }
    public function store(Request $request){
        $first= ThirdSection::first();
            $first ->update([
                'body' => ['en' => $request->body_en, 'ar' => $request->body_ar],
            ]);

            if(is_array($request->addmore) || is_object($request->addmore)){
                if($first->relation->count() != 0){
                    foreach($first->relation as $ff){
                        $ff->delete();
                    }

                }
                foreach ($request->addmore as $key => $value) {
             
            $blog = ThirdRelation::create([
            'section_id'    => $first->id,
            'title' => ['en' => $value['title_en'], 'ar' =>$value['title_ar']],
            'icon' => $value['icon']
        ]);
        
            }
        }
            // foreach
            
        
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
    }
}

