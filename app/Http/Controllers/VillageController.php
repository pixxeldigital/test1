<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Village;
use Illuminate\Support\Facades\Input;
use Response;
use Validator;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Villages";
        $villages = Village::all();
        return view('masters.villages', compact('title', 'villages'));
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
        $village = new Village;
        $village->name = $request->name;
        $village->branch_name = $request->branch_name;
        $village->branch_code = $request->branch_code;
        $village->status = $request->status;
        $rules = array(
            'name' => 'required',
            'branch_name' => 'required',
            'branch_code' => 'required',
            'status' => 'required|numeric|digits_between:0,1',
            ); 
        $validation = Validator::make($request->all(), $rules);
        if($validation->fails()){
             return response()->json(['error'=>$validation->errors()->all()]);
        } 
        if($village->save()){
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
        $updateData = Village::find($id);
        $rules = array(
            'name' => 'required',
            'branch_name' => 'required',
            'branch_code' => 'required',
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
         $village=Village::find($id);
        if($village->delete()){
            return response()->json(['msg'=>'success']);
        }else{
            return response()->json(['error'=>'Something wrong went']);
        }
    }
}
