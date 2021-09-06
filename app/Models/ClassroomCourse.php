<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainCategory;
use App\Models\CourseCategory;

class ClassroomCourse extends Model
{
    use HasFactory;
    protected $table ="classroom_courses";

  public function main_category(){
    return $this->belongsTo(MainCategory::class, 'main_category_id');
  }

  public function course_category(){
    return $this->belongsTo(CourseCategory::class, 'course_category_id');
  }

}
