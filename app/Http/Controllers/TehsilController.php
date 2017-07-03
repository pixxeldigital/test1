<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tehsil;
use Illuminate\Support\Facades\Input;
use Response;
use Validator;

class TehsilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Tehsils";
        $tehsils = Tehsil::all();
        return view('masters.tehsils', compact('title', 'tehsils'));
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
        $tehsil = new Tehsil;
        $tehsil->name = $request->name;
        $tehsil->branch_name = $request->branch_name;
        $tehsil->branch_code = $request->branch_code;
        $tehsil->status = $request->status;
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
        if($tehsil->save()){
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
        $updateData = Tehsil::find($id);
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
        $tehsil=Tehsil::find($id);
        if($tehsil->delete()){
            return response()->json(['msg'=>'success']);
        }else{
            return response()->json(['error'=>'Something wrong went']);
        }
    }
}
