<?php

namespace App\Http\Controllers\HEC_List_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;
use App\HecList;
use Excel;

class HecListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Download_Heclist($type)
    {
        $data= HecList::get()->toArray();
        return Excel::create('Downloaded Heclist', function($excel) use
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
           $hec_id=$data['id'];
           $fullname=$data['fullname'];
           $fathername=$data['fathername'];
           $cnic=$data['cnic'];
           $dateofbirth=$data['dateofbirth'];
           $gender=$data['gender'];
           $enrollemtno=$data['enrollemtno'];
           $degreelevel=$data['degreelevel'];
           $degreetitle=$data['degreetitle'];
           $department=$data['department'];
           $campus=$data['campus'];
           $yearofstudy=$data['yearofstudy'];
           $educationsystem=$data['educationsystem'];
           $hscpercentage=$data['hecpercentage'];
           $lastexampercentage=$data['lastexampercentage'];
           $cgpa=$data['cgpa'];
           $outofgpa=$data['outofgpa'];
           $dateofadmission=$data['dateofadmission'];
           $dateofcompletion=$data['dateofcompletion'];
           $cityofresidence=$data['cityofresidence'];
           $admittedondisablequota=$data['admittedondisablequota'];
           $email=$data['email'];
           $phone=$data['phone'];
           $employementstatus=$data['employementstatus'];
           $laptopissuedinpast=$data['laptopissuedinpast'];

           $Heclist=Heclist::FirstOrNew(['hec_id'=>$hec_id, 'cnic'=>$cnic, 'enrollment_no'=>$enrollemtno]);
           $Heclist->full_name=$fullname;
           $Heclist->father_name=$fathername;
           $Heclist->dob=$dateofbirth;
           $Heclist->gender=$gender;
           $Heclist->degree_level=$degreelevel;
           $Heclist->degree_title=$degreetitle;
           $Heclist->department=$department;
           $Heclist->campus=$campus;
           $Heclist->year_of_study=$yearofstudy;
           $Heclist->education_system=$educationsystem;
           $Heclist->hec_percentage=$hscpercentage;
           $Heclist->last_exam_percentage=$lastexampercentage;
           $Heclist->cgpa=$cgpa;
           $Heclist->out_of_gpa=$outofgpa;
           $Heclist->date_of_admission=$dateofadmission;
           $Heclist->date_of_completion=$dateofcompletion;
           $Heclist->city_of_residence=$cityofresidence;
           $Heclist->admitted_on_disable_quota=$admittedondisablequota;
           $Heclist->email=$email;
           $Heclist->phone=$phone;
           $Heclist->employement_status=$employementstatus;
           $Heclist->laptop_issued_in_past=$laptopissuedinpast;


           $Heclist->save();
       

        }//wileloop end
        return Redirect('show_heclist');

    }//store End

//..........................................................................................................


    public function show()

{
        $heclist=Heclist::all();
        return view('backend/modules/hec_lists/hec_s&t/show_heclist',compact('heclist'));

    }//end show


    
}
