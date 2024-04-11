<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $userCount = User::where('role','!=','admin')->count();
        return view('landing.index',compact('userCount'));
    }

    public function test(){
        return view('auth.test');
    }
}
