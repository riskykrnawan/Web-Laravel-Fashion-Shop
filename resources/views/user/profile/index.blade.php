@extends('user.layout')
@section('content.user')
@include('components.navbar')
<main class="container mt-5">
  <div class="row">
    <div class="col-md-12 mt-2 m-auto text-center">
      <img src="https://mdbootstrap.com/images/avatars/img%20(1).jpg" alt="" class="rounded-circle img-thumbnail border-primary">
      <h3 class="h3-responsive">{{ '@' . Auth::user()->username }}</h3>
      <p class="fs-4 mt-2">{{ Auth::user()->name }}</p>
    </div>
  </div>

  <div class="container text-justify pt-5">
    <h2 class="text-uppercase fs-5 text-secondary">Purchased Products</h2>
    <hr width="70px">
    <div class="row justify-content-sm-center">
      @include('components.card')
      <div class="w-100 text-end mt-3 mb-3 me-2">
        <a href="/products" class="text-secondary">Lihat selengkapnya...</a>
      </div>
    </div>
  </div>
</main>
@endsection