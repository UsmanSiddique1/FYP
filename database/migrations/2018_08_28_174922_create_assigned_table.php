<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigneds', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('USER_ID');
            $table->integer('HEC_ID');
            $table->string('FULL_NAME');
            $table->string('CNIC_');
            $table->string('ENROLLMENT_NO');
            $table->string('DEGREE_TITLE');
            $table->string('DEPARTMENT');
            $table->string('laptop_barcode');
            $table->string('bag_barcode');
            $table->string('evo_barcode');



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
        Schema::dropIfExists('assigneds');
    }
}
