<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Gate;

class UsersController extends Controller
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
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|email'
        ));

        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles()->sync($request->roles);

        $user->save();


        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // remove all the roles for the given user
        $user->roles()->detach();
        // delete the user from the table
        $user->delete();
        // redirect to the index page of users
        return redirect()->route('admin.users.index');
    }
}
