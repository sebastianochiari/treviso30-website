<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Redazione;
use Session;
use Purifier;
use Image;
use File;

class RedazioneController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('can:is-admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redazione = Redazione::all();
        return view('admin.redazione.index')->with('redazione', $redazione);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.redazione.create');
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
            'description' => 'required',
            'image' => 'sometimes|image'
        ));

        // store the data in the database
        $single = new Redazione;

        $single->name = $request->name;
        $single->description = Purifier::clean($request->description);

        // save the image in the public folder
        $image = $request->file('image');
        $timestamp = time();
        $filename = $timestamp . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/redazione/' . $filename);
        $img = Image::make($image);
        $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save($location);
        $single->image = $filename;

        $single->save();

        // flash > only let exists for one request
        Session::flash('success', 'Il nuovo membro della redazione è stato aggiunto correttamente!');

        // rederect to another page
        return redirect()->route('admin.redazione.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single = Redazione::find($id);
        return view('admin.redazione.edit')->with('single', $single);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $single = Redazione::find($id);

        // validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'sometimes|image'
        ));

        $single->name = $request->name;
        $single->description = Purifier::clean($request->description);

        if($request->hasFile('image')) {
            // save the image in the public folder
            $image = $request->file('image');
            $timestamp = time();
            $filename = $timestamp . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/redazione/' . $filename);
            $img = Image::make($image);
            $img->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save($location);

            // update the image on the DB
            $oldFileName = $single->image;
            // update the DB
            $single->image = $filename;
            // delete the old photo
            File::delete(public_path('images/redazione/'. $oldFileName));
        }

        $single->save();

        // flash > only let exists for one request
        Session::flash('success', 'Il membro della redazione è stato modificato correttamente!');

        // rederect to another page
        return redirect()->route('admin.redazione.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $single = Redazione::find($id);

        // delete the photo
        $oldFileName = $single->image;
        File::delete(public_path('images/redazione/'. $oldFileName));

        $single->delete();

        // flash > only let exists for one request
        Session::flash('success', 'Il membro della redazione è stato eliminato correttamente!');

        // rederect to another page
        return redirect()->route('admin.redazione.index');
    }
}
