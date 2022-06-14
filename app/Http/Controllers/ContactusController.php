<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-dashbord.contact.index')->with('contacts',Contactus::get());
    }

    
   
    public function show($id)
    {
       $contactus =Contactus::find($id);
       $contactus->status = 1;
       $contactus->save();
        return view('admin-dashbord.contact.show')->with('contact',$contactus );

    }

   
    public function destroy($id)
    {
        $contactus =Contactus::find($id)->delete();
        return redirect()->back()->with(['success'=>'تم الحذف بنجاح']);
        }
}
