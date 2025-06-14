<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(11)->get();
        $prodctCounts = Product::count();
        return view('frontend.index', compact('products', 'prodctCounts'));
    }
}
