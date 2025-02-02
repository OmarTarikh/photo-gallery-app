<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id('id_like');
            $table->unsignedBigInteger('id_foto');
            $table->unsignedBigInteger('id_user');
            $table->timestamp('tanggal_like')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_foto')->references('FotoID')->on('galeris')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
