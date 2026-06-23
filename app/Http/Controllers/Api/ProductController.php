<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products= Product::with('type','image', 'categories')->get();
        return response()->json(
            [
                "success"=>true,
                "data"=>$products
            ]
            );
    }
    public function show(Product $product){
        $product->load('type','image', 'categories')->get();
        // dd($product);
            return response()->json([
                "succes"=>true,
                "data"=>$product,
            ]);
    }
}
