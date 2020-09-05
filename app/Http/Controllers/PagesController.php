<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Rivista;

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
        // rivista
        $latestRivista = Rivista::orderBy('date','desc')->first();

        return view('pages/welcome')->with('latestPosts', $latestPosts)->with('categories', $categories)->with('recentPosts', $recentPosts)->with('latestRivista', $latestRivista);
    }


    public function getMagazine() {
        // ottieni tutte le riviste con paginazione
        $riviste = Rivista::orderBy('date', 'desc')->paginate(12);

        return view('pages/rivista')->with('riviste', $riviste);
    }

    public function getAbout() {
        return view('pages/about');
    }

    public function getContact() {
        return view('pages/contact');
    }

}
