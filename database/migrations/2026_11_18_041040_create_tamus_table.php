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
        Schema::create('tamus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('status_pengunjung', ['Orang Tua / Wali', 'Siswa', 'Alumni', 'Instansi', 'Umum']);
            $table->string('alamat');
            $table->string('pihak_yang_dituju');
            $table->string('keperluan');
            $table->string('keterangan')->nullable();
            $table->boolean('persetujuan')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamus');
    }
};
