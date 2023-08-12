<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAjuanToDirektoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('direktori', 'status_ajuan')) {
            Schema::table('direktori', function (Blueprint $table) {
                $table->integer('status_ajuan');
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
        if (Schema::hasColumn('direktori', 'status_ajuan')) {
            Schema::table('direktori', function (Blueprint $table) {
                $table->dropColumn('status_ajuan');
            });
        }
    }
}
