<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

class PagesController extends Controller {

    # process variable data or parameters
    # talk to the model
    # receive data from the model
    # compile or process data from the model if needed
    # pass that data to the correct view

    public function getIndex() {
        // ottieni l'ultima rivista
        // ottieni gli ultimi quattro post
        $latestPosts = Post::orderBy('id','desc')->limit(4)->get();
        // categorie
        $categories = Category::get();
        // post recenti per categoria
        $recentPosts = collect(new Post);
        for ($i = 1; $i <= count($categories); $i++) {
            $temp = Post::orderBy('id', 'desc')->where('category_id', '=', "$i")->limit(3)->get();
            $recentPosts = $recentPosts->concat($temp);
        }

        return view('pages/welcome')->with('latestPosts', $latestPosts)->with('categories', $categories)->with('recentPosts', $recentPosts);
    }

    public function getAbout() {
        return view('pages/about');
    }

    public function getContact() {
        return view('pages/contact');
    }

    public function getPost() {
        return view('pages/post');
    }

}
