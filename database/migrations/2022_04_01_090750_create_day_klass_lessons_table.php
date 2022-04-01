<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayKlassLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_klass_lessons', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('klass_id');
            $table->unsignedBigInteger('lesson_id');
            $table->timestamps();

//            index
            $table->index('day_id', 'day_index');
            $table->index('klass_id', 'klass_index');
            $table->index('lesson_id', 'lesson_index');

//            foreign
            $table->foreign('day_id', 'day_foreign')->on('days')->references('id');
            $table->foreign('klass_id', 'klass_foreign')->on('klasses')->references('id');
            $table->foreign('lesson_id', 'lesson_foreign')->on('lessons')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_klass_lessons');
    }
}
