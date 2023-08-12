<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdPerusahaanToAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('admin_users', 'id_perusahaan')) {
            Schema::table('admin_users', function (Blueprint $table) {
                $table->unsignedInteger('id_perusahaan')->nullable()->after('id');
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
        if (Schema::hasColumn('admin_users', 'id_perusahaan')) {
            Schema::table('admin_users', function (Blueprint $table) {
                $table->dropColumn('id_perusahaan');
            });
        }
    }
}
