<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

/**
 * Controller that deals with the single post page and the page where it's displayed the collection of posts from a selected category
 *
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    /**
     * Function that show a single post page based on the slug
     *
     * @param $slug post we want to show
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSingle($slug) {
        // MAIN POST
        // fetch from the DB based on slug (first() -> stop at the first one instead of collection)
        $mainPost = Post::where('slug', '=', $slug)->first();

        // RECENT POSTS
        // fetch from the DB the 3 most recent posts (except the one that is showed)
        $recentPosts = Post::orderBy('id','desc')->where('id', '!=', $mainPost->id)->limit(3)->get();

        // return the view and pass in the needed objects
        return view('news.single')->with([
            'mainPost' => $mainPost,
            'recentPost' => $recentPosts
        ]);
    }

    /**
     * Function that show the page with all the posts based on a selected category
     *
     * @param $category_id we want to show
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCollection($category_id) {
        // extract the category we are talking about
        $category = Category::where('id', '=', $category_id)->first();

        // retrieve all the posts from the given category with pagination
        $categoryPosts = Post::orderBy('id','desc')->where('category_id', '=', $category_id)->paginate(12);

        // return the view and pass in the objects
        return view('news.category')->with([
            'category' => $category,
            'categoryPosts' => $categoryPosts
        ]);
    }
}
