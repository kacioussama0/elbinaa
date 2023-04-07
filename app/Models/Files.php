<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected  $fillable = ['name','path','category_id','type'];


    public function category() {
        return $this->belongsTo(Category::class);
    }

}
