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

@include('layouts.notifications')


<form action="{{ route('lesson.update', $lesson->id) }}" method="POST">
@csrf
@method('PATCH')
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
                                    <option value="{{ $teacher->id }}" {{ $teacher->id == $lesson->teachers_id ? "selected" : ""}}>{{ $teacher->name }}</option>
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
                                    <option value="{{ $class->id }}" {{ $class->id == $lesson->student_classes_id ? "selected" : "" }}>Year {{ $class->name }}</option>
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
                                    <option value="A" {{ $lesson->stream == "A" ? "selected" : "" }}>A</option>
                                    <option value="B" {{ $lesson->stream == "B" ? "selected" : "" }}>B</option>

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
                                    <option value="">Select Subject</option>
                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}" {{ $subject->id == $lesson->subjects_id ? "selected" : "" }}>{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Topic</label>
                            <input type="text" placeholder="Edit the topic" name="topic" value="{{ $lesson->topic }}">
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
                                <option value="1" {{ $lesson->scheme == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->scheme == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->scheme == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->scheme == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->scheme == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>2. Prepared course outlines with well-listed learning objectives</label>
                        <div class="select-position">
                            <select name="course_outline">
                                <option value="1" {{ $lesson->course_outline == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->course_outline == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->course_outline == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->course_outline == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->course_outline == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>3. Learning objectives communicated at the start of the lesson</label>
                        <div class="select-position">
                            <select name="learning_objectives">
                                <option value="1" {{ $lesson->learner_engagement == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->learner_engagement == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->learner_engagement == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->learner_engagement == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->learner_engagement == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>4. Teacher's knowledge of the subject</label>
                        <div class="select-position">
                            <select name="knowledge">
                                <option value="1" {{ $lesson->knowledge == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->knowledge == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->knowledge == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->knowledge == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->knowledge == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>5. Knowledge made relevant and interesting to learners</label>
                        <div class="select-position">
                            <select name="relevant">
                                <option value="1" {{ $lesson->relevant == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->relevant == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->relevant == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->relevant == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->relevant == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>6. Teacher exuding confidence in learners via physical outlook: dress code/
                            manners</label>
                        <div class="select-position">
                            <select name="dressing">
                                <option value="1" {{ $lesson->dressing == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->dressing == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->dressing == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->dressing == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->dressing == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>7. Teacher issues assignments</label>
                        <div class="select-position">
                            <select name="assignments">
                                <option value="1" {{ $lesson->assignments == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->assignments == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->assignments == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->assignments == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->assignments == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>8. Organization of Students’ notes</label>
                        <div class="select-position">
                            <select name="notes">
                                <option value="1" {{ $lesson->notes == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->notes == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->notes == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->notes == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->notes == 5 ? "selected" : "" }}>Excellent</option>
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
                                <option value="1" {{ $lesson->class_control == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->class_control == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->class_control == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->class_control == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->class_control == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>10. Evidence of constant evaluations (tests and cats) to learners</label>
                        <div class="select-position">
                            <select name="evaluation">
                                <option value="1" {{ $lesson->evaluation == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->evaluation == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->evaluation == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->evaluation == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->evaluation == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>11. Evidence of issuance of feedback to learners</label>
                        <div class="select-position">
                            <select name="feedback">
                                <option value="1" {{ $lesson->feedback == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->feedback == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->feedback == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->feedback == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->feedback == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>12. Students were praised regularly for their good effort and achievement</label>
                        <div class="select-position">
                            <select name="praised">
                                <option value="1" {{ $lesson->praised == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->praised == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->praised == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->praised == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->praised == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>13. Prompt action is taken to address poor behaviour</label>
                        <div class="select-position">
                            <select name="poor_behaviour">
                                <option value="1" {{ $lesson->poor_behaviour == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->poor_behaviour == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->poor_behaviour == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->poor_behaviour == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->poor_behaviour == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>14. Learner engagement throughout the lesson</label>
                        <div class="select-position">
                            <select name="learner_engagement">
                                <option value="1" {{ $lesson->learner_engagement == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->learner_engagement == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->learner_engagement == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->learner_engagement == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->learner_engagement == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>15. Time well utilized throughout the lesson</label>
                        <div class="select-position">
                            <select name="time_utilisation">
                                <option value="1" {{ $lesson->time_utilisation == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->time_utilisation == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->time_utilisation == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->time_utilisation == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->time_utilisation == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->

                    <div class="select-style-1">
                        <label>16. The quantity of written work/notes meeting the demands of CIAE</label>
                        <div class="select-position">
                            <select name="caie_demands">
                                <option value="1" {{ $lesson->caie_demands == 1 ? "selected" : "" }}>Below Average</option>
                                <option value="2" {{ $lesson->caie_demands == 2 ? "selected" : "" }}>Satisfactory</option>
                                <option value="3" {{ $lesson->caie_demands == 3 ? "selected" : "" }}>Good</option>
                                <option value="4" {{ $lesson->caie_demands == 4 ? "selected" : "" }}>Very Good</option>
                                <option value="5" {{ $lesson->caie_demands == 5 ? "selected" : "" }}>Excellent</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
                <!-- end col -->

                <div class="col-12">
                    <div class="input-style-1">
                        <label>Comment</label>
                        <textarea placeholder="Type here..." rows="5" class="bg-transparent" name="comment" id="editor">{!! $lesson->comment !!}</textarea>
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

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
