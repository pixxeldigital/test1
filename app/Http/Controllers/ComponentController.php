<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component;
use Illuminate\Support\Facades\Input;
use Response;
use Validator;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "All Components";
        $components = Component::all();
        return view('masters.components', compact('title', 'components'));
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
        //
        $this->request = $request;
        $reqdata = $request->all();
        $component = new Component;
        $component->name = $request->name;
        $component->default_qty = $request->default_qty;
        $component->status = $request->status;
        $rules = array(
            'name' => 'required',
            'default_qty' => 'required|numeric',
            'status' => 'required|numeric|digits_between:0,1',
            ); 
        $validation = Validator::make($request->all(), $rules);
        if($validation->fails()){
             return response()->json(['error'=>$validation->errors()->all()]);
        } 
        
        if($component->save()){
            return response()->json(['msg'=>'Done']);
        }else{
            return response()->json(['msg'=>'Something Went Wrong']);
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
        $data=$request->all();
        $updateData = Component::find($id);
        $rules = array(
            'name' => 'required',
            'default_qty' => 'required|numeric',
            'status' => 'required|numeric|digits_between:0,1',
            ); 
        $validation = Validator::make($request->all(), $rules);
        if($validation->fails()){
             return response()->json(['error'=>$validation->errors()->all()]);
        } 
        if($updateData->fill($data)->save()){
            return response()->json(['msg'=>'Done']);
        }else{
            return response()->json(['msg'=>'Something Went Wrong']);
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
        //
         $component=Component::find($id);
        if($component->delete()){
            return response()->json(['msg'=>'success']);
        }else{
            return response()->json(['error'=>'Something wrong went']);
        }
    }
}
