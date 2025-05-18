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
        Schema::create('table_sidang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perkara');
            $table->unsignedBigInteger('id_hakim');
            $table->dateTime('waktu_sidang');
            $table->string('ruang_sidang', 100);
            $table->enum('status_sidang', ['terjadwal', 'ditunda', 'selesai', 'batal'])->default('terjadwal');
            $table->timestamps();

            $table->foreign('id_perkara')->references('id')->on('table_perkara')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_hakim')->references('id')->on('table_hakim')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_sidang');
    }
};
