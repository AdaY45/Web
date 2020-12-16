<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Custom_field;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'parent_id', 'created_at', 'updated_at', 'content','img'];

    public function children() {
        return $this->hasMany(self::class,'parent_id');
    }

    public function fields() {
        return $this->hasMany(Custom_field::class, 'category_id', 'id');
    }
    
}
