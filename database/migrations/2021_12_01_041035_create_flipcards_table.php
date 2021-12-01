<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlipcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flipcards', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->string('image')->nullabel(); 
            $table->string('question');
            $table->string('answer');
            $table->string('hints_1')->nullable();
            $table->string('hints_2')->nullable();
            $table->string('hints_3')->nullable();
            $table->string('hints_4')->nullable();
            $table->string('user_answer')->nullable();
            $table->string('time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flipcards');
    }
}
