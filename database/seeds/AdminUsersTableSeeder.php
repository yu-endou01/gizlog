<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_users')->truncate();
        DB::table('admin_users')->insert([
            [
                'name'         => 'gizumo-admin',
                'password'     => bcrypt('gizumo1234'),
                'user_info_id' => 2,
                'privileges'   => 1,
            ]
        ]);
    }
}

