<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->string('Name')->nullable();
            $table->string('Citizenship_No')->nullable();
            $table->string('Age')->nullable();
            $table->string('Email')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Qualification')->nullable();
            $table->string('Marital_Status')->nullable();
            $table->string('City')->nullable();
            $table->string('Area')->nullable();
            $table->text('Upload_Photo')->nullable();
            $table->string('Party_Name')->nullable();
            $table->string('Election_Symbol')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
