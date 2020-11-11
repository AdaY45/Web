<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // public function __constructor($alias) {
    //     $this->aliasOf = $alias;
    //     if($alias != NULL) {
    //         $categoryOrigin = Blog::find($alias);
    //         $this->title = $categoryOrigin->title;
    //         $this->parent_id = $categoryOrigin->parent_id;
    //         $this->created_at = $categoryOrigin->created_at;
    //         $this->updated_at = $categoryOrigin->updated_at;
    //     }
    // }

    public function children() {
        return $this->hasMany(self::class,'parent_id');
    }

    public function render_blog($id) {
        //$blog = Blog::where('id',$id)->first();
        $category = new Category($id);

        return view('blog.blog',[
            'blog' => $blog
        ]);
    }
}
