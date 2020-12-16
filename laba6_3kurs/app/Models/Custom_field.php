<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom_field extends Model
{
    use HasFactory;
    protected $table = 'custom_fields';
    protected $fillable = ['category_id', 'field', 'value', 'created_at', 'updated_at'];

    public function category() {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
