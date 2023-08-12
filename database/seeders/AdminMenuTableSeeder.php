<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 6,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-12 10:14:05',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Pengguna',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-12 10:14:05',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 8,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-12 10:14:05',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 9,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-12 10:14:05',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 10,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-12 10:14:05',
            ),
            6 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 3,
                'title' => 'Direktori',
                'icon' => 'fa-book',
                'uri' => '/direktori',
                'permission' => 'list.direktori',
                'created_at' => '2023-08-06 21:44:29',
                'updated_at' => '2023-08-12 10:14:05',
            ),
            7 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 4,
                'title' => 'Anggaran',
                'icon' => 'fa-money',
                'uri' => '/anggaran',
                'permission' => NULL,
                'created_at' => '2023-08-12 09:15:31',
                'updated_at' => '2023-08-12 11:27:39',
            ),
            8 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 5,
                'title' => 'Pengajuan',
                'icon' => 'fa-check-circle',
                'uri' => '/pengajuan',
                'permission' => 'all.pengajuan',
                'created_at' => '2023-08-12 09:21:31',
                'updated_at' => '2023-08-12 10:14:05',
            ),
            9 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Perusahaan',
                'icon' => 'fa-building-o',
                'uri' => '/perusahaan',
                'permission' => NULL,
                'created_at' => '2023-08-12 10:14:00',
                'updated_at' => '2023-08-12 10:14:05',
            ),
        ));
        
        
    }
}