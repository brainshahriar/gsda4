<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Quize;

class Question extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function course(){
        return $this->belongsTo(Course::class,'elearning_course_id');
      }
      public function quiz(){
        return $this->belongsTo(Quize::class,'quiz_id');
      }
}
