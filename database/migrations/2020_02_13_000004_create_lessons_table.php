<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weekday');
            $table->string('color');
            $table->string('title');
            $table->time('start_time');
            $table->time('end_time');
            $table->date('end_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
