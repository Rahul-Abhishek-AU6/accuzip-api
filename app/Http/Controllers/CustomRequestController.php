<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomRequest;

class CustomRequestController extends Controller
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
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'method_of_contact' => 'required',
            'project_detail' => 'required'
        ]);

        $cstm = new CustomRequest;
        $cstm->name = $request->name;
        $cstm->company_name = $request->company_name;
        $cstm->email = $request->email;
        $cstm->phone_number = $request->phone_number;
        $cstm->method_of_contact = $request->method_of_contact;
        $cstm->project_detail = $request->project_detail;

        if ($cstm->save()) {
            return redirect()->route('success.message')->with(['type'=>'success','message'=>'Your request has been submitted.']);
            // return back()->with(['type'=>'success','message'=>'Your request has been submitted.']);
        }

        return redirect()->route('success.message')->with(['type'=>'error','message'=>'Something went wring please try again']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
