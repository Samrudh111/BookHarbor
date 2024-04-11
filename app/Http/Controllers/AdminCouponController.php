<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class AdminCouponController extends Controller
{
    public function coupon(){
        $coupons = Coupon::get();
        return view('admin.coupon')
        ->with('coupons',$coupons);
    }

    public function addCoupon(Request $request){
        $coupon = new Coupon();
        $coupon->code = $request->input('code');
        $coupon->minimum_amount = $request->input('minimum_amount');
        $coupon->discount_price = $request->input('discount_price');
        $coupon->save();

        return redirect()->back()->with('success','Coupon Added!');

    }

    public function updateCoupon(Request $request, $id){
        $coupon = Coupon::find($id);
        $coupon->code = $request->input('code');
        $coupon->minimum_amount = $request->input('minimum_amount');
        $coupon->discount_price = $request->input('discount_price');
        $coupon->save();

        return redirect()->back()->with('success','Coupon updated!');

    }

    public function destroyCoupon($id){
        $coupon = Coupon::find($id);
        $coupon->delete();
        
        return redirect()->back()->with('success','Coupon Deleted');
    }
}
