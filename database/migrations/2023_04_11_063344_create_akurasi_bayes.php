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
        Schema::create('hasil_confusion_kmean', function (Blueprint $table) {
            $table->id();
            $table->float('TPR');
            $table->float('FPR');
            $table->float('TNR');
            $table->float('FNR');
            $table->float('Akurasi');
            $table->float('Presisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_confusion_kmean');
    }
};
