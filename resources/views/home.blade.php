@extends('layouts.global')
@section('content_home')
  <div class="container container-1-light w-100 p-relative mt-4 mb-5">
    <div class="section"></div>
    @if(session('success'))
    <script>
      let div = document.querySelector('.section');
      div.className = 'alert alert-success';
      div.innerHTML = '<b>Yeah! </b>{{session("success")}}';
      setTimeout(() => {
        div.innerHTML= '';
        div.classList.remove('alert', 'alert-danger');
      }, 4000);
    </script>
    @endif
    @if(session('error'))
    <script>
      let div = document.querySelector('.section');
      div.className = 'alert alert-danger';
      div.innerHTML = '<b>Oops! </b>{{session("error")}}';
      setTimeout(() => {
        div.innerHTML= '';
        div.classList.remove('alert', 'alert-danger');
      }, 4000);
        // <div class="alert alert-danger">
        //   <b>Opps!</b> {{session('error')}}
        // </div>
    </script>
    @endif
    @include('components.banner')
  </div>  
  <div>
    @include('components.categories')
  </div>
  <div class="container text-justify pt-5">
    <h2 class="text-uppercase fs-5 text-secondary">Featured Products</h2>
    <hr width="70px">
    <div class="row justify-content-sm-center">
      @include('components.card')
      <div class="w-100 text-end mt-3 mb-3 me-2">
        <a href="/products" class="text-secondary">Lihat selengkapnya...</a>
      </div>
    </div>
  </div>
  <div class="container pt-5">
    <h2 class="text-uppercase fs-5 text-secondary">Special Offer</h2>
    <hr width="70px">
    @include('components.offers')
  </div>
  <a href="#" class="btn btn-warning back-to-top rounded-0 "><i class="fa fa-angle-double-up"></i></a>
@endsection