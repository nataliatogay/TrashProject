<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

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
        $user = auth()->user();
        return view('profile.index', compact('user'));
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
        return view('profile.edit', compact('user'));
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
        //dd($request->all());

        $validated = $request->validate([
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $file = $request->file('img_path');
        $filename = time().$file->getClientOriginalName();
        $file->storeAs('public', $filename);




        $validated['img_path'] = 'storage/'.$filename;

        auth()->user()->update($validated);
        return redirect('/profile');
    }

    public function editpassword(){
        $user = auth()->user();
        return view('profile.passwords.edit', compact('user'));
    }

    public function changePassword(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
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


    // public function ajaxImage(Request $request)
    // {
    //     if ($request->isMethod('get'))
    //         return view('ajax_image_upload');
    //     else {
    //         $validator = Validator::make($request->all(),
    //             [
    //                 'file' => 'image',
    //             ],
    //             [
    //                 'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
    //             ]);
    //         if ($validator->fails())
    //             return array(
    //                 'fail' => true,
    //                 'errors' => $validator->errors()
    //             );
    //         $extension = $request->file('file')->getClientOriginalExtension();
    //         $dir = 'storage/';
    //         $filename = uniqid() . '_' . time() . '.' . $extension;
    //         $request->file('file')->move($dir, $filename);
    //         return $filename;
    //     }
    // }
}
