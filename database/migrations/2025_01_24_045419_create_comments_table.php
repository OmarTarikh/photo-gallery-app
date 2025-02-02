<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('id_komentar');
            $table->unsignedBigInteger('id_foto');
            $table->unsignedBigInteger('id_user');
            $table->text('isi');
            $table->timestamp('tanggal')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_foto')->references('FotoID')->on('galeris')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
