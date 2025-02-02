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
        Schema::create('albums', function (Blueprint $table) {
            $table->id('AlbumID'); // Custom primary key name
            $table->string('NamaAlbum', 255);
            $table->text('Deskripsi')->nullable();
            $table->date('TanggalDibuat');
            $table->unsignedInteger('TotalFoto')->default(0); // Field for TotalFoto, default is 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
