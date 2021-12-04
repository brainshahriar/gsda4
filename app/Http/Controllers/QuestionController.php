<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quize;
use App\Models\Question;
use App\Models\Option;


class QuestionController extends Controller
{
    public function store(Request $request)
    {
      dd($request->all());
       $data=$request->all();
      Question::create($data);
       

      $notification=array(
        'message'=>'Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }

}
