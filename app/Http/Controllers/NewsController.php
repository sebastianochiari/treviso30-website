<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NewsController extends Controller
{
    public function getSingle($slug) {
        // fetch from the DB based on slug (first() -> stop at the first one instead of collection)
        $post = Post::where('slug', '=', $slug)->first();
        // return the view and pass in the post object
        return view('news.single')->with('post', $post);
    }
}
