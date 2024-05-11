<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductCategoryWiseController extends Controller
{
    public function index()
    {
        
        $categories = Category::all();
        
        return view('productcategorywise.laptop')->with(['categories' => $categories]);
    }
    public function show($id)
    {
        
        $category= Category::where('name', $id)->first();

        $products = $category->products;
        $categoryName = $id;
        
        $pagination = 12;
        
        
        return view('productcategorywise.laptop')->with([
            'products'      => $products,
            'category'      => $category,
            'categoryName'  => $categoryName,
        ]);
    }
    
}
