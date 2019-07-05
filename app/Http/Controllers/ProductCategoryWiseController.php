<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductCategoryWiseController extends Controller
{
    public function index($name)
    {
        $categories= Category::select('id')->where('name', $name)->first();
        // dd(Category::where('name', $name)->first());
        $categoryName = $name;
        $pagination = 12;
        // $categories = $categories->name;
        $products = $categories->products->take(10);

      
        // if(request()->sort == 'low_high')
        // {
        //     $products = $products->orderBy('price');
        // }
        // elseif(request()->sort == 'high_low')
        // {
        //     $products = $products->orderBy('price', 'desc');
        // }
        // else{
        //     $products = $products->take(15);
        // }
        return view('productcategorywise.laptop')->with([
            'products'      => $products,
            'categories'    => $categories,
            'categoryName' => $categoryName,
        ]);
    }
    
}
