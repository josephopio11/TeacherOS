@extends('layouts.app')

@section('content')

{{-- Somwthing added by Joseph Opio --}}

<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title d-flex align-items-center flex-wrap mb-30">
                <h2 class="mr-40">Classes</h2>
                {{-- <a href="{{ route('class.create') }}" class="main-btn primary-btn btn-hover btn-sm">
                    <i class="lni lni-plus mr-5"></i> Add new class</a> --}}
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
                            Classes
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
                            <form action="{{ route('class.store') }}" method="POST">
                                @csrf
                                <!-- input style start -->
                                <div class="card-style mb-30">
                                    <div class="input-style-1">
                                        <label>Class Name</label>
                                        <input type="number" placeholder="Class Name" name="name">
                                    </div>

                                    <div class="input-style-1">
                                        <label>Description</label>
                                        <textarea placeholder="Description" rows="5" name="description"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button class="main-btn primary-btn btn-hover">
                                            Add class
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

                            <h3>Entered Classes</h3>
                            <br>

                            @include('classes.list')

                        </div>

                    </div>
                </div>
                <!-- end col -->
            </div>

        </div>
    </div>
</div>
<script>
    $('.delete-class').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection