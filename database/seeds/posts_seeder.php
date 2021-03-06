<?php

use Illuminate\Database\Seeder;

class posts_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 10)->create()->each(function ($post) {
            $post->comment()->save(factory(App\Comment::class)->make());
        });

        //
    }
}
