@extends('layouts/main')

@include('partials/navbar')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail {{ $title }}</h1>
      </div>



      <div class="row">
        <div class="col-md-4">
          <div class="bg-secondary rounded p-3">
            <div class="text-start fs-5">Simpanan Wajib</div>
            <div class="row d-flex">
            <div class="col text-start fs-5">@currency($total_simwa)</div>
            <div class="col text-end float-right"><img src="img/simpanan.png" class="res-image" alt=""></div>
            </div>
          </div>
        </div>
      </div>

  






    
   


    @endsection