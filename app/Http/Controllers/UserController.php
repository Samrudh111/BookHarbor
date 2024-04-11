<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist(){
        $users = User::where('role','user')->get();
        // Get the users who have made payments and count them
        $usersWithPayments = User::whereHas('payments')
        ->withCount('payments')
        ->get();
        $unverifiedUsersCount = User::where('role','user')->where('email_verified_at',0)->count();

        return view('admin.users', compact('usersWithPayments'))
        ->with('unverifiedUsersCount',$unverifiedUsersCount)
        ->with('users',$users);
    }

    public function userdetails(){
        return view('admin.user-details');
    }
    
}
