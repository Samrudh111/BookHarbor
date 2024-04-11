<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\OurBook;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $cart = null;
        // $cart_total = null;
        try {
            $cart = Cart::with('cart_items')->where('is_paid', false)
            ->where('user_id', $request->user()->id)
            ->first();
            // $cart_total = $cart->getCartTotal();
        } catch (Exception $e) {
            echo $e;
        }
        $context = [
            'cart' => $cart,
            // 'cart_total' => $cart_total,
        ];
        return view('shop-components.cart', $context);
    }

    public function addToCart(Request $request, $uid)
{
    $quant = $request->query('quantity');
    $quantity = $request->input('quantity', 1); // Assuming quantity is provided in the request

    $product = OurBook::where('id', $uid)->firstOrFail();
    $user = $request->user();
    $cart = Cart::firstOrCreate(['user_id' => $user->id, 'is_paid' => false]);
    
    $cartItem = CartItem::where('cart_id', $cart->id)
        ->where('our_book_id', $product->id)
        ->first();
    
    if ($cartItem) {
        // Cart item already exists, increment the quantity
        $cartItem->quantity += $quantity;
        $cartItem->save();
    } else {
        // Create a new cart item
        $cartItem = CartItem::create([
            'cart_id' => $cart->id,
            'our_book_id' => $product->id,
            'quantity' => $quantity,
        ]);
    }
    
    if ($quant) {
        $cartItem->quantity = $quantity;
        $cartItem->save();
    }

    return redirect()->back()->with('success','Book added to cart!');
}
    
    public function saveMe(request $request)
    {
        $value=$request->input(key: 'value');
        $field=$request->input(key: 'field');
        $id=$request->input(key: 'id');

        $update = CartItem::where('id','=', $id)
        ->update([$field => $value]);

        if(!$update) {
            return response()->json([1]);
        } else {
            return response()->json([2]);
        }
    }

    public function remove($id)
    {
        try {
            $cartItem = CartItem::where('id', $id)->first();
            if ($cartItem) {
                $cartItem->delete();
            }
        } catch (\Exception $e) {
            report($e);
        }
        
        return redirect()->back()->with('success','Product removed!');
    }
}
