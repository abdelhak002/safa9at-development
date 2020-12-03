<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-06-30 14:59:02',
                'updated_at' => '2019-06-30 14:59:02',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-06-30 14:59:02',
                'updated_at' => '2019-06-30 14:59:02',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'server',
                'display_name' => 'server',
                'created_at' => '2019-07-11 17:07:44',
                'updated_at' => '2019-07-11 17:07:44',
            ),
        ));
        
        
    }
}