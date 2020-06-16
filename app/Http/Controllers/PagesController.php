<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    # process variable data or parameters
    # talk to the model
    # receive data from the model
    # compile or process data from the model if needed
    # pass that data to the correct view

    public function getIndex() {
        $posts = Post::orderBy('id','desc')->limit(4)->get();
        return view('pages/welcome')->with('posts', $posts);
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
