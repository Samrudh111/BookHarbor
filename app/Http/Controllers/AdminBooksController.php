<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ListedBooks;
use App\Models\OurBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminBooksController extends Controller
{
    public function ourbooks(){
      $ourbooks = OurBook::get();
      $category = Category::get();
        return view('admin.our-books')
        ->with('category',$category)
        ->with('ourbooks',$ourbooks);
    }

    
    public function listedbooks(){
      $listed = ListedBooks::join('users', 'listed_books.seller_id', '=', 'users.id')
      ->select('listed_books.id as book_id','book_title','first_name','book_image','author_name','book_description','book_original_price','book_selling_price','status')
      ->get();
        return view('admin.listed-books')
        ->with('listed',$listed);
    }

    public function addbooks(){
      $categories = Category::get();
        return view('admin.add-books')->with('categories',$categories);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required',
            'publisher_name' => 'required',
            'published_date' => 'required',
            'category_id' => 'required',
            'book_title' => 'required',
            'book_subtitle' => 'nullable',
            'total_books' => 'required',
            'book_original_price' => 'nullable|numeric',
            'book_selling_price' => 'required|numeric',
            'book_description' => 'nullable',
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

          $books = new OurBook;
          $books->author_name = $request->input('author_name');
          $books->publisher_name = $request->input('publisher_name');
          $books->published_date = $request->input('published_date');
          $books->category_id = $request->input('category_id');
          $books->book_title = $request->input('book_title');
          $books->book_subtitle = $request->input('book_subtitle');
          $books->total_books = $request->input('total_books');
          $books->book_original_price = $request->input('book_original_price');
          $books->book_selling_price = $request->input('book_selling_price');
          $books->book_description = $request->input('book_description');
          $books->status = 'In Stock';
          $books->book_image = $fileNameToStore;
          $books->save();

          return redirect()->route('admin.our-books')->with('success', 'Book has been added successfully!.');
          

    }

    public function addcategory(Request $request){
      $request->validate([
        'book_category' => 'required |unique:categories'
      ]);
      $category = new Category;
      $category->book_category = $request->input('book_category');
      $category->save();
      echo $category->slug;
      return back()->with('success','Category added!');
    }

    public function update(Request $request, $books)
    {
      $request->validate([
        'author_name' => 'required',
        'publisher_name' => 'required',
        'published_date' => 'required',
        'category_id' => 'required',
        'book_title' => 'required',
        'book_subtitle' => 'nullable',
        'total_books' => 'required',
        'book_original_price' => 'nullable|numeric',
        'book_selling_price' => 'required|numeric',
        'book_description' => 'nullable',
        'book_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
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

      $books = OurBook::find($books);
      $books->author_name = $request->input('author_name');
      $books->publisher_name = $request->input('publisher_name');
      $books->published_date = $request->input('published_date');
      $books->category_id = $request->input('category_id');
      $books->book_title = $request->input('book_title');
      $books->book_subtitle = $request->input('book_subtitle');
      $books->total_books = $request->input('total_books');
      $books->book_original_price = $request->input('book_original_price');
      $books->book_selling_price = $request->input('book_selling_price');
      $books->book_description = $request->input('book_description');
      if($request->hasFile('book_image')){
        $books->book_image = $fileNameToStore;
      }
      $books->save();
      return redirect()->route('admin.our-books')->with('success', 'Changes has been made successfully!.');
}


public function destroy($id)
{
    $product = OurBook::find($id);

    if($product->book_image != 'noimage.jpg'){
      Storage::delete('public/book_images/'.$product->book_image);
    }
    $product->delete();
    return redirect()->route('admin.our-books')->with('success', 'Book has been removed successfully!.');

}

public function destroylb($id)
{
    $product = ListedBooks::find($id);

    if($product->book_image != 'noimage.jpg'){
      Storage::delete('public/book_images/'.$product->book_image);
    }
    $product->delete();
    return redirect()->route('admin.listed-books')->with('success', 'Book has been removed successfully!.');

}

public function  InStock(Request $request, $book){
  DB::table('our_books')
  ->where('id', $book)
  ->update([
      'status' => 'In Stock',
      'total_books' => 30
  ]);
  return redirect()->route('admin.our-books')->with('success', 'Status Updated successfully!.');
}

public function  SoldOut(Request $request, $book){
  DB::table('our_books')
  ->where('id', $book)
  ->update([
      'status' => 'Sold Out',
      'total_books' => 0
  ]);
  return redirect()->route('admin.our-books')->with('success', 'Status Updated successfully!.');
}



}