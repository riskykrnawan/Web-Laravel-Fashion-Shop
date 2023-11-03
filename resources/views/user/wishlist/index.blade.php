@extends('user.layout')
@section('content.user')
    <main class="container">
        <!-- Breadcrumb Start -->
            <div class="row mt-4">
                <div class="col-12">
                    <nav class="breadcrumb mb-4 py-3 px-3">
                        <a class="breadcrumb-item text-dark" href="#">Home</a>
                        <a class="breadcrumb-item text-dark" href="#">Products</a>
                        <span class="breadcrumb-item active">Wishlist</span>
                    </nav>
                </div>
            </div>
        <!-- Breadcrumb End -->
        <!-- wl Start -->
          <div class="container text-justify mb-5">
            <h2 class="text-uppercase fs-5 text-secondary">Your Wishlist</h2>
            <hr width="70px">
            <div class="row justify-content-sm-center">
            {{-- @php
              sizeof($wishlists);
              exit;
            @endphp --}}
            {{-- @if (sizeof($wishlists)) --}}
              @foreach ($wishlists as $wl)        
                <div class="col-md-2 col-6 mt-3 mx-0" aria-hidden="true">
                  <div class="card border-1 border-light shadow-sm position-relative" role="button" onclick="redirectTo('/products/show/{{ $wl->item->id }}')">
                    <img src="{{ $wl->item->photo }}" height="200px" class="card-img-top placeholder" alt="...">
                    <div class="card-body p-2 placeholder-wave">
                      <p class="placeholder">{{ mb_strimwidth($wl->item->name, 0, 40, "...") }}</p>

                      <div class="">
                        <i class="bi bi-star-fill text-warning float-start placeholder me-2"></i><p class="placeholder">{{ $wl->item->rating }}</p> 
                      </div>

                      <p class="card-price mb-1 placeholder placeholder-lg w-75"> <span class="">Rp</span>{{ number_format($wl->item->price, 2, ',', '.') }}</p>
                      <p class="text-secondary card-sold placeholder placeholder-xs w-75 ">
                        @if ($wl->item->sold > 20000)20.000+
                        @elseif ($wl->item->sold > 10000)10.000+
                        @elseif ($wl->item->sold > 5000)5.000+
                        @elseif ($wl->item->sold > 2000)2.000+
                        @elseif ($wl->item->sold > 1000)1.000+
                        @else {{ $wl->item->sold }}
                        @endif
                        Total Terjual
                      </p>
                    </div>
                    <div class="row text-center">
                      <td>
                      <form action="{{ route('delete', $wl->id) }}" method="post" style="display inline" onsubmit='deleteAlert("/wishlists/delete/{{ $wl->id }}")'>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mb-3">Remove</button>
                      </form>
                      </td>
                    </div>
                  </div>  
                </div>
              @endforeach
            {{-- @endif --}}
              <!-- <div class="w-100 text-end mt-3 mb-3 me-2">
                <a href="/products" class="text-secondary">Lihat selengkapnya...</a>
              </div>
            </div>
          </div> -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </main>
@endsection