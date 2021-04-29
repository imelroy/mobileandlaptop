<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_models', function (Blueprint $table) {
            $table->id();
            $table->string("mmodel");
            $table->string("mnetwork");
            $table->string("mlaunch");
            $table->string("mbody");
            $table->string("mdisplay");
            $table->string("mplatform");
            $table->string("mmemory");
            $table->string("mbattery");
            $table->string("mmaincamera");
            $table->string("mselfiecamera");
            $table->string("mfeatures");
            $table->string("mprice");
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
        Schema::dropIfExists('mobile_models');
    }
}
