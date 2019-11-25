<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

use App\Heclist;
use App\Examinationlist;
use App\Issuedcniclist;
use Excel;

class AwardedController extends Controller
{


//Show..........................................................................................................  
    public function show()
    {   
        $q;
        $i=0;

        $boths=DB::table('examinationlists')
        ->join('heclists','heclists.enrollment_no', '=' ,'examinationlists.EnrollmentNo' )
        ->where('laptop_issued_in_past',0)
        ->get();

        return view('backend/modules/awardedlist/awarded_s&t/show_awardedlist',compact('boths','i','q'));
    }



public function Download_Awarded_Student_List($type){
       
       $Status;
       $q;

        Excel::create('Awarded Student List', function($excel) {

        $excel->sheet('Sheet 1', function($sheet) {

            $boths=DB::table('examinationlists')->join('heclists','heclists.enrollment_no', '=' ,'examinationlists.EnrollmentNo')->get()->toArray();
                foreach($boths as $both) {
                  if($both->CGPA == $both->cgpa){

                         $q=DB::table('issuedcniclists')->where('Cnic','=',$both->cnic)->first();
                              if(!empty($q)){ 
                                  continue; }
                              else{ 
                                  $Status="Aproved"; } 

                 $data[] = array(
                   
                  $Status,  
                  $both->hec_id,          

                  $both->full_name, 
                  $both->cnic, 
                  $both->enrollment_no,
                  $both->degree_title,
                  $both->department, 

                );
           }//end cgpa wali IF

            }//end foreach

            $sheet->fromArray($data, null, 'A1', false, false);
            $headings = array( 'Status', 'Hec ID', 'full name', 'CNIC', 'Enrollment No',
             'degree title', 'department');

            $sheet->prependRow(1, $headings);
          });
    })->export($type);
    }
  }
