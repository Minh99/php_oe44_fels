@extends('layouts.theme')
@section('content')
<div class="pcoded-content">
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-8">
          <div class="page-header-title">
            <h5 class="m-b-10 title-main">@lang('dashboard')</h5>
            <p class="m-b-0">@lang('welcome')</p>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
              <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">@lang('dashboard')</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Page-header end -->
  <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
      <div class="page-wrapper">
        <input id="select-topic-month" type="month">
        <div class="row">
          <div id="donut-topic-month" class="col-6"></div>
          <div id="donut-topic-year" class="col-6"></div>
        </div>
        <div id="linechart" class="m-5 w-70"></div>
        <div id="bar-course-month" class="m-5 w-70"></div>
      </div>
    </div>
  </div>
</div>
@endsection
