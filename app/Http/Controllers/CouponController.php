<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coupon;

class CouponController extends Controller
{
    public function create()
    {
        $coupons=Coupon::where('id','DESC')->get();
        return view ('backend.pages.coupon.create',compact('coupons'));
    }
    public function store(Request $request){
        Coupon::insert([
            'coupon_name'=>strtoupper($request->coupon_name),
            'coupon_discount'=>$request->coupon_discount,
            'coupon_validity'=>$request->coupon_validity,
            'created_at'=>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Coupon Added Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
