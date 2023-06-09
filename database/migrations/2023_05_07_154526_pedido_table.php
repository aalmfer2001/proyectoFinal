<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id("idInsertPed");
            $table->unsignedBigInteger("idPedido");
            $table->unsignedBigInteger('idPro');
            $table->unsignedBigInteger('idUsu');
            $table->timestamps();
            $table->foreign('idPro')->references('idPro')->on('producto')->onDelete('cascade');
            $table->foreign('idUsu')->references('idUsu')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
