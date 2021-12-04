<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quize;
use App\Models\Course;

class QuizController extends Controller
{

    public function index()
    {
        $courses=Course::all();
        $quizes=Quize::get();

        return view('backend.pages.quiz.create',compact('quizes','courses'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=$request->all();
        Quize::create($data);
        return redirect()->back()->with('success','Data Added');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($question_id)
    {
        Quize::findOrFail($question_id)->delete();
        $notification=array(
         'message'=>'Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }
}
