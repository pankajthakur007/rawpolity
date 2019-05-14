<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'raw_admin',
            'email' => 'raw_admin@gmail.com',
            'password' => bcrypt('secret'),
            'user_type' => '1',
            'profile' => 'admin_profile_pic'
        ]);
    }
}
