<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Company;
use App\Filing;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\If_;

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
        $requestData = "kjfksdjgkdgjhakgklg ";
        // dd($requestData);
         $profile =  $request['gst_id'];
        if ((($request['month']) == 999)) {
            return redirect()->back()->with('selectMonth', "Select Month");
        }
        try {
            $file = new Filing();
            $file->gst_id = $request['gst_id'];
            $file->year = $request['year'];
            if (!(($request['month']) == null)) {
                $file->month = $request['month'];
            }
            if (!(($request['3b']) == null)) {
                $file->gstr_3b = $request['3b'];
            }
            if (!(($request['r1']) == null)) {
                $file->gstr_1 = $request['r1'];
            }
            if (!(($request['pay']) == null)) {
                $file->paid = $request['pay'];
            }
            $file->save();
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('duplicateMonth', "");
        }

        return redirect()->route('profile', ['id' => $profile])->with('addSuccess', "Added Successfully!");

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

        $files = Filing::where('gst_id', '=', $id)->orderBy('year', 'desc')->orderBy('month', 'desc')->get();

        //  dd($files);
        return View('profile')->with('profile', $profile)->with('files', $files);
        //  return view('profile',compact('profile','files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {

        $edit =  Filing::find($id);
        $profile = $edit->gst_id;

        $edit->gstr_3b = $request['3b'];
        $edit->gstr_1 = $request['r1'];
        $edit->paid = $request['pay'];
        $edit->save();
        //    flash('message', "Special message goes here");
        return redirect()->route('profile', ['id' => $profile])->with('editSuccess', 'Updated Successfully!');
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


    public function showEdit($id)
    {
        $filingData = Filing::find($id);
        $gst_id = $filingData->gst_id;
        $profile = Company::find($gst_id);


        return View('profile.filingEdit')->with('filingData', $filingData)->with('profile', $profile);
    }
}
