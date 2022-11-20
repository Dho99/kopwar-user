@extends('layouts/main')

@include('partials/navbar')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail {{ $title }}</h1>
      </div>


    
                <div class="col-sm-2 text-end">@currency($pinjam)</div>





    
   


    @endsection