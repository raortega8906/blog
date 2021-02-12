<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    protected $fillable = ['title', 'url_clean', 'content', 'category_id', 'posted'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    use HasFactory;
}
