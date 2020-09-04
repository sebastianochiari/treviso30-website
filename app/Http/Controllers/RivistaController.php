<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rivista;
use Storage;
use Session;
use Image;

class RivistaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riviste = Rivista::orderBy('id','desc')->paginate(10);

        return view('riviste.index')->with('riviste', $riviste);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riviste.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'date' => 'required|date',
            'preview_img' => 'required|image',
            'pdf_file' => 'required|mimetypes:application/pdf'
        ));

        // store the data in the database
        $rivista = new Rivista;

        $rivista->name = $request->name;
        $rivista->date = $request->date;

        $timestamp = time();

        // store image in the public folder
        $image = $request->file('preview_img');
        $filename = $timestamp . '.' . $image->getClientOriginalExtension();
        $location = public_path('magazine\img/' . $filename);
        $img = Image::make($image);
        $img->save($location);
        $rivista->preview_img = $filename;

        // store pdf in the public folder
        $extension = $request->file('pdf_file')->extension();
        $filename = $timestamp . '.' . $extension;
        $path = $request->file('pdf_file')->storeAs(
            'magazine\pdf',
            $filename,
            'public'
        );
        $rivista->pdf_file = $filename;

        // save the rivista in the DB
        $rivista->save();

        // flash > only let exists for one request
        Session::flash('success', 'La nuova rivista è stato caricata correttamente!');

        // rederect to another page
        return redirect()->route('riviste.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
