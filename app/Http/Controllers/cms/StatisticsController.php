<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        return view('backend.statistics.index', compact('productCount'));
    }
}
