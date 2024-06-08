<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LikeController extends Controller
{
    public function like(Post $post)
    {
        $post->likes()->attach(auth()->id());
        return redirect()->back();
    }

    public function unlike(Post $post)
    {
        $post->likes()->detach(auth()->id());
        return redirect()->back();
    }
}
