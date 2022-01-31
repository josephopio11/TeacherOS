<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\StudentClass;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::with('user', 'teacher', 'studentClass')->paginate(20);
        return view('lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::get();
        $subjects = Subject::get();
        $classes  = StudentClass::get();

        return view('lessons.create', compact('teachers', 'subjects', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'teachers_id'        => 'required',
            'student_classes_id' => 'required',
            'stream'             => 'required',
            'subjects_id'        => 'required',
            'topic'              => 'required',
            'scheme'             => 'required',
            'course_outline'     => 'required',
            'knowledge'          => 'required',
            'relevant'           => 'required',
            'dressing'           => 'required',
            'assignments'        => 'required',
            'notes'              => 'required',
            'class_control'      => 'required',
            'evaluation'         => 'required',
            'feedback'           => 'required',
            'praised'            => 'required',
            'poor_bahaviour'     => 'required',
            'learner_engagement' => 'required',
            'time_utilisation'   => 'required',
            'caie_demands'       => 'required',
            'comment'            => 'required',
        ]);
        // dd($validated);

        Lesson::create($validated);
        
        return redirect('lesson')->with(
            'message','Lesson observation created successsfully'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
