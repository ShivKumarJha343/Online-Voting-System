<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_voters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('F_name')->nullable();
            $table->string('L_name')->nullable();
            $table->string('citizenship_no')->unique();
            $table->string('age')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
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
        Schema::dropIfExists('add_voters');
    }
}
