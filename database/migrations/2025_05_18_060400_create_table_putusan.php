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
        Schema::create('table_putusan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sidang');
            $table->string('isi_putusan', 100);
            $table->date('tanggal_putusan');
            $table->text('file_putusan');
            $table->enum('status_putusan', ['dalam proses', 'ditetapkan'])->default('dalam proses');
            $table->timestamps();

            $table->foreign('id_sidang')->on('table_sidang')->references('id')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_putusan');
    }
};
