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
                'remember_token' => '0vs82iX0euDiq5WRBuC8QKHlLh6scZWMY7QGx1qgqJPlPU7KvYfdB7aID0A7',
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
                'remember_token' => 'hTDR6MbFYVZOZqmBBlbu86H6jyny9aJdXXiOE2zblLFU5vFw2LTpWI2sVex0',
                'created_at' => '2023-08-07 10:03:59',
                'updated_at' => '2023-08-07 10:03:59',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'yusuf',
                'password' => '$2y$10$DlqqE66fzhiJP8xBxtXHFuRXmLQeYr3wjm3LU3X5w0YzKYI71K7IG',
                'name' => 'Yusuf',
                'avatar' => NULL,
                'remember_token' => 'd8hhfVxU5KO17MMyRnayBLSOkgsiDMBbL7FiJDNQxPHGm39gnUmP8ztQRQ6S',
                'created_at' => '2023-08-07 14:17:32',
                'updated_at' => '2023-08-07 15:13:44',
            ),
        ));
        
        
    }
}