<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use App\Models\ListedBooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ListingController extends Controller
{
    public function addlisting(){
      $category = Category::get();

        return view('listing.add-listing')
        ->with('category',$category);

    }



    public function mylistings(){
        $list_count = ListedBooks::where('seller_id','=',Auth::user()->id)->count();
        $listed_books = ListedBooks::where('seller_id','=',Auth::user()->id)->get();
        return view('listing.my-listings')
        ->with('list_count',$list_count)
        ->with('listed_books',$listed_books);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required',
            'book_category' => 'required',
            'book_title' => 'required',
            'book_subtitle' => 'nullable',
            'book_original_price' => 'nullable',
            'book_selling_price' => 'required',
            'book_description' => 'required',
            'book_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
          ]); 

          //handle the file is_uploade
          if($request->hasFile('book_image')){
            //get filename with extension
            $filenameWithExt = $request->file('book_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('book_image')->getClientOriginalExtension();
            //filename to Store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('book_image')->storeAs('public/book_images', $fileNameToStore);
          }else{
            $fileNameToStore = 'noimage.jpg';
          }

          $books = new ListedBooks;
          $books->seller_id = Auth::user()->id;
          $books->author_name = $request->input('author_name');
          $books->book_category = $request->input('book_category');
          $books->book_title = $request->input('book_title');
          $books->book_subtitle = $request->input('book_subtitle');
          $books->book_original_price = $request->input('book_original_price');
          $books->book_selling_price = $request->input('book_selling_price');
          $books->book_description = $request->input('book_description');
          $books->sold_by = 'user';
          $books->status = 'In Stock';
          $books->book_image = $fileNameToStore;
          $books->save();

          return redirect()->route('my-listings')->with('success', 'Book has been listed.');
          

    }

    public function  SoldOut(Request $request, $book){
      DB::table('listed_books')
      ->where('id', $book)
      ->update([
          'status' => 'Sold Out'
      ]);
      return redirect()->route('my-listings')->with('success', 'Book Marked as Sold!');
    }
}