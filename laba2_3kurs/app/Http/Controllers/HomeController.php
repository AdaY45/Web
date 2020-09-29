<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() { 
        $product = new Product();
        return ($product->render_products());
    }
    public function brands() { 
        $product = new Product();
        return ($product->render_products());
    }
    public function oneProduct($id) { 
        $product = new Product();
        return ($product->render_product($id));
    }
}
