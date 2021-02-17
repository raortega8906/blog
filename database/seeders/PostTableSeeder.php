<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();
        $categories = Category::all();

        foreach ($categories as $key => $c) {
            for ($i=1; $i < 5; $i++) { 
                Post::create([
                    'title' => 'Post '.$i,
                    'url_clean' => 'post_'.$i,
                    'content' => 'Contenido del Post '.$i,
                    'posted' => 'yes',
                    'category_id' => $c->id
                ]);
            }
        }

        
    }
}
