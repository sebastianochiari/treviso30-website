<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class NewsController extends Controller
{
    public function getSingle($slug) {
        // MAIN POST
        // fetch from the DB based on slug (first() -> stop at the first one instead of collection)
        $mainPost = Post::where('slug', '=', $slug)->first();

        // RECENT POSTS
        // fetch from the DB the 4 most recent posts (except the one that is showed)
        $recentPosts = Post::orderBy('id','desc')->where('id', '!=', $mainPost->id)->limit(4)->get();

        // CORRELATED POSTS
        // fetch from the DB the 3 most recent posts from the same category(except the one that is showed)
        $correlatedPosts = Post::orderBy('id','desc')->where('id', '!=', $mainPost->id)->where('category_id', '=', $mainPost->category_id)->limit(3)->get();

        // NEXT POST
        $nextPost = Post::orderBy('id','asc')->where('id', '>', $mainPost->id)->first();

        // PREC POST
        $prevPost = Post::orderBy('id','desc')->where('id', '<', $mainPost->id)->first();

        // return the view and pass in the post object
        return view('news.single')->with('mainPost', $mainPost)->with('recentPosts', $recentPosts)->with('correlatedPosts', $correlatedPosts)->with('nextPost', $nextPost)->with('prevPost', $prevPost);
    }

    public function getCollection($category_id) {
        // extract the category we are talking about
        $category = Category::where('id', '=', $category_id)->first();

        // retrieve all the posts from the given category with pagination
        $categoryPosts = Post::orderBy('id','desc')->where('category_id', '=', $category_id)->paginate(12);

        // return the view and pass in the objects
        return view('news.category')->with('category', $category)->with('categoryPosts', $categoryPosts);
    }
}
