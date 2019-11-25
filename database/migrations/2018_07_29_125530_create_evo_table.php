<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('evos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode')->unique(); 
            $table->rememberToken();
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
        Schema::dropIfExists('evos');
    }
}
