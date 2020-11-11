<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Rivista;
use App\Sponsor;
use App\Redazione;

/**
 * General controller with homepage and minor pages
 *
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller {

    /**
     * Function to display the homepage
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex() {
        // LATEST POSTS
        // fetch from the DB the latest 4 posts
        $latestPosts = Post::orderBy('id','desc')->limit(4)->get();

        // CATEGORIES
        // fetch from the DB all the categories (in order to fill the menu navbar)
        $categories = Category::get();

        // POSTS per CATEGORY
        // foreach category, fetch from the DB the latest 3 posts
        $recentPosts = collect(new Post);
        for ($i = 1; $i <= count($categories); $i++) {
            $temp = Post::orderBy('id', 'desc')->where('category_id', '=', "$i")->limit(3)->get();
            $recentPosts = $recentPosts->concat($temp);
        }

        // LATEST RIVISTA
        // fetch from the DB the latest uploaded rivista
        $latestRivista = Rivista::orderBy('date','desc')->first();

        // SPONSORS
        // fetch from the DB the sponsors (in order to fill the sponsor column)
        $sponsors = Sponsor::all();

        return view('pages/welcome')->with([
            'latestPosts' => $latestPosts,
            'categories' => $categories,
            'recentPosts' => $recentPosts,
            'latestRivista' => $latestRivista,
            'sponsors' => $sponsors
        ]);
    }

    /**
     * Function to display the rivista page with all the magazines
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getMagazine() {
        // RIVISTE
        // fetch from the DB all the available magazines with pagination
        $riviste = Rivista::orderBy('date', 'desc')->paginate(12);

        return view('pages/rivista')->with('riviste', $riviste);
    }

    /**
     * Function to display the about page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAbout() {

        $redazione = Redazione::all();

        return view('pages/about')->with('redazione', $redazione);
    }

    /**
     * Function to display the contact page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getContact() {
        return view('pages/contact');
    }

    /**
     * Function that show a single redazione utente based on the id
     *
     * @param $id redazione we want to show
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRedazioneById($id){

        $redazione = Redazione::find($id);

        return view('pages.redazione')->with('redazione', $redazione);
    }

}
