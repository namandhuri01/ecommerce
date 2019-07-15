<?php


    function presentPrice($price)
    {
        // return 'Rs'.number_format($price / 100, 2); //divide by 100 and 2 decimal example $price = 15000/100 = 1.50
        return 'Rs'.number_format($price);
    }

    function productImage($path) 
    {
    
        return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/logos/logo-5.png');
    }

    function setActiveCategory($category, $output = 'active') 
    {
        return request()->category == $category ? $output : '';
    }