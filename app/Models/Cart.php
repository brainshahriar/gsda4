<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;
      protected $table ="carts";

          public function course(){
            return $this->belongsTo(Course::class, 'course_id');
          }

          public function user(){
            return $this->belongsTo(User::class, 'user_id');
          }
}