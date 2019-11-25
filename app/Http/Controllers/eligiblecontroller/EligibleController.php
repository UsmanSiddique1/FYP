<?php

namespace App\Http\Controllers\eligiblecontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

use App\Heclist;
use App\Examinationlist;
use Excel;


class EligibleController extends Controller
{

public function show()
    {   
        $i=0;
        $boths=DB::table('examinationlists')->join('heclists','heclists.enrollment_no', '=' ,'examinationlists.EnrollmentNo' )->get();
        return view('backend/modules/eligible/eligible_s&t/show_eligiblelist',compact('boths','i'));
    }

public function Download_Eligible_List($type){
       
       $Status;

        Excel::create('Eligible Student List', function($excel) {

        $excel->sheet('Sheet 1', function($sheet) {

            $boths=DB::table('examinationlists')->join('heclists','heclists.enrollment_no', '=' ,'examinationlists.EnrollmentNo')->get()->toArray();
                foreach($boths as $both) {
                  
                  if($both->CGPA == $both->cgpa){
              $Status="Eligible";
            }else{
               $Status="Not Eligible";
            }


                 $data[] = array(
                   
                  $both->ID,  
                  $both->hec_id,          
             
                  $Status,
  
                  $both->full_name,
                  $both->father_name, 
                  $both->cnic, 
                  $both->enrollment_no,
                  $both->degree_title,
                  $both->department, 
                  $both->campus,
                  $both->year_of_study,
                  $both->CGPA,
                  $both->out_of_gpa, 
                  $both->date_of_admission,
                  $both->date_of_completion,

                );
            }//end foreach

            $sheet->fromArray($data, null, 'A1', false, false);
            $headings = array('Exam ID','Hec ID', 'Status', 'full name', 'father name', 'CNIC', 'Enrollment No', 'degree title'
              , 'department','campus','year_of_study','CGPA','out_of_gpa','date_of_admission','date_of_completion');

            $sheet->prependRow(1, $headings);
        });
    })->export($type);
    }//end download function
  }

  //Download code for single table or joined table...........................................................................

// public function Download_Eligible_List($type)
//     {
//         $data= DB::table('examinationlists')->join('heclists','heclists.enrollment_no', '=' ,'examinationlists.EnrollmentNo' )->get()->toArray();
//         $data=json_decode(json_encode($data), true);
//         return Excel::create('Downloaded Eligible List', function($excel) use
//            ($data) {
//            $excel->sheet('mySheet', function($sheet) use ($data)
//               {
//                  $sheet->fromArray($data);
//               });
//           })->download($type);
//     }

// }