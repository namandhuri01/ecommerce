<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['quantity'];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function presentPrice() {

        return 'Rs'.number_format($this->price);
    }

    public function mrpPrice() {

        return 'Rs'.number_format($this->MRP);
    }

    public function scopeMightAlsoLike($query) {
        return $query->inRandomOrder()->take(5);
    }
   
}
