<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '2',
                'role_id' => '2',
                'name' => 'Ali Benali',
                'birthday' => NULL,
                'address' => NULL,
                'seriousness' => '0',
                'phone' => NULL,
                'phone_country' => NULL,
                'email' => 'ali.benali.sid@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CGnYp7hu/qiDOz7Gu0044erZ4/MZH/FZNuybsnhk7JrMBkhxPW5Du',
                'remember_token' => NULL,
                'lang' => 'en',
                'settings' => NULL,
                'img_path' => '/img/profiles/default-account.jpg',
                'created_at' => '2020-03-07 06:33:57',
                'updated_at' => '2020-03-07 06:33:57',
                'is_admin' => '0',
            ),
        ));
        
        
    }
}