<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

use App\Models\Flipcard;
use Carbon\Carbon;

class FlicardController extends Controller
{
    public function create()
    {
        $flipcard=Flipcard::all();
        $course=Course::all();
        return view ('backend.pages.flipcard.create',compact('course','flipcard'));
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
        
        $flipcard = Flipcard::paginate(1);
        $course=Course::all();
        return view ('frontend.pages.flipcard',compact('flipcard','course'));
    }

    public function delete($flipcard_id){

        Flipcard::findOrFail($flipcard_id)->delete();
        $notification=array(
         'message'=>'Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
     }
     
}
