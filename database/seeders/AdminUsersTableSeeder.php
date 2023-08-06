<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$88/KVpyG1PbPaVnNKQ8cWeDQkUzVBd..KglIMEyj5eqqaCLvRIdGC',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'at7t8jtogyNoGndRUxAMsGkoVLs5bnW14jnba137wRJ4hQaw8XkDSaA6OuEE',
                'created_at' => '2023-08-06 14:23:32',
                'updated_at' => '2023-08-06 14:23:32',
            ),
        ));
        
        
    }
}