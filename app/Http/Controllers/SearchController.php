<?php

namespace App\Http\Controllers;


use App\Models\OurBook;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        if($request->search){
            $ourbooks = OurBook::where('book_title', 'LIKE', '%' . $request->search . '%')->latest()->paginate(10);
        }else{
            return redirect()->back()->with('error','empty!');
        }
        return view('base.search')->with('ourbooks',$ourbooks);
    }
}
