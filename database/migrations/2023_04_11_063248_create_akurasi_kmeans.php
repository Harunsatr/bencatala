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
        Schema::create('confusion_kmean', function (Blueprint $table) {
            $table->id();
            $table->string('teks');
            $table->integer('p_beresiko');
            $table->integer('p_tidak_beresiko');
            $table->integer('Asli');
            $table->integer('Prediksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confusion_kmean');
    }
};
