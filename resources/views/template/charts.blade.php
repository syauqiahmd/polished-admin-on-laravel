@extends('layouts.master')
@section('main-content')
<div class="col-lg-10 col-md-9 pt-4 pb-5 mb-5">
  <div class="row pt-2 pl-3 mb-4">
    <div class="col-12">
      <h3>Charts</h3>
      <h5>These charts are using <a href="http://www.chartjs.org/" target="_blank"> Chart.js</a></h5>
    </div>
  </div>

  <div class="row pt-2 pl-3">


    <div class="col-lg-6 mb-2">
      <div class="card shadow-sm ">
        <div class="card-header bg-primary text-light">
          <h6>Bar chart</h6>
        </div>
        <div class="card-body">
          <canvas id="chartjs-bar"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-2">
      <div class="card shadow-sm ">
        <div class="card-header bg-primary text-light">
          <h6>Line chart</h6>
        </div>
        <div class="card-body">
          <canvas id="chartjs-line"></canvas>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-2">
      <div class="card shadow-sm ">
        <div class="card-header bg-white text-indigo">
          <h6>Area chart</h6>
        </div>
        <div class="card-body">
          <canvas id="chartjs-line-area"></canvas>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-2">
      <div class="card shadow-sm ">
        <div class="card-header bg-white text-indigo">
          <h6>Doughnut chart</h6>
        </div>
        <div class="card-body">
          <canvas id="chartjs-doughnut"></canvas>
        </div>
      </div>
    </div>


  </div>


</div>
@endsection
