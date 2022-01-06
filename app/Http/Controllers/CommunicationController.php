<?php

namespace App\Http\Controllers;

use App\Communication;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-dashbord.communication.index')->with('coms',Communication::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dashbord.communication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name'=>'required',
            'email'=>'required|unique:communications,email',
            'phone'=>'required',
            'communication'=>'required',
            'status'=>'required'
        ]);
        $com = new Communication();
        $com->company_name = $request->company_name;
        $com->email = $request->email;
        $com->phone = $request->phone;
        $com->communication = $request->communication;
        $com->status = $request->status;
        $com->status2 = $request->status2;
        $com->save();
        return redirect()->route('communication.index')->with(['success'=>'تمت الإضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function show(Communication $communication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $com = Communication::find($id);
        return view('admin-dashbord.communication.edit')->with('com',$com);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $com = Communication::find($id);
        $request->validate([
            'company_name'=>'required',
            'email'=>'required|unique:communications,email,'.$com->id,
            'phone'=>'required',
            'communication'=>'required',
            'status'=>'required'
        ]);
        $com->company_name = $request->company_name;
        $com->email = $request->email;
        $com->phone = $request->phone;
        $com->communication = $request->communication;
        $com->status = $request->status;
        $com->status2 = $request->status2;
        $com->save();
        return redirect()->route('communication.index')->with(['success'=>'تمت التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $com = Communication::find($id)->delete();
        return redirect()->route('communication.index')->with(['success'=>'تمت الحذف بنجاح']);
    }
}
