<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogAnggaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_anggaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_pengajuan');
            $table->decimal('jumlah_anggaran_teralokasi', 10, 2);
            $table->date('tanggal_alokasi');
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
        Schema::dropIfExists('log_anggaran');
    }
}
