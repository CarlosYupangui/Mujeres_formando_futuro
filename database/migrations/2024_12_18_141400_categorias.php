<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('categorias', function(Blueprint $table){
            $table->id();
            $table->string('nombreCT');
            $table->enum('status', ['ACTIVE', 'DESACTIVATE'])->default('ACTIVE');
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
        schema::dropIfExists('categorias');
    }
}
