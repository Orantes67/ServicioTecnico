<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    public function up()
    {
        Schema::create('component', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mark');
            $table->string('numSerie');
            $table->string('fault');
            $table->string('conditions');
            $table->foreignId('idservice')->constrained('service');
            $table->foreignId('idclient')->constrained('client');
            $table->integer('pay');
            $table->integer('missing');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('component');
    }
}