<?php

namespace App\Http\Controllers;

use App\Client;
use App\JobTitle;
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
        if(auth()->user()->type = 'admin'){
            $clients = Client::get();
        }else
        {
            $clients = Client::where('user_id',auth()->id())->get();
        }
        return view("admin-dashbord.clients.index")->with('clients',$clients); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = JobTitle::get();
        return view('admin-dashbord.clients.create')->with('jobs',$jobs);
    }
    public  function jobTitle(Request $request)
    {
        if($request->title != null){

           $car =  substr($request->title, -1);
        
        $job = JobTitle::where('title','like','%'.$request->title.'%')->first();
        // dd($job);

        if($job){
            return 0;
        }else{
        $jobb = new jobTitle();
        $jobb->title = $request->title;
        $jobb->save();
        return response()->json(['status'=>1,'data'=>$jobb]);
        }
    }

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
            'company_name'=>'required',
            'job_title'=>'required'
        ]);
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->company_name =$request->company_name;
        $client->company_url =$request->company_url;
        $job = JobTitle::where('title','like','%'.$request->title.'%')->first();
        $client->jobtitle =$job->title;
        $client->user_id =auth()->id();
        $client->facebook =$request->facebook;
        $client->twitter =$request->twitter;
        $client->instagram =$request->instagram;
        $client->snapchat =$request->snapchat;
        $client->notes =$request->notes;
        $client->save();
      
        return redirect()->route('clients.index')->with(['success'=>'تم الاضافة بنجاح']);
    }
    public function new_client()
    {
        $jobs = JobTitle::get();
        return view('admin-dashbord.clients.new_create')->with('jobs',$jobs);
    }
    public  function post_new_client(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:clients,email',
            'phone'=>'required', 
            'company_name'=>'required',
            'job_title'=>'required'
        ]);
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->company_name =$request->company_name;
        $client->company_url =$request->company_url;
        $job = JobTitle::where('title','like','%'.$request->title.'%')->first();
        $client->jobtitle =$job->title;
        $client->user_id =auth()->id();
        $client->facebook =$request->facebook;
        $client->twitter =$request->twitter;
        $client->instagram =$request->instagram;
        $client->snapchat =$request->snapchat;
        $client->notes =$request->notes;
        $client->save();
      
        return redirect()->route('communication.index')->with(['success'=>'تم الاضافة بنجاح']);
    }
    public function show_model(Request $request)
    {
        $item = Client::find($request->id);
        return view('admin-dashbord.clients.data_modal')->with('item', $item);
    }
    public function update_info(Request $request)
    {
        // dd($request->all());
        $item = Client::find($request->id);
        Client::where('id', $request->id)->update( array($request->elemnt_name=>$request->value) );
        return 1;      
    }
    public function refresh_table()
    {
        if(auth()->user()->type = 'admin'){
            $clients = Client::get();
        }else
        {
            $clients = Client::where('user_id',auth()->id())->get();
        }
    //   dd('sa');
        return view("admin-dashbord.clients._table")->with('clients',$clients);
        
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
