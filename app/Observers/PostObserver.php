<?php

namespace App\Observers;

use App\Post;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Post $post
     * @return void
     */
    public function saving(Post $post)
    {
        $post->slug = Str::slug($post->title, '-');
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \App\Post $post
     * @return void
     */
}
