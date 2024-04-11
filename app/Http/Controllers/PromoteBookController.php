<?php

namespace App\Http\Controllers;

use App\Models\OurBook;
use App\Models\PromoteBook;
use Illuminate\Http\Request;

class PromoteBookController extends Controller
{
    public function index(){
        $books = OurBook::get();
        $promotions = PromoteBook::get();
        return view('admin.promote-book', compact('books','promotions'));
    }


    public function store(Request $request){
        $request->validate([
            'author_image' => 'image|mimes:png,jpg,jpeg',
            'our_book_id' => 'required'
        ]);

        $store = new PromoteBook();
        $store->fill($request->all());

        if ($request->hasFile('author_image')) {
            $file = $request->file('author_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . "." . $extention;
            $file->move('uploads/authors', $filename);
            $store['author_image'] = '/uploads/authors/' . $filename;
            }

        $store->save();
        return redirect()->back()->with('success','Book Promoted successfully!');

}

public function update(Request $request, $id){
    $update = PromoteBook::findOrFail($id);
    $update->update($request->all());

    if ($request->hasFile( 'author_image')) {

        //delete old image from folder
        @unlink(public_path().$request['old_img']);

        $file = $request->file('author_image');
        $extention = $file->getClientOriginalExtension();
        $filename=time() . '.' . $extention;
        $file->move('uploads/authors', $filename);
        $update['author_image'] = '/uploads/authors/'.$filename;
      }

    $update->save();
    return redirect()->back()->with('success','Author Image Updated Successfully!');
}

public function delete($id)
{
    $promotion = PromoteBook::findOrFail($id);
    @unlink(public_path().$promotion->author_image);
    $promotion->delete();
    return redirect()->back()->with('success', 'Promotion Deleted Successfully!');
}
}
