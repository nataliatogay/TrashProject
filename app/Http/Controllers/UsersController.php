<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = auth()->user();
        return view('myaccount', compact('user'));
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
        $validated = $request->validate([
            'img_input' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required'
        ]);

        // if ($request->hasFile('img_input')) {
        //     $image = $request->file('img_input');
        //     $filename = time().$image->getClientOriginalName();
        //    // $name = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/images');
        //     $image->move($destinationPath, $filename);
        //     //dd($destinationPath);
        //     //$this->save();

        //     //return back()->with('success','Image Upload successfully');
        // }

        $file = $request->file('img_input');
        $filename = time().$file->getClientOriginalName();
        $file->storeAs('public', $filename);








        $validated['img_path'] = 'storage/'.$filename;

        auth()->user()->update($validated);
        // return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
