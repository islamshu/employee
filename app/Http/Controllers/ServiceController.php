<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('admin-dashbord.service.index')->with('services',Service::orderBy('id','DESC')->get());
    }
    public function create(){
        return view('admin-dashbord.service.create');  
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'type'=>'required',
            'duration'=>$request->type =='duration' ? 'required' : '',
            'qty'=>$request->type =='price' ? 'required' : '',
        ]);
        Service::create($request->all());
        return redirect()->route('services.index')->with(['success'=>'تم الاضافة بنجاح']);
    }
    public function show_model(Request $request)
    {
        $item = Service::find($request->id);
        return view('admin-dashbord.service.data_modal')->with('item', $item);
    }
    public function update_info(Request $request)
    {
        $item = Service::find($request->id);
        Service::where('id', $request->id)->update( array($request->elemnt_name=>$request->value) );
        return 1;      
    }
    public function refresh_table()
    {
        $services = Service::orderBy('id','DESC')->get();
        return view("admin-dashbord.service._table")->with('services',$services);
        
    }
    public function edit($id)
    {
        $item = Service::find($id);
    
        return view("admin-dashbord.service.edit")->with('service',$item);
        
    }
    public function update(Request $request,$id)
    {
        $item = Service::find($id);
    
    $request->validate([
        'title'=>'required',
        'price'=>'required',
        'type'=>'required',
        'duration'=>$request->type =='duration' ? 'required' : '',
        'qty'=>$request->type =='price' ? 'required' : '',
    ]);
    $item->update($request->all());
    return redirect()->route('services.index')->with(['success'=>'تم التعديل بنجاح']);
        
    }
    public function destroy($id)
    {
        $item = Service::find($id)->delete();
        return redirect()->back()->with(['success'=>'تم الحذف بنجاح']);

    }
}
