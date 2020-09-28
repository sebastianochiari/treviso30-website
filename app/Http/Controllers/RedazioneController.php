<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Redazione;

class RedazioneController extends Controller
{
    /**
     * Function that show a single redazione utente based on the id
     *
     * @param $id redazione we want to show
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSingle($id){

        $redazione = Redazione::find($id);

        return view('pages.redazione')->with('redazione', $redazione);
    }
}
