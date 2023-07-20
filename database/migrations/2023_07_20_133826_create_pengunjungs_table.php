<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunjungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengunjung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->integer('umur');
            $table->string('pekerjaan');
            $table->string('konsultasi_bidang');
            $table->text('alamat');
            $table->text('konsultasi');
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
        Schema::dropIfExists('pengunjung');
    }
}
