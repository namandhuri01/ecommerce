<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public static function findByCode($code) 
    {
       return self::where('code', $code)->first();

    }

    public function discount($total)
    {
        if($this->type == 'fixed_value')
        {
            return $this->value;
        }
        elseif($this->type == 'percentage')
        {
            return round(($this->percentage / 100) * $total); 
        }
        else{
            return 0;
        }
    }
}
