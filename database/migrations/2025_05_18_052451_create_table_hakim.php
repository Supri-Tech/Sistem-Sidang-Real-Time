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
        Schema::create('table_hakim', function (Blueprint $table) {
            $table->id();
            $table->string('hakim_ketua', 100);
            $table->string('hakim_anggota_1', 100);
            $table->string('hakim_anggota_2', 100);
            $table->string('panitera_pengganti', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_hakim');
    }
};
