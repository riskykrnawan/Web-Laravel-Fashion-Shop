@extends('user.layout')
@section('content.user')
@include('components.navbar')
<div class="container">
    <main class="">
        <!-- Breadcrumb Start -->
        <div class="container mt-4">
          <nav class="breadcrumb bg-white py-3 px-3">
            <a class="breadcrumb-item text-dark" href="#">Home</a>
            <a class="breadcrumb-item text-dark" href="#">Products</a>
            <span class="breadcrumb-item active">Wishlist</span>
          </nav>
        </div>
        <!-- Breadcrumb End -->
          <div class="row justify-content-sm-center">
            @include('components.card')
            <div class="w-100 text-end mb-3 me-2">
              <a href="/products" class="text-secondary">Lihat selengkapnya...</a>
            </div>
          </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
        </main>
      </div>
    </div>
@endsection