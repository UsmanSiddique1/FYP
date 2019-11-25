<?php

namespace App\Http\Controllers\ExaminationList;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;
use App\Examinationlist;
use Excel;

class ExaminationListController extends Controller
{


//Show.....................................................................................................................
public function ExamShowBsit()
    {
      // $exams=Examinationlist::all();
        $exams=Examinationlist::where('DegreeTitle','BS (Hons)')->where('Department','Information Technology')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_bsit/exam_show_bsit',compact('exams'));
    }

public function ExamShowBschemistry()
    {
        $exams=Examinationlist::where('DegreeTitle','BS (Hons)')->where('Department','Chemistry')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_bschemistry/exam_show_bschemistry',compact('exams'));
    }

public function ExamShowBsmath()
    {
        $exams=Examinationlist::where('DegreeTitle','BS (Hons)')->where('Department','Mathematics')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_bsmath/exam_show_bsmath',compact('exams'));
    }

public function ExamShowBsphysics()
    {
        $exams=Examinationlist::where('DegreeTitle','BS (Hons)')->where('Department','Physics')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_bsphysics/exam_show_bsphysics',compact('exams'));
    }

public function ExamShowBsbotany()
    {
        $exams=Examinationlist::where('DegreeTitle','BS (Hons)')->where('Department','Botany')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_bsbotany/exam_show_bsbotany',compact('exams'));
    }

public function ExamShowBszoology()
    {
        $exams=Examinationlist::where('DegreeTitle','BS (Hons)')->where('Department','Zoology')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_bszoology/exam_show_bszoology',compact('exams'));
    }

public function ExamShowMscit()
    {
        $exams=Examinationlist::where('DegreeTitle','M.Sc (16 year)')->where('Department','Information Technology')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_mscit/exam_show_mscit',compact('exams'));
    }

public function ExamShowMscchemistry()
    {
        $exams=Examinationlist::where('DegreeTitle','M.Sc (16 year)')->where('Department','Chemistry')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_mscchemistry/exam_show_mscchemistry',compact('exams'));
    }

public function ExamShowMscmath()
    {
        $exams=Examinationlist::where('DegreeTitle','M.Sc (16 year)')->where('Department','Mathematics')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_mscmath/exam_show_mscmath',compact('exams'));
    }

public function ExamShowMscphysics()
    {
        $exams=Examinationlist::where('DegreeTitle','M.Sc (16 year)')->where('Department','Physics')->get();
        return view('backend/modules/examination_list/exam_s&t/exam_mscphysics/exam_show_mscphysics',compact('exams'));
    }



//Download..........................................................................................................
public function Download_Examlist($type)
    {
        $data= Examinationlist::get()->toArray();
        return Excel::create('Downloaded Examlist', function($excel) use
           ($data) {
           $excel->sheet('mySheet', function($sheet) use ($data)
              {
                 $sheet->fromArray($data);
              });
          })->download($type);
    }
//Store............................................................................................................
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
          
           $fullname=$data['fullname'];
           $fathername=$data['fathername'];
           $cnic=$data['cnic'];          
           $enrollemtno=$data['enrollemtno']; 
           $degreetitle=$data['degreetitle'];         
           $department=$data['department'];           
           $yearofstudy=$data['yearofstudy'];           
           $cgpa=$data['cgpa'];
           $outofgpa=$data['outofgpa'];
           $dateofadmission=$data['dateofadmission'];
           $dateofcompletion=$data['dateofcompletion'];
           

           $exam=Examinationlist::FirstOrNew(['CNIC'=>$cnic, 'EnrollmentNo'=>$enrollemtno]);
           $exam->FullName=$fullname;
           $exam->FatherName=$fathername;
           $exam->DegreeTitle=$degreetitle;           
           $exam->Department=$department;         
           $exam->YearOfStudy=$yearofstudy;
           $exam->CGPA=$cgpa;
           $exam->OutOfGpa=$outofgpa;
           $exam->DateOfAdmission=$dateofadmission;
           $exam->DateOfCompletion=$dateofcompletion;
          

           $exam->save();
       

        }//wileloop end
        return Redirect::back();

    }//store End


}
