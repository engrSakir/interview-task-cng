<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::where('quantity', '>', 0)->orderBy('id', 'desc')->get();
        return view('frontend.index', compact('products'));
    }
}
