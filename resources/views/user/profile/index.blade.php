@extends('user.layout')
@section('content.user')
<main class="container mt-5">
  <div class="row">
    <div class="col-md-12 mt-2 m-auto text-center">
      <img src="{{ Auth::user()->photo }}" alt="" width="200px" class="rounded-circle img-thumbnail border-primary">
      <h3 class="h3-responsive">{{ '@' . Auth::user()->username }}</h3>
      <p class="fs-4 mt-2">{{ Auth::user()->name }}</p>
    </div>
  </div>

  <div class="container text-justify pt-5 mb-5">
    <h2 class="text-uppercase fs-5 text-secondary">Purchased Products</h2>
    <hr width="70px">
    <div class="row justify-content-sm-center">
      @foreach ($orders as $order)        
        <div class="col-md-2 col-6 mt-3 mx-0" aria-hidden="true">
          <div class="card border-1 border-light shadow-sm position-relative" role="button" onclick="redirectTo('/products/show/{{ $order->item->id }}')">
            <img src="{{ $order->item->photo }}" height="200px" class="card-img-top placeholder" alt="...">
            <div class="card-body p-2 placeholder-wave">
              <p class="card-title placeholder">{{ mb_strimwidth($order->item->name, 0, 56, "...") }}</p>
              <div class="">
                <i class="bi bi-star-fill text-warning float-start placeholder me-2"></i><p class="placeholder">{{ $order->item->rating }}</p>
              </div>
              <p class="card-price mb-1 placeholder placeholder-lg w-75"> <span class="">Rp</span>{{ number_format($order->item->price, 2, ',', '.') }}</p>
            </div>
          </div>  
        </div>
      @endforeach
    </div>
  </div>
</main>
@endsection