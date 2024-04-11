<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{
    public function shipping(Request $request)
    {
        $cart = Cart::where('is_paid', false)
            ->where('user_id', $request->user()->id)
            ->first();

            if (!$cart || !$cart->cart_items()->exists()) {
                // Handle case when cart or cart items are not found
                // For example, redirect to an error page or display an error message
                return redirect()->back()->with('error', 'Cart not found or cart items not available.');
            }

        $cart_total = $cart->getCartTotal();
        $profile = Address::where('user_id', $request->user()->id)->first();

        if ($request->isMethod('POST')) {
            $profileData = [
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'landmark' => $request->input('landmark'),
                'country' => $request->input('country'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
                'pincode' => $request->input('pincode'),
                'user_id' => $request->user()->id
            ];

            if ($profile) {
                // If profile exists, update it
                $profile->update($profileData);
            } else {
                // If profile doesn't exist, create a new one
                Address::create($profileData);
            }

            return redirect()->route('payment');
        }

        $data = [
            'profile' => $profile,
            'cart' => $cart,
            'cart_total' => $cart_total
        ];

        return view('shop-components.shipping-info', $data);
    }

    public function payment(Request $request){
        $cart = null;
        $cart_total = null;
        $cart_sub_total = null;
        $razorpay_total = null;
        $profile = null;
        $payment = null;
    
        try {
            $cart = Cart::where('is_paid', false)
                ->where('user_id', Auth::id())
                ->first();
                if (!$cart || !$cart->cart_items()->exists()) {
                    // Handle case when cart or cart items are not found
                    // For example, redirect to an error page or display an error message
                    return redirect()->back()->with('error', 'Cart not found or cart items not available.');
                }
            $cart_total = $cart->getCartTotal() + 150;
            $cart_sub_total = $cart->getCartTotal();
            $razorpay_total = $cart_total * 100;
            $profile = Address::where('user_id', Auth::id())->first();
        } catch (\Exception $e) {
            dd($e); // Handle the exception appropriately, for example, redirect the user to an error page.
        }
    
        if ($request->isMethod('POST')) {
            $coupon = $request->input('coupon');
            $coupon_obj = Coupon::where('code', 'LIKE', "%$coupon%")->first();
    
            if (!$coupon_obj) {
                Session::flash('warning', 'Invalid Coupon!');
                return redirect()->back();
            }
    
            if ($cart->coupon) {
                Session::flash('warning', 'Coupon already exists!');
                return redirect()->back();
            }
    
            if ($cart_total < $coupon_obj->minimum_amount) {
                Session::flash('warning', 'Minimum amount should be greater than ' . $coupon_obj->minimum_amount);
                return redirect()->back();
            }
    
            if ($coupon_obj->is_expired) {
                Session::flash('warning', 'Coupon has expired!');
                return redirect()->back();
            }
    
            $cart->coupon_id = $coupon_obj->id;
            $cart->save();
    
            Session::flash('success', 'Coupon Applied');
            return redirect()->back();
        }
    
        if ($cart) {
            $client = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            try {
                $orderData = [
                    'receipt' => strval($cart->id),
                    'amount' =>  $cart->getCartTotal() * 100,
                    'currency' => 'USD',
                    'payment_capture' => 1,
                ];
                $payment = $client->order->create($orderData);
                $cart->razor_pay_order_id = $payment->id;
                $cart->save();
            } catch (\Exception $e) {
                dd('Error creating Razorpay order:', $e); // Handle the exception appropriately, for example, redirect the user to an error page.
            }
        }
    
        $data = [
            'cart' => $cart,
            'cart_total' => $cart_total,
            'cart_sub_total' => $cart_sub_total,
            'payment' => $payment,
            'razorpay_total' => $razorpay_total,
            'profile' => $profile,
        ];
    
    
        return view('shop-components.payment',$data);
    }

    public function removeCoupon(Request $request, $cart_id)
    {
        $cart = Cart::where('id', $cart_id)->first();
    
        if ($cart) {
            $cart->coupon_id = null;
            $cart->save();
    
            Session::flash('success', 'Coupon Removed!');
        } else {
            Session::flash('error', 'Cart not found!');
        }
    
        return Redirect::back();
    }

    public function success(){
        return view('shop-components.success');
    }
}
