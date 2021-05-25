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
            $table->id();
            $table->string("Model");
            $table->string("Memory");
            $table->string("Display");
            $table->string("Platform");
            $table->string("Processor");
            $table->string("Graphics");
            $table->string("Price");
            $table->string("Gallery");
            $table->timestamps();
        });
        DB::statement("ALTER TABLE laptops ALTER SEQUENCE id RESTART WITH 100;");
        //DB::statement("ALTER TABLE laptops SERIAL = 100;");
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
