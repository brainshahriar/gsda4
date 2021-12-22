<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timer;

class TimerController extends Controller
{
    public function create()
    {
        $timer=Timer::all();
        return view('backend.pages.timer.create',compact('timer'));
    }
}
