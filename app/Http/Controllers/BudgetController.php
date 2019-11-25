<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Budget;
use App\Employee;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/modules/budget/upload');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        //trim data
        foreach ($columns as $key => &$value) {
            $value=preg_replace('/\D/', '', $value);
       }
        // dd($value);

       $data=array_combine($escapedHeader, $columns);

       //Setting Data Type
       // foreach ($data as $key => &$value) {
       //     $value=($key=="zip" || $key=="month")?(integer)$value: (float)$value;
       //     }

        //Update Table
           $zip=$data['zip'];
           $month=$data['month'];
           $lodging=$data['lodging'];
           $meal=$data['meal'];
           $housing=$data['housing'];

           $Budget=Budget::FirstOrNew(['zip'=>$zip, 'month'=>$month]);
           $Budget->lodging=$lodging;
           $Budget->meal=$meal;
           $Budget->housing=$housing;
           $Budget->save();
       

        }//wileloop end
        return Redirect('upload');

    }//store End



 public function show_employee()
    {
        if(request()->has('gender')){
          $values=Employee::where('gender', request('gender'))->paginate(5)->appends('gender', request('gender'));
        } 
        else{
             $values=Employee::paginate(5);
        }

        
        return view('backend/modules/budget/show_employee',compact('values'));
    }


public function upload_employee(Request $request)
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

        //trim data
       
        // dd($value);

       $data=array_combine($escapedHeader, $columns);

       //Setting Data Type
       // foreach ($data as $key => &$value) {
       //     $value=($key=="zip" || $key=="month")?(integer)$value: (float)$value;
       //     }

        //Update Table
           $id=$data['id'];
           $firstname=$data['firstname'];
           $lastname=$data['lastname'];
           $gender=$data['gender'];
           $jobtitle=$data['jobtitle'];
           $hiredate=$data['hiredate'];

           $Employee=Employee::FirstOrNew(['id'=>$id]);
           $Employee->firstname=$firstname;
           $Employee->lastname=$lastname;
           $Employee->gender=$gender;
           $Employee->jobtitle=$jobtitle;
           $Employee->hiredate=$hiredate;
           $Employee->save();
       

        }//wileloop end
        return Redirect('show_employee');

    }//store End


}
