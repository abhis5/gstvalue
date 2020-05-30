<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Company;
use App\Filing;



class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = DB::table('companies')->get(); 
        return view('company', ['company' => $company]);


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
        
        
        $company= new Company();
        
        $company->name= $request['name'];
        $company->gst_no= $request['gst_no'];

        $company->address= $request['address'];
        $company->mobile= $request['mobile'];
        $company->email= $request['email'];
        $company->email_pass= $request['email_pass'];
        $company->gst_id= $request['gst_id'];
        $company->gst_pass= $request['type'];
        $company->type= $request['type'];
       
    // add other fields
    $company->save();
    return redirect('/company');

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
        $company = Company::find($id);
        return View('company.editData') ->with('company', $company);
        
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
        $files = Filing::where('gst_id', '=', $id) -> orderBy('year', 'desc') -> orderBy('month' , 'desc') ->get();

        $company = Company::find($id);
        $profile = $company;
        $company->name= $request['name'];
        $company->gst_no= $request['gst_no'];

        $company->address= $request['address'];
        $company->mobile= $request['mobile'];
        $company->email= $request['email'];
        $company->email_pass= $request['email_pass'];
        $company->gst_id= $request['gst_id'];
        $company->gst_pass= $request['type'];
        $company->type= $request['type'];
    $company->save();
    return View('profile') -> with('profile', $profile) -> with('files' , $files) ->  with('CompanyUpdateSuccess', 'Updated Successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('companies')->where('id', '=', $id)->delete();
         return redirect('/company');
    }
}
