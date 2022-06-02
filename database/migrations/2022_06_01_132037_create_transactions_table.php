<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('id_space');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->string('tipe_durasi');
            $table->integer('durasi');
            $table->string('tanggal');
            $table->integer('jumlah_orang');
            $table->string('jenis_kegiatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};