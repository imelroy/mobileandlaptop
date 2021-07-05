<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id()->startingValue(100);
            $table->string("Model")->unique();
            $table->string("Memory");
            $table->string("Display");
            $table->string("Platform");
            $table->string("Processor");
            $table->string("Graphics");
            $table->integer("Price");
            $table->string("Gallery")->unique();
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
        Schema::dropIfExists('laptops');
    }
}
