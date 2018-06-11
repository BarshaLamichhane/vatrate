<?php

namespace App\Http\Controllers;

use App\vatoperation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    if(is_null($vatdata)){
    return array("message"=>"not found");
    }
    
     else{
        return view('clientuser.vatinfo', compact('vatdata'));

     }  
    }
    public function vattoken(vatoperation $token){
        //$vattoken=vatoperation::pluck('id'); //returns on fetching all contents of that particular column
        //$vattoken=vatoperation::where('id',5)->first(); //returns on fetching all contents of that particular row
       // $vattoken=vatoperation::pluck('id','tokenss');
       //;dd($token);
       

       
       //$vatinfo=vatoperation::where('id','=', 5)->first();
       
       if($vatinfo->tokenss==$vat->tokenss){
           return("matched");

       }
       else{
        return ("error");
       }
       
       // return array('clientuser.vattoken', compact('vattoken'));
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
        $vat->tokenss=md5(md5(md5(Str::random(70))));
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
