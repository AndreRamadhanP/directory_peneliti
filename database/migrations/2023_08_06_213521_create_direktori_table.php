<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirektoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direktori', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('nama');
            $table->string('judul_jurnal');
            $table->integer('tahun_terbit');
            $table->string('file');
            $table->decimal('anggaran', 10, 2);
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
        Schema::dropIfExists('direktori');
    }
}
