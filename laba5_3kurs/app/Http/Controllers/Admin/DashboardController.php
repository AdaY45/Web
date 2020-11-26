<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $product = new Product();

        return ($product->render_dashboard());
    }
    public function edit($id) {
        $product = new Product();

        return ($product->render_edit($id));
    }
    public function update(Request $request,$id) {
        $product = Product::where('id',$id)->first();
        $this->validate($request,[
            'title' => 'required',
            'price' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg'
        ]);

        $image = $request->file('image');
        $imagename = basename($image->getClientOriginalName(), ".jpg");
        $product->img = $imagename;
        $product->title = $request->get('title');
        $product->content = $request->get('content');
        $product->price = $request->get('price');
        $product->save();

        return back()->with('message', 'Продукт оновлений');
    }
    public function delete($id) {
        $product = new Product();

        return ($product->render_delete($id));
    }
    public function create() {
        return view('admin.blog.blog', [
            'category' => [],
            'categories' => Blog::with('children')->where('parent_id','0')->get(),
            'delimiter' => ''
        ]);
    }
}
