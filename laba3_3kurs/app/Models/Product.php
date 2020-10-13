<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function render_brands() {
        $products = Product::orderBy('created_at')->take(19)->get();

        return view('brands.brands',[
            'products' => $products
        ]);
    }
    public function render_product($id) {
        $products = Product::orderBy('created_at')->take(5)->get();
        $oneProduct = Product::where('id',$id)->first();
        return view('about.oneProduct',[
            'products' => $products
        ],[
            'oneProduct' => $oneProduct
        ]);
    }
    public function render_products() {
        $products = Product::orderBy('created_at')->take(10)->get();
        $blogs = Blog::orderBy('created_at')->take(4)->get();

        return view('index.index',[
            'products' => $products
        ],[
            'blogs' => $blogs
        ]);
    }
    public function render_dashboard() {
        $products = Product::orderBy('created_at')->take(19)->get();

        return view('admin.dashboard',['products' => $products]);
    }
    public function render_edit($id) {
        $product = Product::where('id',$id)->first();

        return view('admin.edit',['product' => $product]);
    }
    public function render_delete($id) {
        $product = Product::where('id',$id)->first()->delete();
        
        return back()->with('message', 'Продукт видалений');
    }
}
