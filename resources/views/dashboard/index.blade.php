@extends('layouts.app')
@section('content')
 <!-- Main Content -->
 <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <a href="/profile" style="text-decoration: none">
            <div class="card-wrap">
              <div class="card-header">
                <h4>Profil</h4>
              </div>
              <div class="card-body">
                {{ auth()->user()->name }}
              </div>
            </div>
          </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Quisioner</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>

            <a href="/responden" style="text-decoration: none">
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Responden</h4>
                </div>
                <div class="card-body">
                  {{ $responden }}
                </div>
              </div>
            </a>
     
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Statistik</h4>
            </div>
            <div class="card-body">
              {!! $asw->container() !!}
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Responden</h4>
            </div>
            <div class="card-body">
                {!! $chart->container() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@push('js')
<script src="{{ $asw->cdn() }}"></script>
<script src="{{ $chart->cdn() }}"></script>
{{ $asw->script() }}
{{ $chart->script() }}
    <script type="text/javascript">
    $(document).ready(function() {
    });
    </script>
@endpush