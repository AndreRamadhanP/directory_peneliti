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
                'order' => 3,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-07 10:09:23',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Pengguna',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-07 14:24:11',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-07 10:09:23',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-07 10:09:23',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-08-07 10:09:23',
            ),
            6 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Direktori',
                'icon' => 'fa-book',
                'uri' => '/direktori',
                'permission' => 'list.direktori',
                'created_at' => '2023-08-06 21:44:29',
                'updated_at' => '2023-08-07 10:09:16',
            ),
        ));
        
        
    }
}