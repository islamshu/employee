<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-dashbord.clients.index')->with('clients',Client::get()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dashbord.clients.create');
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
            'name'=>'required',
            'email'=>'required|unique:clients,email',
            'phone'=>'required', 
            'link'=>'required'
        ]);
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->link = $request->link;
        if($request->image != null){
            $client->image = $request->image->store('clients');
        }
        $client->save();
        return redirect()->route('clients.index')->with(['success'=>'تم الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin-dashbord.clients.edit')->with('client',$client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $client = Client::find($id);
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:clients,email,'.$client->id,
            'phone'=>'required', 
            'link'=>'required'
        ]);
        
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->link = $request->link;
        if($request->image != null){
            $client->image = $request->image->store('clients');
        }
        $client->save();
        return redirect()->route('clients.index')->with(['success'=>'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();
        return redirect()->route('clients.index')->with(['success'=>'تم الحذف بنجاح']);
    }
}
