<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','thumbnail','content','category_id','published'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
