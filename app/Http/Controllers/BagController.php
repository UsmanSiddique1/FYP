<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

use App\Bag;
use App\Heclist;
use App\Examinationlist;
use App\Issuedcniclist;
use Excel;

class BagController extends Controller
{

//Download..........................................................................................................
public function Download_Bag_List($type)
    {
        $data= Bag::get()->toArray();
        return Excel::create('Downloaded Bag list', function($excel) use
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
            'BarCode' => 'required|unique:bags',
        ])->validate();


        $q=new Bag();
        $q->BarCode=$request->input('BarCode');
        $q->save();
        return Redirect('show_bag');
    }

//....................................................................................................................       
    public function show()
    {
        $values=Bag::all();
        return view('backend/modules/bag/show_bag',compact('values'));
    }

//....................................................................................................................    
    public function destroy($id)
    {
        $q=Bag::find($id);
        $q->delete();
        return response()->json([ ]); //jis page pe del ka button laga howa hai wahan ajax ki hai
                                      //or ye line ajax wali hai jo page ko refresh kiye bgair Redirect::back krwato hai 
        // return Redirect::back();
    }
}
