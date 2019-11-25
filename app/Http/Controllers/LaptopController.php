<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;
use App\Laptop;
use Excel;

class LaptopController extends Controller
{

//Download..........................................................................................................
public function Download_Laptop_List($type)
    {
        $data= Laptop::get()->toArray();
        return Excel::create('Downloaded Laptop list', function($excel) use
           ($data) {
           $excel->sheet('mySheet', function($sheet) use ($data)
              {
                 $sheet->fromArray($data);
              });
          })->download($type);
    }

//..........................................................................................................
    public function store(Request $request)
    {

        Validator::make($request->all(), [            
            'Barcode' => 'required|unique:laptops',
        ])->validate();


        $q=new Laptop();
        $q->Barcode=$request->input('Barcode');
        $q->save();
        return Redirect('show_laptop');
    }

//..............................................................................................................
    public function show()
    {
        $values=Laptop::all();
        return view('backend/modules/laptop/show_laptop',compact('values'));
    }

 //..............................................................................................................  
    public function destroy($id)
     {

        $q=Laptop::find($id);
        $q->delete();
        return response()->json([ ]); //jis page pe del ka button laga howa hai wahan ajax ki hai
                                      //or ye line ajax wali hai jo page ko refresh kiye bgair Redirect::back krwato hai 
        // return Redirect::back();
    }
}
