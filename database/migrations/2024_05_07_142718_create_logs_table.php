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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id'); // Kolom untuk menyimpan ID device yang terkait dengan log
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->dateTime('log_time'); // Kolom untuk menyimpan waktu log
            $table->text('log_data'); // Kolom untuk menyimpan data log device IoT
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
