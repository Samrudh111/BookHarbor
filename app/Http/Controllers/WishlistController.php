<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function wishlist(){
        return view('shop-components.wishlist');
    }

    public function add(Request $request){
        $wishlist = new Wishlist;
        $wishlist->book_id = $request->input('book_id');
        $wishlist->user_id = Auth::user()->id;
        $wishlist->status = 'added';
        $wishlist->save();
        return back()->with('success','Item Added to Wishlist!');
      }
}
