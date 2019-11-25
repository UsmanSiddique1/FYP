<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

use App\Issuedcniclist;
use App\Heclist;
use App\Examinationlist;
use Excel;

class IssuedCNICListController extends Controller
{

//Show.................................................................................................................... 
public function show()
    {      
    	   $issuedlist=Issuedcniclist::all();
           return view('backend/modules/issuedcniclist/show_issued_cniclist',compact('issuedlist'));
    }

//Download..........................................................................................................
public function Download_Issued_CNIC($type)
    {
        $data= Issuedcniclist::get()->toArray();
        return Excel::create('Downloaded Issued CNIC List', function($excel) use
           ($data) {
           $excel->sheet('mySheet', function($sheet) use ($data)
              {
                 $sheet->fromArray($data);
              });
          })->download($type);
    }



//Store....................................................................................................................
public function store(Request $request)
     {
        //getfile
        $upload=$request->file('upload_file');
        $filePath=$upload->getRealPath();

        //open & read
        $file=fopen($filePath, 'r');
        $header=fgetcsv($file);
        // dd($header);

        //Validation
        $escapedHeader=[];
        foreach ($header as $key => $value) {
         $lheader=strtolower($value);
         $escapedItem=preg_replace('/[^a-z]/', '', $lheader);
         array_push($escapedHeader, $escapedItem); 
        }
        // dd($escapedHeader);

        //lpooping other colums
       while ($columns=fgetcsv($file)) {

           if ($columns[0]=="") 
           {
               continue;
           }

       //  //trim data
       //  foreach ($columns as $key => &$value) {
       //      $value=preg_replace('/\D/', '', $value);
       // }
       //  // dd($value);

       $data=array_combine($escapedHeader, $columns);

       // //Setting Data Type
       // foreach ($data as $key => &$value) {
       //     $value=($key=="zip" || $key=="month")?(integer)$value: (float)$value;
       //     }

        //Update Table
          
           $cnic=$data['cnic'];

           $issued=Issuedcniclist::FirstOrNew(['Cnic'=>$cnic]);

           $issued->save();
       

        }//wileloop end
        return Redirect('show_issued_cniclist');

    }//store End
}
