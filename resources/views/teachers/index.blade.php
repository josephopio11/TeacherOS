@extends('layouts.app')

@section('content')

{{-- Somwthing added by Joseph Opio --}}

<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title d-flex align-items-center flex-wrap mb-30">
                <h2 class="mr-40">Teachers</h2>
                {{-- <a href="{{ route('teacher.create') }}" class="main-btn primary-btn btn-hover btn-sm">
                    <i class="lni lni-plus mr-5"></i> Add new teacher</a> --}}
            </div>
        </div>
        <!-- end col -->
        <div class="col-md-6">
            <div class="breadcrumb-wrapper mb-30">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#0">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Teachers
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

<div class="card-styles">
    <div class="card-style-3 mb-30">

        <div class="card-content">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="row">
                        <div class="">
                            <form action="{{ route('teacher.store') }}" method="POST">
                                @csrf
                                <!-- input style start -->
                                <div class="card-style mb-30">
                                    <div class="input-style-1">
                                        <label>Teacher Name</label>
                                        <input type="text" placeholder="Teacher Name" name="name">
                                    </div>

                                    <div class="input-style-1">
                                        <label>Date of Birth</label>
                                        <input type="date" placeholder="Date of Birth" name="dob">
                                    </div>

                                    <div class="col-12">
                                        <button class="main-btn primary-btn btn-hover">
                                            Add teacher
                                        </button>
                                    </div>

                                </div>
                                <!-- end card -->

                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-xxl-3 col-lg-4">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">

                            <h3>Entered Teachers</h3>
                            <br>

                            @include('teachers.list')

                        </div>

                    </div>
                </div>
                <!-- end col -->
            </div>

            {{-- <div class="table-wrapper table-responsive">
                <table class="table striped-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>
                                <h6>teacher</h6>
                            </th>
                            <th>
                                <h6>Comment</h6>
                            </th>
                        </tr>
                        <!-- end table row-->
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>
                                <p>{{ $teacher->id }}</p>
                            </td>
                            <td>
                                <p>{{ $teacher->name }}</p>
                            </td>
                            <td>
                                <p>{{ $teacher->description }}</p>
                            </td>
                        </tr>
                        @endforeach
                        <!-- end table row -->
                    </tbody>
                </table>
                <!-- end table -->

                {{ $teachers->links() }}
            </div> --}}

        </div>
    </div>
</div>
<script>
    $('.delete-teacher').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection