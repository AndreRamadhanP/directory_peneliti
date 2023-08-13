<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdPerusahaanToAnggaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('anggaran', 'id_perusahaan')) {
            Schema::table('anggaran', function (Blueprint $table) {
                $table->unsignedInteger('id_perusahaan')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('anggaran', 'id_perusahaan')) {
            Schema::table('anggaran', function (Blueprint $table) {
                $table->dropColumn('id_perusahaan');
            });
        }
    }
}
