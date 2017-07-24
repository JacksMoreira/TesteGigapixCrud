<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',150);
            $table->string('sexo',150);
            $table->string('datadenascimento',150);
            $table->string('telefone',200);
            
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('produtos');
    }
}
