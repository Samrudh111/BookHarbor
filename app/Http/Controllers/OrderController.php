<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceEmail;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OurBook;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::with('cart.cart_items.book')
                       ->where('user_id', Auth::user()->id)
                       ->orderBy('created_at', 'desc') // You can change the column and direction for ordering
                       ->get();
        return view('shop-components.orders')->with('orders', $orders);
    }
    
    
    
    public function track_order(Request $request, $order_id)
{
    $profile = Address::where('user_id', $request->user()->id)->first();
    $cart = Cart::where('razor_pay_order_id', $order_id)->first();
    if ($cart) {
        $cart_items = $cart->cart_items()->get();

        if ($cart_items->isNotEmpty()) {
            foreach ($cart_items as $cart_item) {
                $book = OurBook::find($cart_item->book->id);
        
                if ($book) {
                    $total_books = $cart_item->getTotalBooks();
                    $book->total_books = $total_books;
                    $book->save();
                    if($book->total_books < 1){
                        $book->status = 'Sold Out';
                        $book->save();
                    }
                } else {
                    // Handle case where book is not found
                }
            }
        } else {
            // Handle case where cart items are not found
        }
    } else {
        // Handle case where cart is not found
    }
     $cart->is_paid = true;
     $cart->amount_paid = $cart->getCartTotal();
     $cart->save();
     $order = Order::find($order_id);

    if ($order) {
        // Access the status of the order through the relationship
        $status = $order->status;
    } else {
        // Order with the given ID does not exist
        // Handle the case when the order is not found
    }

    if (!$cart) {
        // Handle case when cart is not found
        // For example, redirect to an error page or display an error message
        return redirect()->route('home')->with('message', 'Cart not found.');
    }

    // Check if the payment with the same order ID exists
    $existingPayment = Payment::where('r_payment_id', $order_id)->first();
    if (!$existingPayment) {
        $payment = new Payment();
        $payment->user_id = $request->user()->id;
        $payment->cart_id = $cart->id;
        $payment->r_payment_id = $order_id;
        $payment->method = 'Razorpay';
        $payment->save();
    }

    // Check if the order with the same order ID exists
    $order = Order::where('r_pay_id', $order_id)->first();
    if (!$order) {
        $order = new Order();
        $order->user_id = $request->user()->id;
        $order->cart_id = $cart->id;
        $order->address_id = $profile->id;
        $order->payment_id = $payment->id;
        $order->r_pay_id = $order_id;
        $order->status = 'Confirmed';
        $order->ordered_at = Carbon::now();
        $order->save();

        Mail::to($order->user->email)->send(new InvoiceEmail($order));
    }

    // Access the status of the order
    $status = $order->status;


    $data = [
        'profile' => $profile,
        'cart' => $cart,
        'order' => $order,
        'status' => $status, // Add the order status to the data array
    ];

    return view('shop-components.track-order', $data);
}
}
