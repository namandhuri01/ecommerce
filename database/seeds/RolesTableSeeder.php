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
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-11-02 07:38:20',
                'updated_at' => '2019-11-02 07:38:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-11-02 07:38:20',
                'updated_at' => '2019-11-02 07:38:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Vendor',
                'display_name' => 'Vendor',
                'created_at' => '2019-11-17 08:53:57',
                'updated_at' => '2019-11-17 08:53:57',
            ),
        ));
        
        
    }
}