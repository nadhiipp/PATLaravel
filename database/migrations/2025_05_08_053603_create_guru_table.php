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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->unique();
            $table->string('email');
            $table->string('no_telp');
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_mata_pelajaran');
            $table->timestamps();
        
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_mata_pelajaran')->references('id')->on('mata_pelajarans')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
