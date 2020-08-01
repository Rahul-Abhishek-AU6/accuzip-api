<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Attribute::where('status','ACTIVE')->withCount('attributeValue')->get();
        return view('admin.attribute.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attribute.add-edit',compact('data'));
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
            'attribute_type' => 'required'
        ]);

        $data = new Attribute;
        $data->name = $request->name;
        $data->type = $request->attribute_type;

        if ($data->save()) {
            return redirect()->route('admin.attribute.index')->with(['type'=>'success','message'=>'Attribute created']);
        }
        return redirect()->route('admin.attribute.index')->with(['type'=>'error','message'=>'Something went wrong']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Attribute::find($id);

        return view('admin.attribute.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Attribute::find($id);

        return view('admin.attribute.add-edit',compact('data'));
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
        $request->validate([
            'name' => 'required',
            'attribute_type' => 'required'
        ]);
        $data = Attribute::find($id);

        $data->name = $request->name;
        $data->type = $request->attribute_type;

        if ($data->save()) {
            return redirect()->route('admin.attribute.index')->with(['type'=>'success','message'=>'Attribute updated!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Attribute::find($id);

        if ($data) {
            $data->status = 'INACTIVE';
            $data->save();
        }

        return back()->with(['type'=>'success','message'=>'Records updated!']);

    }
}
