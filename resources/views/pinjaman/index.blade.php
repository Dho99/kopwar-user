@extends('layouts/main')

@include('partials/navbar')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail {{ $title }}</h1>
      </div>

  <div class="col-xl-3 col-md-6">
          <div class="card bg-secondary p-3 text-light">
              <div class="card-block">
                  <div class="row align-items-end">
                    <div class="col-8">
                      <h6 class="fs-6 m-b-0">Pinjaman</h6>
                      <div class="fs-5">@currency($pinjam)</div>
                      
                      </div>
                      <div class="col-4 text-right">
                        <img src="img/pinjaman.png" class="res-image" alt="">
                      </div>
                  </div>
              </div>
          </div>
  </div>     

    @endsection