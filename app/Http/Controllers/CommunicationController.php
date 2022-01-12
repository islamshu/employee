<?php

namespace App\Http\Controllers;

use App\Client;
use App\Communication;
use App\Service;
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
        if(auth()->user()->type = 'admin'){
            $clients = Client::get();
        }else
        {
            $clients = Client::where('user_id',auth()->id())->get();
        }
        return view('admin-dashbord.communication.index')->with('coms',Communication::get())->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_comuncate($id)
    {
        $servics = Service::get();
        $com = Communication::where('client_id',$id)->first();

        return view('admin-dashbord.communication.create')->with('com',$com)->with('servics',$servics)->with('client',Client::find($id));
    }
    public  function serviceTitle(Request $request)
    {
        if($request->title != null){

           $car =  substr($request->title, -1);
        
        $job = Service::where('title','like','%'.$request->title.'%')->first();
        // dd($job);

        if($job){
            return 0;
        }else{
        $jobb = new Service();
        $jobb->title = $request->title;
        $jobb->save();
        return response()->json(['status'=>1,'data'=>$jobb]);
        }
    }

    }
    public function add_new_communcation(Request $request){
      
        $communication = Communication::where('client_id',$request->id)->first();
        $servics = Service::get();
        return view('admin-dashbord.communication.from')->with('communication', $communication)->with('servics',$servics);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $com = Communication::where('client_id',$request->client_id)->first();
        if($com){

        
        $com->client_id =$request->client_id;
        $com->communication = $request->communication;
        $com->status = $request->status;
        $com->status2 = $request->status2;
        $com->service = $request->servicec;
        $com->users = json_encode($request->users);
        $com->metting_date = $request->metting_date;
        $com->notes = $request->notes;
        $com->save();
    }else{
            $com = new Communication();
            $com->client_id =$request->client_id;
        $com->communication = $request->communication;
        $com->status = $request->status;
        $com->status2 = $request->status2;
        $com->service = $request->servicec;
        $com->users = json_encode($request->users);
        $com->metting_date = $request->metting_date;
        $com->notes = $request->notes;
        $com->save();
        }
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
