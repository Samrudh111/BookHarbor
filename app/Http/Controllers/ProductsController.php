<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\ListedBooks;
use App\Models\OurBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
  
    public function ourproducts($id = null)
{
    // Check if the product category ID is provided
    if ($id) {
        // Fetch data for the specific product category
        $ourbooks = OurBook::whereHas('category', function ($query) use ($id) {
          $query->where('slug', $id);
      })->get();
    } else {
        // Fetch data for all products (when no category ID is provided)
        $ourbooks = OurBook::all();
    }

    $categories = Category::get();

    return view('products.ourproducts',['ourbooks' => $ourbooks, 'categories' => $categories]);
}

    public function listedproducts(){
        $listedcount = ListedBooks::where('seller_id','!=', Auth::user()->id)->count();
        $listed = ListedBooks::join('users', 'listed_books.seller_id', '=', 'users.id')
        ->where('listed_books.seller_id','!=', Auth::user()->id)
        ->where('listed_books.status','!=', 'Sold Out')
        ->get();
           return view('products.listedproducts')
           ->with('listedcount',$listedcount)
           ->with('listed',$listed);
    }

    public function book_details($id){
        if(OurBook::where('book_title',$id)->exists()){
            $books = OurBook::where('book_title',$id)->first();
            return view('products.book-details',compact('books'));
        }else{
            return redirect()->route('ourproducts')->with('error','The link has broken!');
        }
    }

    
}
