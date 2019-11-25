<?php

namespace App\Http\Controllers\AprovedListsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

use App\Heclist;
use App\Examinationlist;
use App\Issuedcniclist;
use Excel;

class AprovedListController extends Controller
{

//Show..........................................................................................................  
    public function show()
    {   
        $q;
        $i=0;
        $issuedcnic=Issuedcniclist::all();
        $boths=DB::table('examinationlists')->join('heclists','heclists.enrollment_no', '=' ,'examinationlists.EnrollmentNo' )->get();
        
        return view('backend/modules/aprove_lists/aprove_s&t/show_aprovedlist',compact('boths','i','q'));
    }


public function Download_Aproved_List($type){
       
       $Status;
       $q;

        Excel::create('Aproved Student List ', function($excel) {

        $excel->sheet('Sheet 1', function($sheet) {

            $boths=DB::table('examinationlists')->join('heclists','heclists.enrollment_no', '=' ,'examinationlists.EnrollmentNo')->get()->toArray();
                foreach($boths as $both) {
                  if($both->CGPA == $both->cgpa){

                         $q=DB::table('issuedcniclists')->where('Cnic','=',$both->cnic)->first();
                              if(!empty($q)){ 
                                  $Status="Disaproved"; }
                              else{ 
                                  $Status="Aproved"; } 

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
           }//end cgpa wali IF

            }//end foreach

            $sheet->fromArray($data, null, 'A1', false, false);
            $headings = array('Exam ID','Hec ID', 'Status', 'full name', 'father name', 'CNIC', 'Enrollment No', 'degree title'
              , 'department','campus','year_of_study','CGPA','out_of_gpa','date_of_admission','date_of_completion');

            $sheet->prependRow(1, $headings);
          });
    })->export($type);
    }
  }




// //Download..........................................................................................................
// public function Download_Aproved_List($type)
//     {
//         $data= TableName::get()->toArray();
//         return Excel::create('Downloaded Aproved List', function($excel) use
//            ($data) {
//            $excel->sheet('mySheet', function($sheet) use ($data)
//               {
//                  $sheet->fromArray($data);
//               });
//           })->download($type);
//     }
// }
