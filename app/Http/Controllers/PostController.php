<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Session;
use Purifier;
use Image;
use File;

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
        $categories = Category::all();
        $user = auth()->user();
        return view('posts.create')->with('categories', $categories)->with('user', $user);
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
            // rules that we want to validate (validate in order, bigger catches first)
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'author' => 'required|max:255',
            'category_id' => 'required|integer',
            'body' => 'required',
            'featured_image' => 'sometimes|image'
        ));

        // store the data in the database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->author = $request->author;
        $post->category_id = $request->category_id;
        $post->body = Purifier::clean($request->body);

        // store image in the public folder, the DB has the path to find the image
        if($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);

            $img = Image::make($image);
            $img->fit(1200, 800);
            $img->save($location);

            $post->image = $filename;
        }

        $post->save();

        // flash > only let exists for one request
        Session::flash('success', 'Il nuovo post è stato salvato correttamente!');

        // rederect to another page
        return redirect()->route('posts.show', $post->id);
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
        $categories = Category::all();
        $cats = array();
        foreach($categories as $category) {
            $cats[$category->id] = $category->name;
        }
        return view('posts.edit')->with([
            'post' => $post,
            'categories' => $cats
        ]);
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
        $post = Post::find($id);
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => "required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
            'author' => 'required|max:255',
            'category_id' => 'required|integer',
            'body' => 'required',
            'featured_image' => 'sometimes|image'
        ));

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->author = $request->author;
        $post->category_id = $request->category_id;
        $post->body = Purifier::clean($request->body);

        if($request->hasFile('featured_image')) {
            // add the new photo
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);

            $img = Image::make($image);
            $img->fit(1200, 800);
            $img->save($location);

            $oldFileName = $post->image;
            // update the DB
            $post->image = $filename;
            // delete the old photo
            File::delete(public_path('images/'. $oldFileName));
        }

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

        $oldFileName = $post->image;
        File::delete(public_path('images/'. $oldFileName));

        $post->delete();

        Session::flash('success', 'Il post è stato correttamente eliminato!');

        return redirect()->route('posts.index');
    }
}
