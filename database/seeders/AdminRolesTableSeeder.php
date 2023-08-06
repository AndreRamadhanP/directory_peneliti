<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'slug' => 'administrator',
                'created_at' => '2023-08-06 14:23:32',
                'updated_at' => '2023-08-06 14:23:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Peneliti',
                'slug' => 'peneliti',
                'created_at' => '2023-08-06 21:49:41',
                'updated_at' => '2023-08-06 21:49:41',
            ),
        ));
        
        
    }
}