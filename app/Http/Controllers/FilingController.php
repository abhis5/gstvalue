<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Filing;
use App\Company;

class FilingController extends Controller
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
    //     $file= new Filing();

    //     $gst =  $request['gst_id'];
    //     $file -> gst_id= $request['gst_id'];
    //     $file -> year= $request['year'];
        
         
    //     if(  !(($request['month']) == null )) {$file->month= $request['month'];}
    //     if(  !(($request['3b']) == null )) {$file->gstr_3b= $request['3b'];}
    //     if(  !(($request['pay']) == null )) {$file->paid= $request['pay'];}
        
    // // add other fields
    // $file->save();
    //    $profile = Company::find($id);
    // //  $files = DB::table('filing') -> where('gst_id', '$gst') ->get();
    // return redirect()->route('profile', ['id' => $gst]) -> with('profile', $profile) ;


   


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
