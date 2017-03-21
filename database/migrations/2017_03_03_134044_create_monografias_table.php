<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monografias', function(Blueprint $table){
            $table->increments('id');
            $table->string('autor');
            $table->string('supervisor');
            $table->string('titulo');
            $table->string('resumo');
            $table->integer('curso_id');
            $table->integer('area_id');
            $table->string('estado')->default('Nao Publicada');
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
        //
    }
}
