@extends('layouts.app')

@section('content')

{{-- Somwthing added by Joseph Opio --}}

<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-9">
            <div class="title d-flex align-items-center flex-wrap mb-30">
                <h2 class="mr-40">Lesson Observations</h2>
                <a href="{{ route('lesson.create') }}" class="main-btn primary-btn btn-hover btn-sm">
                    <i class="lni lni-plus mr-5"></i> New Observation</a>
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
                            Lesson Observations
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


<div class="card-styles">

    <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-cart-full"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Latest</h6>
                    <h3 class="text-bold mb-10">{{ $latest->teacher->name }}</h3>
                    
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon success">
                    <i class="lni lni-dollar"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Observations</h6>
                    <h3 class="text-bold mb-10">{{ $lessons->count() }}</h3>
                    
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon primary">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Total Users</h6>
                    <h3 class="text-bold mb-10">{{ $users }}</h3>
                    
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon orange">
                    <i class="lni lni-user"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Last Assessor</h6>
                    <h3 class="text-bold mb-10">{{ $latest->user->name }}</h3>
                    
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
    </div>
    <div class="card-style-3 mb-30">

        <div class="card-content">

            @include('lessons.list')

        </div>
    </div>
</div>

@endsection