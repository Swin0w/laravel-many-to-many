<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Comments;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comments::class, 500) -> make()
            -> each(function($comment){
                $post = Post::inRandomOrder() -> first();
                $comment -> post() -> associate($post);
                $comment -> save();
            });
    }
}
