<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'billing_fname', 'billing_lname', 'billing_email', 'billing_phone',
    'billing_address_line1', 'billing_address_line2', 'billing_city', 'billing_state', 'billing_zip', 'billing_discount', 
    'billing_discount_code', 'billing_subtotal', 'billing_tax', 'billing_total', 'error', 'payment_method',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
