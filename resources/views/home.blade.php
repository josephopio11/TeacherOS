@extends('layouts.app')

@section('content')
<!-- ========== title-wrapper start ========== -->
<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title mb-30">
                <h2>{{ __('Dashboard') }}</h2>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>



<div class="row">
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30">
            <div class="d-flex align-items-center">
                <div class="icon purple">
                    <i class="lni lni-smile"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Teachers Observed</h6>
                    <h3 class="text-bold mb-10">{{ $num_teachers }}</h3>
                </div>
            </div>
            <div class="progress bg-purple-100">
                <div class="progress-bar purple-bg" role="progressbar" style="width: {{ $perc_teachers ? $perc_teachers : "None" }}%"
                    aria-valuenow="{{ $perc_teachers ? $perc_teachers : "None" }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30">
            <div class="d-flex align-items-center">
                <div class="icon success">
                    <i class="lni lni-users"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Subjects Recorded</h6>
                    <h3 class="text-bold mb-10">{{ $num_subjects ? $num_subjects : "None" }}</h3>
                </div>
            </div>

            <div class="progress bg-success-100">
                <div class="progress-bar success-bg" role="progressbar" style="width: 65%" aria-valuenow="65"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30">
            <div class="d-flex align-items-center">
                <div class="icon primary">
                    <i class="lni lni-headphone"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Last Observed</h6>
                    <h3 class="text-bold mb-10">{{ $last_observed->teacher->name }}</h3>
                </div>
            </div>

            <div class="progress bg-primary-100">
                <div class="progress-bar primary-bg" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30">
            <div class="d-flex align-items-center">
                <div class="icon orange">
                    <i class="lni lni-bullhorn"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Observations</h6>
                    <h3 class="text-bold mb-10">{{ $num_lesson_observed ? $num_lesson_observed : 'None' }}</h3>
                </div>
            </div>

            <div class="progress bg-orange-100">
                <div class="progress-bar orange-bg" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
</div>



<!-- ========== title-wrapper end ========== -->

<div class="card-styles">
    <div class="card-style-3 mb-30">
        <div class="card-content">
            <p>
                {{ __('You are logged in!') }}
            </p>
        </div>
    </div>
</div>

<div class="col-lg-7">
    <div class="card-style mb-30">
      <div class="
          title
          d-flex
          flex-wrap
          align-items-center
          justify-content-between
          mb-10
        ">
        <div class="left">
          <h6 class="text-medium mb-2">Market Overview</h6>
          <p class="text-gray text-sm">
            Lorem ipsum dolor sit amet, consectetur
          </p>
        </div>
        <div class="right">
          <div class="select-style-1 mb-2">
            <div class="select-position select-sm">
              <select class="light-bg">
                <option value="">Monthly</option>
                <option value="">Yearly</option>
                <option value="">Weekly</option>
              </select>
            </div>
          </div>
          <!-- end select -->
        </div>
      </div>
      <!-- End Title -->
      <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <div id="legend3">
          <ul class="legend3 d-flex align-items-center mb-30">
            <li>
              <div class="d-flex">
                <span class="bg-color primary-bg"> </span>
                <div class="text">
                  <p class="text-sm text-dark">ETH</p>
                </div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <span class="bg-color info-bg"></span>
                <div class="text">
                  <p class="text-sm text-dark">XMR</p>
                </div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <span class="bg-color purple-bg"></span>
                <div class="text">
                  <p class="text-sm text-dark">LTC</p>
                </div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <span class="bg-color success-bg"></span>
                <div class="text">
                  <p class="text-sm text-dark">BTC</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <canvas id="Chart5" style="width: 465px; height: 356px; display: block;" width="465" height="356" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
  </div>
@endsection