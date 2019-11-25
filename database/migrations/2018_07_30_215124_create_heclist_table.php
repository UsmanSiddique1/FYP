<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeclistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heclists', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('hec_id');
            $table->string('full_name');
            $table->string('father_name');
            $table->string('cnic');
            $table->string('dob');
            $table->string('gender');
            $table->string('enrollment_no');
            $table->string('degree_level');
            $table->string('degree_title');
            $table->string('department');
            $table->string('campus');
            $table->integer('year_of_study');
            $table->string('education_system');
            $table->float('hec_percentage');
            $table->float('last_exam_percentage');
            $table->float('cgpa');
            $table->float('out_of_gpa');
            $table->string('date_of_admission');
            $table->string('date_of_completion');
            $table->string('city_of_residence');
            $table->string('admitted_on_disable_quota');
            $table->string('email');
            $table->string('phone');
            $table->string('employement_status');
            $table->integer('laptop_issued_in_past');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heclists');
    }
}
