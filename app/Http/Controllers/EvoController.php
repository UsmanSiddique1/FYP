<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

use App\Evo;
use App\Heclist;
use App\Examinationlist;
use App\Issuedcniclist;
use Excel;

class EvoController extends Controller
{

//Download..........................................................................................................
public function Download_Evo_List($type)
    {
        $data= Evo::get()->toArray();
        return Excel::create('Downloaded Evo list', function($excel) use
           ($data) {
           $excel->sheet('mySheet', function($sheet) use ($data)
              {
                 $sheet->fromArray($data);
              });
          })->download($type);
    }


//....................................................................................................................    
    public function store(Request $request)
    {

        Validator::make($request->all(), [            
            'barcode' => 'required|unique:evos',
        ])->validate();


        $q=new Evo();
        $q->barcode=$request->input('barcode');
        $q->save();
        return Redirect('show_evo');
    }
//....................................................................................................................

    public function show()
    {
        $values=Evo::all();
        return view('backend/modules/evo/show_evo',compact('values'));
    }

//....................................................................................................................
    public function destroy($id)
    {
        $q=Evo::find($id);
        $q->delete();
        return response()->json([ ]); //jis page pe del ka button laga howa hai wahan ajax ki hai
                                      //or ye line ajax wali hai jo page ko refresh kiye bgair Redirect::back krwato hai 
        // return Redirect::back();
    }
}
