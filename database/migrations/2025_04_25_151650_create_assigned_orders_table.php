<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignedOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('assigned_orders', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion');
            $table->dateTime('Fecha_Asignación');
            $table->foreignId('id_Ordenes_nuevas')->constrained('orders_new');
            $table->foreignId('users_roles_id')->constrained('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assigned_orders');
    }
}