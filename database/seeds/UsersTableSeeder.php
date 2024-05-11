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
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$YVUxucH78D90I6gIt.s1kOz1OGS97Yec4hjNrJ/lDEkTwklED6zWq',
                'phone' => NULL,
                'remember_token' => '6tK7zIlU5GUiOZN2SoiFA15H0SaCEX1oxRVPXz6hw1ggr3N8BtALjoYWcyCR',
                'settings' => NULL,
                'created_at' => '2019-11-02 07:38:21',
                'updated_at' => '2019-11-02 07:38:21',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Naman Mehta',
                'email' => 'namandhuri01@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$0QaHCC6RUxl6vn7HnSU1MO7iGQdfayEVt6fCP5rzYu1YKbKjyl6Pq',
                'phone' => '7696606061',
                'remember_token' => 'IhAXbUo4O3KBbKYrNYNw8TXZ6ygC42JOD8XfsHdnoikKR5v1LNAuEfL4RZC6',
                'settings' => NULL,
                'created_at' => '2019-11-17 08:51:27',
                'updated_at' => '2019-11-17 08:51:27',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Vendor',
                'email' => 'vendor@vendor.com',
                'avatar' => 'users\\November2019\\K1h6n6ezbDsIKMHbHo9M.png',
                'password' => '$2y$10$1cwd2OVPbf1Y4aTtjdTjJ..xHY.fUnxYsHD1OhfiljktIw6b8eYIq',
                'phone' => NULL,
                'remember_token' => 'XTqANOCJHgyjp1TSdR9GYtnqdvmCx9BVsLjGvmwe755IB5KOwQtxBWB94aPf',
                'settings' => '{"locale":"en"}',
                'created_at' => '2019-11-17 08:56:06',
                'updated_at' => '2019-11-17 08:56:06',
            ),
        ));
        
        
    }
}