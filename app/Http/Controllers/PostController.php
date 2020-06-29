<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PostController extends Controller
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
        // create a variable to store all the blog posts in it from the database
        $posts = Post::orderBy('id','desc')->paginate(10);

        // display a view and pass the variable
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            // rules that we want to validate
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        // store the data in the database
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        // flash > only let exists for one request
        Session::flash('success', 'Il nuovo post è stato salvato correttamente!');

        // rederect to another page
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
        // validate the data
        $this->validate($request, array(
            // rules that we want to validate
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        // store the data in the database
        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        // flash > only let exists for one request
        Session::flash('success', 'Il post è stato modificato correttamente!');

        // rederect to another page
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'Il post è stato correttamente eliminato!');

        return redirect()->route('posts.index');
    }
}
