<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $num_teachers = Teacher::count();
        $num_subjects = Subject::count();
        $num_observed = Lesson::distinct()->count('teachers_id');

        $perc_teachers = ($num_observed/$num_teachers)*100;

        // dd($num_teachers);
        
        return view('home', compact('num_teachers', 'perc_teachers', 'num_subjects'));
    }
}