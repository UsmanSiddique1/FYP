<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examinationlist extends Model
{
   protected $fillable=['FullName','FatherName','CNIC','EnrollmentNo','DegreeTitle','Department','YearOfStudy',
                        'CGPA','OutOfGpa','DateOfAdmission','DateOfCompletion']; 
}