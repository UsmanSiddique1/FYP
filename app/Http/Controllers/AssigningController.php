<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;
use Illuminate\Support\Facades\Auth;

use App\Laptop;
use App\Bag;
use App\Evo;
use App\Heclist;
use App\Examinationlist;
use App\Issuedcniclist;
use App\ Assigned;
use Excel;

class AssigningController extends Controller
{

 //Download......................................................................................................
public function Download_Assigned_List($type) {

        Excel::create('Assigned Student List', function($excel) {

        $excel->sheet('Sheet 1', function($sheet) {

          $values = DB::table('assigneds')
        ->leftjoin('laptops', 'assigneds.laptop_barcode', '=', 'laptops.Barcode')
        ->leftjoin('bags', 'assigneds.bag_barcode', '=', 'bags.BarCode')
        ->leftjoin('evos', 'assigneds.evo_barcode', '=', 'evos.BarCode')
        ->get()->toArray();
                

                foreach($values as $value) {
                  


                 $data[] = array(
                   
                  $value->id,  
                  $value->Barcode,
                  $value->BarCode,
                  $value->barcode,
                  $value->USER_ID,
                  $value->HEC_ID,
                  $value->FULL_NAME,
                  $value->CNIC_,
                  $value->ENROLLMENT_NO,
                  $value->DEGREE_TITLE,
                  $value->DEPARTMENT,     

                );
            }//end foreach

            $sheet->fromArray($data, null, 'A1', false, false);
            $headings = array('ID','Laptop Barcode', 'Bag Barcode', 'Evo Barcode', 'User ID','HEC ID',
            	'Full Name', 'CNIC', 'Enrollment No', 'degree title', 'department');

            $sheet->prependRow(1, $headings);
        });
    })->export($type);
    }//end download function






//..............................................................................................................
    public function Show_Assigning_Page($hec_id)
    {

       $assigns=Heclist::where('hec_id', $hec_id)->get();
       // print_r($assigns);
        return view('backend/modules/assigning/show_assigning_page',compact('assigns'));
    }




//..............................................................................................................
    public function Submit_Assigning_Page($hec_id, Request $request)
    {

    	Validator::make($request->all(), [            
            'laptop_barcode' => 'required|unique:assigneds',  //laptop barcode
            'bag_barcode' => 'required|unique:assigneds',     //bag barcode
            'evo_barcode' => 'required|unique:assigneds',     //evo barcode    
        ])->validate();

   
   $USER_ID=Auth::user()->id;
   $laptop_barcode=$request->input('laptop_barcode');
   $bag_barcode=$request->input('bag_barcode');
   $evo_barcode=$request->input('evo_barcode');

   $hecdatas=Heclist::where('hec_id', $hec_id)->get();

foreach($hecdatas as $hecdata){
    $q=DB::table('assigneds')->insert(['USER_ID' => $USER_ID, 'HEC_ID' => $hecdata->hec_id, 
    	'FULL_NAME'=>$hecdata->full_name, 'CNIC_'=>$hecdata->cnic, 'ENROLLMENT_NO'=>$hecdata->enrollment_no,
    	'DEGREE_TITLE'=>$hecdata->degree_title,'DEPARTMENT'=>$hecdata->department,
    	'laptop_barcode' => $laptop_barcode,'bag_barcode' => $bag_barcode,'evo_barcode' => $evo_barcode]);

Heclist::where('hec_id', $hec_id)->update(['laptop_issued_in_past' => 1]);


}
    return Redirect('show_assigned_page');

 }


//..............................................................................................................
    public function Show_Assigned_Page()
    {
        
         $values = DB::table('assigneds')
        ->leftjoin('laptops', 'assigneds.laptop_barcode', '=', 'laptops.Barcode')
        ->leftjoin('bags', 'assigneds.bag_barcode', '=', 'bags.BarCode')
        ->leftjoin('evos', 'assigneds.evo_barcode', '=', 'evos.BarCode')
        ->get();
         // print_r($values); die;

        return view('backend/modules/assigning/show_assigned_page',compact('values'));
    }

}
