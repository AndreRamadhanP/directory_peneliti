<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_permissions')->delete();
        
        \DB::table('admin_permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'All permission',
                'slug' => '*',
                'http_method' => '',
                'http_path' => '*',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'http_method' => 'GET',
                'http_path' => '/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Login',
                'slug' => 'auth.login',
                'http_method' => '',
                'http_path' => '/auth/login
/auth/logout',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'User setting',
                'slug' => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path' => '/auth/setting',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Auth management',
                'slug' => 'auth.management',
                'http_method' => '',
                'http_path' => '/auth/roles
/auth/permissions
/auth/menu
/auth/logs',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Daftar Direktori',
                'slug' => 'list.direktori',
                'http_method' => 'GET',
                'http_path' => '/direktori',
                'created_at' => '2023-08-07 10:05:41',
                'updated_at' => '2023-08-07 10:05:41',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Buat Direktori',
                'slug' => 'create.direktori',
                'http_method' => 'POST',
                'http_path' => '/direktori/create',
                'created_at' => '2023-08-07 10:06:11',
                'updated_at' => '2023-08-07 10:06:11',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Detail Direktori',
                'slug' => 'show.direktori',
                'http_method' => 'GET',
                'http_path' => '/direktori/*',
                'created_at' => '2023-08-07 10:06:58',
                'updated_at' => '2023-08-07 10:06:58',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'Edit Direktori',
                'slug' => 'edit.direktori',
                'http_method' => 'PUT,PATCH',
                'http_path' => '/direktori/*/edit',
                'created_at' => '2023-08-07 10:07:25',
                'updated_at' => '2023-08-07 10:07:25',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Hapus Direktori',
                'slug' => 'delete.direktori',
                'http_method' => 'DELETE',
                'http_path' => '/direktori/*',
                'created_at' => '2023-08-07 10:07:51',
                'updated_at' => '2023-08-07 10:07:51',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'Simpan Direktori',
                'slug' => 'store.direktori',
                'http_method' => 'POST',
                'http_path' => '/direktori',
                'created_at' => '2023-08-07 10:12:40',
                'updated_at' => '2023-08-07 10:12:40',
            ),
        ));
        
        
    }
}