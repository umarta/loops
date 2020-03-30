<?php

use Illuminate\Database\Seeder;

class comments_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::all()->each(function ($post){
            $post->comment()->save(factory(App\Comment::class)->make());
        });
    }
}
