<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ListedBooks;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list_count = ListedBooks::where('seller_id','!=',Auth::user()->id)->where('status','!=','Sold Out')->count();
        $listed_books = ListedBooks::where('seller_id','!=',Auth::user()->id)->where('status','!=','Sold Out')->get();
        
        return view('home.index')
        ->with('list_count',$list_count)
        ->with('listed_books',$listed_books);
    }
}
