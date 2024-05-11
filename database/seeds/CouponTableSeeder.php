<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code'          => 'Get10',
            'type'          => 'percentage',
            'percentage'    => 10,
        ]);

        Coupon::create([
            'code'          => 'first25',
            'type'          => 'fixed',
            'value'         => 5000,
        ]);
    }
}
