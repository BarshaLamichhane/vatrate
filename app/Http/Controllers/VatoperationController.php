<?php

namespace App\Http\Controllers;

use App\vatoperation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class VatoperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
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
       // $vattoken=vatoperation::where('id',9)->first(); //returns on fetching all contents of that particular row
       // $vattoken=vatoperation::pluck('id','tokenss');
       //;dd($token);
       $vattoken=vatoperation::where('id','=', 8)->first();
       //$vattokenn=vatoperation::select('id')->get();
      
       //if($vattoken->tokenss != (md5(md5(md5(Str::random(70)))))){
           //return("matched");

       //}
       //else{
       // return ("not matched");
       //}
       return array($vattoken->vatrate);
       
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
        Session::flash('message', 'This is a message!'); 
        Session::flash('alert-class', 'alert-success'); 

        //vatoperation::create($request->all());
        if($vat->save()){
            //return array("message" =>"success");
            return redirect('/vatcreate')->with('message', 'vatdata saved successfully! You can enter new data now');
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
        //return $vatoperation->id;
        //dd($vatoperation);
        //return $vatoperation;
       // $vatupdate=vatoperation::where('id','=',$vatoperation->id);
                                //->update(['vatrate'=>12,'peritemprice'=>66]);
                              
        // $input = $request->all();
         //$vatupdate->fill($input)->save();
        //return array($vatupdate);//gives count of how many updates are made, not how many items
       // return view ('clientuser.vatupdate', compact('vatoperation'));
       //$vatsaveupdate= new vatoperation();
       $vatoperation->vatrate=$request->input('updatedvatrate');
       $vatoperation->save();
       if($vatoperation->save()){
           return array('successfully updated');
       }
       else{
           return array('not updated');
       }
       

    
    
    }
    public function vatupdate(vatoperation $idd)
    {
       // $vatupdate=vatoperation::where('id', $idd);
         //$vatupdate->fill($input)->save();
         //return array($idd);//vatoperation vakole automatically id bujcha, $idd vannale
         //return array($vatupdate);// is done then returns null

        //return array('clientuser.vatupdate',compact('vatupdate'));
        return view ('clientuser.vatupdate', compact('idd'));


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vatoperation  $vatoperation
     * @return \Illuminate\Http\Response
     */
    public function destroy(vatoperation $vatoperation)
    {
       $vatdelete=vatoperation::where('id',$vatoperation->id)->delete();
       Session::flash('message', 'This is a message!'); 
       Session::flash('alert-class', 'alert-success'); 
       if($vatdelete){
        return redirect('/vatdata')->with('message','Data with corresponding ID deleted');
       }
     
       
    }
    public function delete(){
        return array("i will destroy");

    }
    
}
