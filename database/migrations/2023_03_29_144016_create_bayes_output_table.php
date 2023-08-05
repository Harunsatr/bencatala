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
        Schema::create('bayes_output', function (Blueprint $table) {
            $table->id();
            $table->integer('trestbps');
            $table->integer('chol');
            $table->integer('thalch');
            $table->float('output_1');
            $table->float('output_0');
            $table->integer('prediction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayes_output');
    }
};
