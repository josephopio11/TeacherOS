<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_classes_id');
            $table->unsignedBigInteger('subjects_id');
            $table->unsignedBigInteger('teachers_id');
            $table->unsignedBigInteger('users_id');
            $table->string('topic')->nullable();
            $table->string('stream')->nullable();
            $table->integer('scheme');
            $table->integer('course_outline');
            $table->integer('learning_objectives');
            $table->integer('knowledge');
            $table->integer('relevant');
            $table->integer('dressing');
            $table->integer('assignments');
            $table->integer('notes');
            $table->integer('class_control');
            $table->integer('evaluation');
            $table->integer('feedback');
            $table->integer('praised');
            $table->integer('poor_behaviour');
            $table->integer('learner_engagement');
            $table->integer('time_utilisation');
            $table->integer('caie_demands');
            $table->text('comment');

            $table->timestamps();

            $table->foreign('student_classes_id')->references('id')->on('student_classes')->onDelete('cascade');
            $table->foreign('subjects_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('teachers_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
