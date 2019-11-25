<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
     protected $fillable=['USER_ID','HEC_ID','FULL_NAME','CNIC_','ENROLLMENT_NO','DEGREE_TITLE',
    'DEPARTMENT','laptop_barcode','bag_barcode','evo_barcode'];
}
