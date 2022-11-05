@extends('layouts.global')
@section('content_home')
<div class="mt-3 container text-justify py-0">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-secondary" href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Products</li>
    </ol>
  </nav>
  
  <h2 class="text-uppercase fs-5 text-secondary">Our Products</h2>
  <hr width="70px">
  
  <div class="row justify-content-sm-center mb-5">
    @include('components.card')
  </div>
</div>
@endsection