<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Contactus;
use App\Partner_request;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'          => 'required',
            'email'         => 'required|email',
            'mobile'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message'       => 'required',
        ]);


        $contact = new Contactus();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->mobile;
        $contact->message = $request->message;
        $contact->save();

        return response()->json(['success'=>'Successfully']);
    }
    public function store_partner(Request $request)
    {
        $request->validate([
            'co_name'=>'required',
            'name'          => 'required',
            'email'         => 'required|email',
            'mobile'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'co_register'       => 'required',
        ]);


        $contact = new Partner_request();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->mobile;
        $contact->co_register = $request->co_register;
        $contact->co_name = $request->co_name;
        $contact->save();

        return response()->json(['success'=>'Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
