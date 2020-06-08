<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        # process variable data or parameters
        # talk to the model
        # receive data from the model
        # compile or process data from the model if needed
        # pass that data to the correct view
        return view('pages/welcome');
    }

    public function getAbout() {
        $first = 'Sebastiano';
        $last = 'Chiari';

        $fullname = $first . " " . $last;
        $email = 'info@sebastianochiari.com';

        // with takes two arguments, the first is the name we want to access the view, the second the variable we want to be passed
        // return view('pages/about')->with("fullname", $fullname);
        // another way to do it
        // return view('pages/about')->withFullname($fullname)->withEmail($email);

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages/about')->withData($data);
    }

    public function getContact() {
        return view('pages/contact');
    }

    public function getPost() {
        return view('pages/post');
    }

}
