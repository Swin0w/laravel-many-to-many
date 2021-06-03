<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 500) -> create()
            -> each(function($post) {
                $users = User::inRandomOrder()
                        -> limit(10)
                        -> get();
                $post -> users() -> attach($users);
                $post -> save();
        });
    }
}
