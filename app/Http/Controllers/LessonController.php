<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::count();
        $lessons = Lesson::with('user', 'teacher', 'studentClass')->paginate(20);
        $latest  = Lesson::latest()->with('teacher', 'user')->first();
        

        // dd($latest);

        return view('lessons.index', compact('lessons', 'latest', 'users'));
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
        $request['users_id'] = auth()->user()->id;

        // dd($request);

        $validated = $request->validate([

            'student_classes_id'  => 'required',
            'subjects_id'         => 'required',
            'teachers_id'         => 'required',
            'users_id'            => 'required',
            'topic'               => 'required',
            'stream'              => 'required',
            'scheme'              => 'required',
            'course_outline'      => 'required',
            'learning_objectives' => 'required',
            'knowledge'           => 'required',
            'relevant'            => 'required',
            'dressing'            => 'required',
            'assignments'         => 'required',
            'notes'               => 'required',
            'class_control'       => 'required',
            'evaluation'          => 'required',
            'feedback'            => 'required',
            'praised'             => 'required',
            'poor_behaviour'      => 'required',
            'learner_engagement'  => 'required',
            'time_utilisation'    => 'required',
            'caie_demands'        => 'required',
            'comment'             => 'required',

        ]);
        // dd($validated);

        Lesson::create($validated);

        return redirect('lesson')->with(
            'message', 'Lesson observation created successsfully'
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
        $sum = $lesson->scheme +
                $lesson->course_outline +
                $lesson->learning_objectives +
                $lesson->knowledge +
                $lesson->relevant +
                $lesson->dressing +
                $lesson->assignments +
                $lesson->notes +
                $lesson->class_control +
                $lesson->evaluation +
                $lesson->feedback +
                $lesson->praised +
                $lesson->poor_behaviour +
                $lesson->learner_engagement +
                $lesson->time_utilisation +
                $lesson->caie_demands;
        $percentage = $sum/0.8;

        return view('lessons.show', ['lesson' => $lesson, 'sum' => $sum, 'percentage'=>$percentage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        return "Plan to edit things later";
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

    public function print($id)
    {
        $lesson = Lesson::findOrFail($id);

        $sum = $lesson->scheme +
                $lesson->course_outline +
                $lesson->learning_objectives +
                $lesson->knowledge +
                $lesson->relevant +
                $lesson->dressing +
                $lesson->assignments +
                $lesson->notes +
                $lesson->class_control +
                $lesson->evaluation +
                $lesson->feedback +
                $lesson->praised +
                $lesson->poor_behaviour +
                $lesson->learner_engagement +
                $lesson->time_utilisation +
                $lesson->caie_demands;
        $percentage = $sum/0.8;

        return view('lessons.print', ['lesson' => $lesson, 'sum' => $sum, 'percentage'=>$percentage]);
    }

    public function download($id)
    {
        #
    }

}
