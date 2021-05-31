<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Hash;
use App\Models\User;

class AccountController extends Controller
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
     * Show the user profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.user-profile');
    }

    /**
     * Update profile.
     *
     */
    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        
        // change email
        $this->validate($request,[
            'email' => 'required',
        ]);
        
		$user->email = $request->email;
		$user->save();
        
        // change password
        if(!empty($request->password)){
             $this->change_password($request);
        }
        
        // change photo
        if($request->hasFile('photo')){
            
            $this->validate($request,[
                'photo' => 'file|image|mimes:jpeg,png|max:2048',
            ]);
            
            $photo = $request->file('photo');
            $photo_filename =  time().'.'.$photo->getClientOriginalExtension();
            
            if(!empty($user->photo)) {
                $photo_filename = $user->photo;
            }
            
            $user->photo = $photo_filename;
            $user->save();
            
            Image::make($photo)->resize(160, 160)->save(public_path('img/users/'.$photo_filename));
        }
        
        session()->flash('success', 'Profile berhasil di ubah !');
        return redirect()->back();
    }

    /**
     * Change password.
     *
     */
    public function change_password(Request $request)
    {
        $user = User::find(auth()->user()->id);
        
        $this->validate($request,[
            'password' => 'confirmed|min:8',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();
        
        session()->flash('success', 'Password berhasil di ubah !');
        return redirect()->back();
    }
}
