<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_aktivitas');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('tempat');
            $table->longText('deskripsi');
            $table->string('photo');
            $table->enum('status', ['Belum', 'Selesai']);
            $table->bigIncrements('volunteer_id')->unsigned();
            $table->timestamps();

            // $table->foreign('volunteer_id')
            //       ->references('id')->on('volunteers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aktivitas');
    }
}
