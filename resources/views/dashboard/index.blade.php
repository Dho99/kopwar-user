@extends('layouts/main')

@include('partials/navbar')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>


      <div class="row g-3 text-light">

        <div class="col-lg-4">
          <div class="bg-success p-4 rounded">
            <div class="fw-semibold fs-4">Pinjaman</div>
              <div class="fs-4">
                @currency($pinjaman)
              </div>
            </div>
              <div class="mt-2"></div>
        </div>

        <div class="col-lg-4">
            <div class="bg-warning p-4 rounded">
              <div class="fw-semibold fs-4">Angsuran</div>
              <div class="fs-4">
                  @currency($total_piutang)
              </div>
            </div>
              <div class="mt-2"></div>
          </div>
        
        <div class="col-lg-4">
          <div class="bg-warning p-4 rounded">
            <div class="fw-semibold fs-4">Simpanan</div>
              <div class="fs-4">
                  @currency($total_simpanan)
              </div>
            </div>
              <div class="mt-2"></div>
        </div>

      </div>
      
    
    </div>






    
   


    @endsection