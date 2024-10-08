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
        Schema::create('kematian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kehamilan');
            $table->enum('status', ['ibu', 'anak']);
            $table->string('nama', 100);
            $table->enum('kelamin', ['laki-laki', 'perempuan']);
            $table->date('tanggal');
            $table->string('sebab', 255)->nullable();
            $table->string('keterangan', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_kehamilan')->references('id_kehamilan')->on('kehamilan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kematian');
    }
};
