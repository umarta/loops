<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getPost()
    {
        $data = Post::query()->with('user')->get();
        return view('post', [
            'data' => $data
        ])->with('successMsg','Post success loaded .');
    }

    public function getUserComment()
    {
        $data = User::query()->join('comments','users.email','comments.email')->get();
        return view('user_list', [
            'data' => $data
        ])->with('successMsg','User List success loaded .');
    }

    public function getGuestComment()
    {
        $data = Comment::query()->whereNotIn('email', User::query()->select('email')->get()->pluck('email')->toArray())->get();
        return view('guest', [
            'data' => $data
        ])->with('successMsg','Guest Comment success loaded .');
    }
}
