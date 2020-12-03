<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'admin',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'navbar',
                'created_at' => '2019-07-07 22:30:07',
                'updated_at' => '2019-07-07 22:30:07',
            ),
        ));
        
        
    }
}