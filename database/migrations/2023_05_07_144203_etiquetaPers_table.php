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
        Schema::create('etiquetaPers', function (Blueprint $table) {
            $table->id("idEtiq");
            $table->foreignId('idUsu')
            ->references('idUsu')
            ->on('users')
            ->unsignedBigInteger();
            $table->string("nomTienEtiq");
            $table->string("localiTienEtiq");
            $table->string("numTelfTienEtiq");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquetaPers');
    }
};
