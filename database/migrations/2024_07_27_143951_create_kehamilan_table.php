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
        Schema::create('kehamilan', function (Blueprint $table) {
            $table->id('id_kehamilan');
            $table->enum('status', ['Hamil', 'Melahirkan', 'Nifas', 'Meninggal'])->notNull();
            $table->string('nama_suami', 100);
            $table->unsignedBigInteger('id_ibu');
            $table->timestamps();

            $table->foreign('id_ibu')->references('no_reg')->on('penduduk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehamilan');
    }
};
