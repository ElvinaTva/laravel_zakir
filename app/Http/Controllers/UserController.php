<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return User::where('first_name', 'Ehmed')->get();
        // return User::where('first_name', '!=',  'Ehmed')->get();
        // return User::where('first_name', 'Ehmed')->orWhere('first_name', 'Memmed')->get();

        // return User::pluck('first_name');
        $ids = [2, 4, 6];
        // return User::whereIn('id', $ids)->get();

        // return User::whereNotIn('id', $ids)->get();

        // return User::where('first_name', 'like', '%ehm%')->get();


        // return User::orderBy('id', 'ASC')->get();
        // return User::orderBy('id', 'DESC')->get();


        // return User::take(3)->get();

        return User::get();

    }

// ///////////// ozumuz yazan funksiya
    public function insertNewUser(){
        return 'new post';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['msg'=> 'User created successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['msg'=> 'User updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['msg'=> 'User deleted successfully.']);

    }
}
