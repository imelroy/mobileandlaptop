<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_models', function (Blueprint $table) {
            $table->id();
            $table->string("lmodel");
            $table->string("llaunch");
            $table->string("lbrand");
            $table->string("ldisplay");
            $table->string("lplatform");
            $table->string("lmemory");
            $table->string("lbattery");
            $table->string("lgraphics");
            $table->string("lprocessor");
            $table->string("lcolor");
            $table->string("lprice");
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
        Schema::dropIfExists('laptop_models');
    }
}
