<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Filing;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      
        $file= new Filing();

       
        $file -> gst_id= $request['gst_id'];
        $file -> year= $request['year'];
        
         
        if(  !(($request['month']) == null )) {$file->month= $request['month'];}
        if(  !(($request['3b']) == null )) {$file->gstr_3b= $request['3b'];}
        if(  !(($request['r1']) == null )) {$file->gstr_1= $request['r1'];}
        if(  !(($request['pay']) == null )) {$file->paid= $request['pay'];}
        
    // add other fields
    $file->save();
  
    return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $profile = Company::find($id);
        
        $files = Filing::where('gst_id', '=', $id) -> orderBy('year', 'desc')->get();

    //  dd($files);
         return View('profile') ->with('profile', $profile) -> with('files' , $files) ;
      //  return view('profile',compact('profile','files'));
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

 
    public function update(Request $request, $id)
    {
        //
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
    }
}
