<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'parent_id', 'created_at', 'updated_at'];

    // public function __constructor($alias) {
    //     $this->aliasOf = $alias;
    //     if($alias != NULL) {
    //         $categoryOrigin = Category::find($alias);
    //         $this->title = $categoryOrigin->title;
    //         $this->parent_id = $categoryOrigin->parent_id;
    //         $this->created_at = $categoryOrigin->created_at;
    //         $this->updated_at = $categoryOrigin->updated_at;
    //     }
    // }

    public function children() {
        return $this->hasMany(self::class,'parent_id');
    }

    public function render_categories($id) {

        $category = new Category($id);

        $categories = Category::orderBy('created_at')->get();
        // //$category = Category::where('id',$id)->first();
        // $categoryOrigin = new Category();

        // if($category->aliasOf != NULL) {
        //     $categoryOrigin = Category::find($category->aliasOf);
        //     $category->title = $categoryOrigin->title;
        //     $category->parent_id = $categoryOrigin->parent_id;
        //     $category->created_at = $categoryOrigin->created_at;
        //     $category->updated_at = $categoryOrigin->updated_at;
        //     $product->img = $imagename;
        //     $product->title = $request->get('title');
        //     $product->content = $request->get('content');
        //     $product->price = $request->get('price');
        //     $product->save();
        // }

        // $products = Product::orderBy('created_at')->take(5)->get();
        // $oneProduct = Product::where('id',$id)->first();
        //return back()->with('message', 'Продукт доданий.');
        $products = Product::orderBy('created_at')->take(19)->get();

        return view('brands.brands',[
            'products' => $products
        ]);
    }
}
