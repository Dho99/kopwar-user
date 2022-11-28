@extends('layouts/main')

@include('partials/navbar')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail {{ $title }}</h1>
      </div>



      {{-- <div class="row">
        <div class="col-md-4">
          <div class="bg-secondary rounded p-3">
            <div class="text-start fs-5">Simpanan Wajib</div>
            <div class="row d-flex">
            <div class="col text-start fs-5">@currency($total_simwa)</div>
            <div class="col text-end float-right"><img src="img/simpanan.png" class="res-image" alt=""></div>
            </div>
          </div>
        </div>
      </div> --}}
<div class="row mb-3 g-3">

      <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary p-3 text-light">
            <div class="card-block">
                <div class="row align-items-end">
                  <div class="col-8">
                    <h6 class="fs-6 m-b-0">Wajib</h6>
                    <div class="fs-5">@currency($total_simwa)</div>
                    
                    </div>
                    <div class="col-4 text-right">
                      <img src="img/saving.png" class="res-image" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary p-3 text-light">
            <div class="card-block">
                <div class="row align-items-end">
                  <div class="col-8">
                    <h6 class="fs-6 m-b-0">Pokok</h6>
                    <div class="fs-5">@currency($total_simpok)</div>
                    
                    </div>
                    <div class="col-4 text-right">
                      <img src="img/safe-box.png" class="res-image" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary p-3 text-light">
            <div class="card-block">
                <div class="row align-items-end">
                  <div class="col-8">
                    <h6 class="fs-6 m-b-0">Hari Raya</h6>
                    <div class="fs-5">@currency($total_shr)</div>
                    
                    </div>
                    <div class="col-4 text-right">
                      <img src="img/calendar.png" class="res-image" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary p-3 text-light">
            <div class="card-block">
                <div class="row align-items-end">
                  <div class="col-8">
                    <h6 class="fs-6 m-b-0">Wisata</h6>
                    <div class="fs-5">@currency($total_wisata)</div>
                    
                    </div>
                    <div class="col-4 text-right">
                      <img src="img/tour.png" class="res-image" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>

<div class="row mb-3 g-3">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary p-3 text-light">
            <div class="card-block">
                <div class="row align-items-end">
                  <div class="col-8">
                    <h6 class="fs-6 m-b-0">Umroh</h6>
                    <div class="fs-5">@currency($total_umroh)</div>
                    
                    </div>
                    <div class="col-4 text-right">
                      <img src="img/umroh.png" class="res-image" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>
  
</div>

    



  






    
   


    @endsection