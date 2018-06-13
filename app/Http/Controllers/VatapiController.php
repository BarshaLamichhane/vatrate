<?php

namespace App\Http\Controllers;
use App\vatoperation;
use Illuminate\Http\Request;

class VatapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return vatoperation::all();
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
        return vatoperation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vatoperation  $post
     * @return \Illuminate\Http\Response
     */
    public function show(vatoperation $vatoperation)
    {
        //
        return $vatoperation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vatoperation  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(vatoperation $vatoperation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vatoperation  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vatoperation $vatoperation)
    {
        //
        if($post->update($request->all())){
            return $vatoperation;
        }else{
            return array("message" => "Error happened");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vatoperation  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(vatoperation $vatoperation)
    {
        //
        if($post->delete()){
            return array("message" => "Successfully Deleted");
        }else{
            return array("message" => "Error happened");
        }
    }
}
