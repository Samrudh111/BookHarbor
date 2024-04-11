<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile.profile');
    }

    public function updateProfile(Request $request, $id){
        $users = User::find($id);
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->phone = $request->input('phone');
        $users->save();

        return redirect()->back()->with('success','Profile Updated!');
    }
}
