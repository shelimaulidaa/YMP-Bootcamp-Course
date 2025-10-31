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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('gambar'); 
            $table->string('judul'); 
            $table->unsignedInteger('harga'); 
            $table->unsignedInteger('harga_serti');
            $table->string('total_modul_video');
            $table->string('total_durasi_video');
            $table->string('level');
            $table->string('info_ig');
            $table->string('tentang_materi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
