<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // $products = Product::all();
        $products = Product::paginate(8);
        return view('Products', compact('products'));
    }
}
