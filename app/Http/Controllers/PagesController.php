<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use App\Bag;
use App\Evo;
use App\Heclist;
use App\Examinationlist;
use App\Issuedcniclist;
use App\ Assigned;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function landingpage(){

        return view('landingpage');
    }
      
      public function dashboard()
    
    {
        $totalexamlist = Examinationlist::all()->count();
        $totalheclist = Heclist::all()->count();
        $totalissuedlist =Issuedcniclist::all()->count();
        $totalassignedlist = Assigned::all()->count();
        $totalexamlist = Examinationlist::all()->count();
        $totallaptops = Laptop::all()->count();
        $totalbags = Bag::all()->count();
        $totalevo = Evo::all()->count();


        return view('backend/modules/dashboard', compact('totalexamlist', 'totalexamlist', 'totalheclist', 'totalissuedlist', 'totalassignedlist', 'totalexamlist', 'totallaptops', 'totalbags', 'totalevo'));
    }

   

//About Page
    public function About()
    {
        return view('backend/modules/pages/about');
    }

//Privacy Page
    public function Privacy()
    {
        return view('backend/modules/pages/privacy');
    }

//Terms & Condition Page
    public function TermsAndConditions()
    {
        return view('backend/modules/pages/t_n_c');
    }

//Documentation Page
    public function Documentation()
    {
        return view('backend/modules/pages/documentation');
    }

//Support Center Page
    public function SupportCenter()
    {
        return view('backend/modules/pages/support_center');
    }

//__________________________________________________________________________


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
