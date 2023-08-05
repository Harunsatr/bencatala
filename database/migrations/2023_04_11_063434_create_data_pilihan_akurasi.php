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
        Schema::create('data_pilihan_kmean', function (Blueprint $table) {
            $table->id();
            $table->integer('trestbps');
            $table->integer('chol');
            $table->integer('thalch');
            $table->integer('output_asli');
            $table->integer('output_prediction');
            $table->string('hasil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pilihan_kmean');
    }
};
