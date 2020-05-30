<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Filing;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reports.index');
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
    { }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // SELECT c.name , c.mobile , f.year , f.month , f.gstr_3b , f.gstr_1 , f.paid FROM companies c LEFT JOIN filings f on c.id = f.gst_id WHERE (c.type = 1) AND (f.year = '2019-20') AND (f.month = 1)
    public function show(Request $request)
    {
        $year = $request['year'];
        $month = $request['month'];



        $filed_id = DB::table('filings')->select(['gst_id'])->where('year', '=', $year)->where('month', '=', $month)->get();
    
        $company = Company:: where('type', '=', '1') -> get();
        
      
        $report = DB::table('companies as c')->select(
            'c.name',
            'c.mobile',
            'f.year',
            'f.month',
            'f.gstr_3b',
            'f.gstr_1',
            'f.paid'
        )->leftjoin('filings as f', 'c.id', '=', 'f.gst_id')
            ->where('year', '=', $year)->where('month', '=', $month)->get();
         
        return View('reports.show')->with('report', $report)->with('year', $year)->with('month', $month)  ->with('filed_id', $filed_id) ->with('company', $company) ;
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




// SELECT c.name , c.mobile , f.year , f.month , f.gstr_3b , f.gstr_1 , f.paid 
// FROM companies c 
// LEFT JOIN filings f 
// on c.id = f.gst_id 
// WHERE  (f.year = '2019-20') AND (f.month = 1)
// GROUP BY C.name




        // dd($report);

        //   $filter = $results -> where('year', '=', $year) -> where('month' , '=' , $month)  ->get();




    //  ID SELECTION OTHER THAN FILID
        // SELECT  DISTINCT c.id 
        // FROM companies c
        // LEFT JOIN filings f
        // ON c.id = f.gst_id WHERE NOT (year = '2019-20' and month = '1')      



//         $remaining = DB::table('companies') -> whereNotIn('id', '=', $file) -> get();
//         dd($remaining);

// // $remaining = array();
// // $company = Company::all();

// // foreach ($company as $c) { 
// //         if( !(in_array(  $c -> id  , $file))  ){
// //             array_push(  $remaining,  $c -> id );
// //         }

// // }

// dd($remaining);
