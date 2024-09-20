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
        // Tabel UMKM
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('address');
            $table->string('phone', 15);
            $table->string('social_media')->nullable();
            $table->string('operational_hours')->nullable();
            $table->timestamps();
        });

        // Tabel untuk menyimpan foto-foto UMKM
        Schema::create('umkm_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('umkm_id');
            $table->string('image_path');
            $table->timestamps();

            // Foreign key ke tabel umkms
            $table->foreign('umkm_id')->references('id')->on('umkms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop tabel dalam urutan yang benar
        Schema::dropIfExists('umkm_images');
        Schema::dropIfExists('umkms');
    }
};
