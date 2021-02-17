<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends ApiResponseController
{
    public function index()
    {
        //
        $posts = Post::
                join('categories', 'categories.id', '=', 'posts.category_id')->
                select('posts.*', 'categories.title as category')->
                paginate(10);
        return $this->succesResponse($posts);
    }

    public function show(Post $post)
    {
        //
        $post->category;
        return $this->succesResponse($post);
    }

    public function category(Category $category)
    {
        //
        // dd($category);
        return $this->succesResponse(['posts' => $category->post()->paginate(2), 'category' => $category]);
    }

    public function url_clean(String $url_clean)
    {
        //
        $post = Post::where('url_clean', $url_clean)->firstOrFail();
        $post->category;
        return $this->succesResponse($post);
    }
    
}
