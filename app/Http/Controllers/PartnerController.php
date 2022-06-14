<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
       return view('admin-dashbord.partners.index')->With('partners',Partner::get());
    }
    public function store(Request $request){
        $first= new Partner();
        $first->image = $request->image->store('partner');
        $first->save();
        return redirect()->route('partners')->with(['success'=>'تم الاضافة بنجاح']);
    }
    public function destroy($id){
        $first= Partner::find($id);
        $first->delete();
        return redirect()->route('partners')->with(['success'=>'تم الحذف بنجاح']);
    }

}
