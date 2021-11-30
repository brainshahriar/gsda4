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
}
