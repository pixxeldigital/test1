<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use Illuminate\Support\Facades\Input;
use Response;
use Validator;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Branches";
        $branches = Branch::all();
        return view('masters.branches', compact('title', 'branches'));
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
        $branch = new Branch;
        $branch->name = $request->name;
        $branch->code = $request->code;
        $branch->status = $request->status;
        $rules = array(
            'name' => 'required',
            'code' => 'required',
            'status' => 'required|numeric|digits_between:0,1',
            ); 
        $validation = Validator::make($request->all(), $rules);
        if($validation->fails()){
             return response()->json(['error'=>$validation->errors()->all()]);
        } 
        
        if($branch->save()){
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
        $updateData = Branch::find($id);
        $rules = array(
            'name' => 'required',
            'code' => 'required',
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
        $branch=Branch::find($id);
        if($branch->delete()){
            return response()->json(['msg'=>'success']);
        }else{
            return response()->json(['error'=>'Something wrong went']);
        }
    }
}
