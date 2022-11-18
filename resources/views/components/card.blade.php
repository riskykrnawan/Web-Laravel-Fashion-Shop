@foreach ($items as $item)        
  <div class="col-md-2 col-6 mt-3 mx-0" aria-hidden="true">
    <div class="card border-1 border-light shadow-sm position-relative" role="button" onclick="redirectTo('/products/show/{{ $item->id }}')">
      <img src="{{ $item->photo }}" height="200px" class="card-img-top placeholder" alt="...">
      <div class="card-body p-2 placeholder-wave">
        <p class="card-title placeholder">{{ mb_strimwidth($item->name, 0, 56, "...") }}</p>
        <div class="">
          <i class="bi bi-star-fill text-warning float-start placeholder me-2"></i><p class="placeholder">{{ $item->rating }}</p>
        </div>
        {{-- @if ( !Auth::user() ) --}}
          {{-- <i class="bi bi-heart fs-5 me-1 float-end front placeholder " onclick="wishlistAlertFailed()"></i>
        @else
          <i class="bi bi-heart fs-5 me-1 float-end front placeholder " onclick="wishlistAlertFailed()"></i>
        @endif --}}
        <p class="card-price mb-1 placeholder placeholder-lg w-75"> <span class="">Rp</span>{{ number_format($item->price, 2, ',', '.') }}</p>
        <p class="text-secondary card-sold placeholder placeholder-xs w-75 ">
          @if ($item->sold > 20000)20.000+
          @elseif ($item->sold > 10000)10.000+
          @elseif ($item->sold > 5000)5.000+
          @elseif ($item->sold > 2000)2.000+
          @elseif ($item->sold > 1000)1.000+
          @else {{ $item->sold }}
          @endif
          Total Terjual
        </p>
      </div>
    </div>  
  </div>
@endforeach
{{-- @if ($items->hasPages())
  <div class="m-2">
    <div class="card-footer">
      {{ $items->links() }}
    </div>
  </div>
@endif --}}