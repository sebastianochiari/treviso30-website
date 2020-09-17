<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sponsor;
use Image;
use Session;
use File;

class SponsorController extends Controller
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
        $sponsors = Sponsor::all();

        return view('admin.sponsors.index')->with('sponsors', $sponsors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sponsors.create');
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
            'link' => 'required|max:255',
            'image' => 'required|image'
        ));

        // store the data in the database
        $sponsor = new Sponsor;

        $sponsor->name = $request->name;
        $sponsor->link = $request->link;

        $timestamp = time();

        // store image in the public folder
        $image = $request->file('image');
        $filename = $timestamp . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/sponsor/' . $filename);
        $img = Image::make($image);
        $img->save($location);
        $sponsor->image = $filename;

        // save the sponsor in the DB
        $sponsor->save();

        // flash > only let exists for one request
        Session::flash('success', 'Il nuovo sponsor è stato aggiunto correttamente!');

        // rederect to another page
        return redirect()->route('admin.sponsors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);

        $imageName = $sponsor->image;
        File::delete(public_path('images/sponsor/' . $imageName));

        $sponsor->delete();

        Session::flash('success', 'Lo sponsor è stato correttamente eliminato!');

        return redirect()->route('admin.sponsors.index');
    }
}
