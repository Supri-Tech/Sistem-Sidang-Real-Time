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
        Schema::create('table_agenda_sidang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sidang');
            $table->string('judul_agenda', 100);
            $table->mediumText('deskripsi');
            $table->integer('urutan');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->enum('status_agenda', ['belum dimulai', 'selesai', 'ditunda']);
            $table->timestamps();

            $table->foreign('id_sidang')->references('id')->on('table_sidang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_agenda_sidang');
    }
};
