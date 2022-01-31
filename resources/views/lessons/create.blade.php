@extends('layouts.app')

@section('content')

<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-9">
            <div class="title d-flex align-items-center flex-wrap mb-30">
                <h2 class="mr-40">Make an Observations</h2>
            </div>
        </div>
        <!-- end col -->
        <div class="col-md-3">
            <div class="breadcrumb-wrapper mb-30">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#0">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Make an Observations
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

<form action="{{ route('lesson.store') }}" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="card-style mb-30">
                <h6 class="mb-25">Teacher Details</h6>
                <div class="row">
                    <div class="col-12">
                        <div class="select-style-1">
                            <label>Teacher's Name</label>
                            <div class="select-position">
                                <select name="teachers_id">
                                    <option value="">Select Teacher</option>
                                    @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-6">
                        <div class="select-style-1">
                            <label>Class Observed</label>
                            <div class="select-position">
                                <select name="student_classes_id">
                                    <option value="">Select Class</option>
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">Year {{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-6">
                        <div class="select-style-1">
                            <label>Stream</label>
                            <div class="select-position">
                                <select name="stream">
                                    <option value="">None</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>

                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-style mb-30">
                <h6 class="mb-25">Lesson Details</h6>
                <div class="row">
                    <div class="col-12">
                        <div class="select-style-1">
                            <label>Subject</label>
                            <div class="select-position">
                                <select name="subjects_id">
                                    <option value="">Select Class</option>
                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Topic</label>
                            <input type="text" placeholder="Enter the topic" name="topic">
                        </div>
                    </div>
                    {{-- end of topic --}}
                </div>
                <!-- end row -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <div class="row">
        <div class="card-style mb-30">
            <h6 class="mb-25">Lesson Observation</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="select-style-1">
                        <label>1. Level of organization of schemes of work</label>
                        <div class="select-position">
                            <select name="scheme">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>2. Prepared course outlines with well-listed learning objectives</label>
                        <div class="select-position">
                            <select name="course_outline">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>3. Learning objectives communicated at the start of the lesson</label>
                        <div class="select-position">
                            <select name learning objectives>
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>4. Teacher's knowledge of the subject</label>
                        <div class="select-position">
                            <select name="knowledge">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>5. Knowledge made relevant and interesting to learners</label>
                        <div class="select-position">
                            <select name="relevant">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>6. Teacher exuding confidence in learners via physical outlook: dress code/
                            manners</label>
                        <div class="select-position">
                            <select name="dressing">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>7. Teacher issues assignments</label>
                        <div class="select-position">
                            <select name="assignments">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>8. Organization of Students’ notes</label>
                        <div class="select-position">
                            <select name="notes">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="select-style-1">
                        <label>9. Teacher’s ability to control class</label>
                        <div class="select-position">
                            <select name="class_control">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>10. Evidence of constant evaluations (tests and cats) to learners</label>
                        <div class="select-position">
                            <select name="evaluation">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>11. Evidence of issuance of feedback to learners</label>
                        <div class="select-position">
                            <select name="feedback">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>12. Students were praised regularly for their good effort and achievement</label>
                        <div class="select-position">
                            <select name="praised">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>13. Prompt action is taken to address poor behaviour</label>
                        <div class="select-position">
                            <select name="poor_bahaviour">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>14. Learner engagement throughout the lesson</label>
                        <div class="select-position">
                            <select name="learner_engagement">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>15. Time well utilized throughout the lesson</label>
                        <div class="select-position">
                            <select name="time_utilisation">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>16. The quantity of written work/notes meeting the demands of CIAE</label>
                        <div class="select-position">
                            <select name="caie_demands">
                                <option value="">Choose an answer</option>
                                <option value="1">Below Average</option>
                                <option value="2">Satisfactory</option>
                                <option value="3">Good</option>
                                <option value="4">Very Good</option>
                                <option value="5">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
                <!-- end col -->

                <div class="col-12">
                    <div class="input-style-1">
                        <label>Comment</label>
                        <textarea placeholder="Type here..." rows="5" class="bg-transparent" name="comment"></textarea>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                    <button class="main-btn primary-btn btn-hover">
                        Submit Form
                    </button>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</form>

@endsection