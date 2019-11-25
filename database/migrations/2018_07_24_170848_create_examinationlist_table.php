<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('examinationlists', function (Blueprint $table) {
            
            $table->increments('ID');

            $table->integer('HecID');
            $table->string('FullName');
            $table->string('FatherName');
            $table->string('CNIC');
            $table->string('DOB');
            $table->string('Gender');
            $table->string('EnrollmentNo');
            $table->string('DegreeLevel');
            $table->string('DegreeTitle');
            $table->string('Department');
            $table->string('Campus');
            $table->integer('YearOfStudy');
            $table->string('EducationSystem');
            $table->float('HecPercentage');
            $table->float('LastExamPercentage');
            $table->float('CGPA');
            $table->float('OutOfGpa');
            $table->string('DateOfAdmission');
            $table->string('DateOfCompletion');
            $table->string('CityOfResidence');
            $table->string('AdmittedOnDisableQuota');
            $table->string('Email');
            $table->string('Phone');
            $table->string('EmployementStatus');
            $table->integer('LaptopIssuedInPast');


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
        Schema::dropIfExists('examinationlists');
    }
}
