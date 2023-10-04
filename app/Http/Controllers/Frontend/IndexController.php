<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ProductDetails($id,$slug)
    {
        $product = Product::findOrFail($id);
        return view('frontend.product.product_details',compact('product'));
    }
}
