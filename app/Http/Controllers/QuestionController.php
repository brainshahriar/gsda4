<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quize;
use App\Models\Question;
use App\Models\Option;

class QuestionController extends Controller
{
    public function questionStore(Request $request)
    {

       $data=$request->all();
        Question::create($data);
        $notification=array(
        'message'=>'Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
    public function questionView($id)
    {
      $questions=Question::where('quiz_id',$id)->with('course','quiz')->get();
      $options=Question::where('quiz_id',$id)->with('course','quiz')->first();
      $opt=$options->options;
      $options=explode(',',$opt);
      return view ('backend.pages.quiz.questionview',compact('questions','options'));
    }
    
    public function destroy($question_id)
    {
      Question::findOrFail($question_id)->delete();
        $notification=array(
         'message'=>'Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }

}
