<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

use App\Models\Flipcard;

class FlicardController extends Controller
{
    public function create()
    {
        $course=Course::all();
        return view ('backend.pages.flipcard.create',compact('course'));

    }

    public function store(Request $request){
        Flipcard::insert([
            'course_id' => $request->course_id,
            'question' => $request->question,
            'answer' => $request->answer,
            'hints1' => $request->hints1,
            'hints2' => $request->hints2,
            'hints3' => $request->hints3,
            'hints4' => $request->hints4,
            'time' => $request->time,
            'image' => $request->image,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function flipcard_frontend()
    {
        return view ('frontend.pages.flipcard');
    }
}
