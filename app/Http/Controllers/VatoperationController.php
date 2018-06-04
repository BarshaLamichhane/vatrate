<?php

namespace App\Http\Controllers;

use App\vatoperation;
use Illuminate\Http\Request;

class VatoperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $vatdata=vatoperation::all();
     return view('clientuser.vatinfo', compact('vatdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminuser/vatui');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vat=new vatoperation();
        $vat->itemname=$request->input('itemname');
        $vat->quantity=$request->input('quantity');
        $vat->peritemprice=$request->input('price');
        $vat->vatrate=$request->input('vatpercent');
        $vat->save();
        //vatoperation::create($request->all());
        if($vat->save()){
            return array("message" =>"success");
        }
        else{
            return array("message"=> "failed");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vatoperation  $vatoperation
     * @return \Illuminate\Http\Response
     */
    public function show(vatoperation $vatoperation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vatoperation  $vatoperation
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
     * @param  \App\vatoperation  $vatoperation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vatoperation $vatoperation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vatoperation  $vatoperation
     * @return \Illuminate\Http\Response
     */
    public function destroy(vatoperation $vatoperation)
    {
        //
    }
}
