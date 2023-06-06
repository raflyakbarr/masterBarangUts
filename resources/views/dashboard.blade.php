@extends('layouts.app')

@section('title', 'Home')

@section('contents')
  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Biodata</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <h1>
                        Hallo!
                    </h1>
                    <h1>
                        Nama Saya Rafly Akbar Rafsanjani
                    <h1>
                    <br>
                    <h5>
                        Saya adalah mahasiswa Institut Teknologi Telkom Surabaya.
                    </h5>
                </div>
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <img src="{{Vite::asset('resources/images/rafly.png')}}" width="100%" style="border-radius: 10px">
                </div>
            </div>
          <div class="chart-area">
            <canvas id="myAreaChart">
            </canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
