<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class AstaContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.asta-contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|integer',
            'nopera' => 'required|integer',
            'money' => 'required'
        ]);

        Mail::send('emails.asta-message', [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'nopera' => $request->nopera,
            'money' => $request->money
        ], function($mail) use($request) {
            $fullname = $request->name . $request->surname;
            $mail->from($request->email, $fullname);
            $mail->to('treviso.trenta@gmail.com')->subject('Arte per bene - OFFERTA');
        });

        Session::flash('success', 'La tua offerta è stata registrata con successo. Grazie!');

        return redirect()->back();
    }

}
