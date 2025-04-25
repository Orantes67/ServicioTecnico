<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersNewTable extends Migration
{
    public function up()
    {
        Schema::create('orders_new', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_idServicio')->constrained('service');
            $table->foreignId('client_idClient')->constrained('client');
            $table->foreignId('component_idComponent')->constrained('component');
            $table->integer('assigned_orders');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders_new');
    }
}
