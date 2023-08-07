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
                'remember_token' => 'UCDWd1dS4joW9c64Qsc0V8hvpqwKIHPZDyJpWv1t8pqyYMUYcRNIYdHxVha7',
                'created_at' => '2023-08-06 14:23:32',
                'updated_at' => '2023-08-06 14:23:32',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'andre',
                'password' => '$2y$10$iakECkYXoaa.rcxZxQHEgOcjnw1Qa2Ftj8T0xr79l51yX.Nym5fG6',
                'name' => 'Andre Ramadhan',
                'avatar' => NULL,
                'remember_token' => 'FhDO14Z2HzteWNrW9IU3kKLXAbiJzHWtgHVvtbHH6BJQlb3DyjIcKeakERPR',
                'created_at' => '2023-08-07 10:03:59',
                'updated_at' => '2023-08-07 10:03:59',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'yusuf',
                'password' => '$2y$10$DlqqE66fzhiJP8xBxtXHFuRXmLQeYr3wjm3LU3X5w0YzKYI71K7IG',
                'name' => 'Yusuf.',
                'avatar' => NULL,
                'remember_token' => 'pPqscyfaXc8Bg2Q3Q4sYIsdJ5W7tUGw7PwL10H9Auv65Bcr5pf8hFb2jc7DM',
                'created_at' => '2023-08-07 14:17:32',
                'updated_at' => '2023-08-07 14:29:10',
            ),
        ));
        
        
    }
}