<?php


    function presentPrice($price)
    {
        // return 'Rs'.number_format($price / 100, 2); divide by 100 and 2 decimal example $price = 15000/100 = 1.50
        return 'Rs'.number_format($price);
    }


