<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heclist extends Model
{
    protected $fillable=['hec_id','full_name','father_name','cnic','dob','gender',
    'enrollment_no','degree_level','degree_title','department','campus','year_of_study',
    'education_system','hec_percentage','last_exam_percentage','cgpa','out_of_gpa',
    'date_of_addmission','date_of_completion','city_of_residence','Admitted_on_disable_quota',
    'email','phone','employement_status','laptop_issued_in_past'];
}
