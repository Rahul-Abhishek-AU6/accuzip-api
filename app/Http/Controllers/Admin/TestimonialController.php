<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimonial::where('status',1)->paginate();

        return view('admin.tetimonial.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tetimonial.add-edit');
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
            'message' => 'required'
        ]);

        if ($request->image) {
            $imagePath = Storage::put('testimonial', $request->image);
        }

        $tet = new Testimonial;
        $tet->name = $request->name;
        $tet->company_name = $request->company_name;
        $tet->message = $request->message;
        if ($request->image) {
            $tet->image = $imagePath;
        }

        if ($tet->save()) {
            return redirect()->route('admin.testimonial.index')->with(['type'=>'success','message'=>'Testimonial Created successfully!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Testimonial::find($id);
        return view('admin.tetimonial.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Testimonial::find($id);
        return view('admin.tetimonial.add-edit',compact('data'));
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
            'message' => 'required',
        ]);

        if ($request->image) {
            $filename = Storage::put('testimonial', $request->image);
        }

        $tet = Testimonial::find($id);
        $tet->name = $request->name;
        $tet->company_name = $request->company_name;
        $tet->message = $request->message;
        if ($request->image) {
            $tet->image = $filename;
        }

        if ($tet->save()) {
            return redirect()->route('admin.testimonial.index')->with(['type'=>'seccess','message'=>'Updated successfully!']);
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
        $data = Testimonial::find($id);

        if ($data) {
            $data->delete();
        }

        return back()->with(['type'=>'success','message'=>'Deleted successfully']);
    }
}
