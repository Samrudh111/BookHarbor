<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceEmail;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function dashboard(){
        $userCount = User::where('role','user')->count();
        $pendingUsers = User::where('role','user')->where('is_email_verified',0)->count();
        $users = User::where('role','user')->get();
        return view('admin.dashboard')
        ->with('userCount',$userCount)
        ->with('pendingUsers',$pendingUsers)
        ->with('users',$users);
    }

    public function orders()
    {
        // Fetch orders along with related cart and cart items
        $orders = Order::with('cart.cart_items.book')->get();
        $totalOrders = Order::count();
        $deliveredOrders = Order::where('status','Delivered')->count();
        $returnedOrders = Order::where('status','Refunded')->count();
    
        return view('admin.orders')
        ->with('orders', $orders)
        ->with('totalOrders', $totalOrders)
        ->with('deliveredOrders', $deliveredOrders)
        ->with('returnedOrders', $returnedOrders);
    }

    public function packed($id){
        $orders = Order::find($id);
        $orders->status = 'Packed';
        $orders->save();

        Mail::to($orders->user->email)->send(new InvoiceEmail($orders));

        return redirect()->back()->with('success','Status changed to packed!');
    }

    public function shipped($id){
        $orders = Order::find($id);
        $orders->status = 'Shipped';
        $orders->save();

        Mail::to($orders->user->email)->send(new InvoiceEmail($orders));

        return redirect()->back()->with('success','Status changed to shipped!');
    }

    public function delivered($id){
        $orders = Order::find($id);
        $orders->status = 'Delivered';
        $orders->save();

        Mail::to($orders->user->email)->send(new InvoiceEmail($orders));

        return redirect()->back()->with('success','Status changed to delivered!');
    }

    public function orderDetails($id){
        $orders = Order::with('cart.cart_items.book')->where('r_pay_id',$id)->first();

        return view('admin.order-details')->with('orders',$orders);
    }

    public function payments(){
        return view('admin.payments');
    }
}
