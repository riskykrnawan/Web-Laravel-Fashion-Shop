@foreach ($items as $item)        
  <div class="col-md-2 col-6 mt-3 mx-0">
    <div class="card placeholder-glow border-1 border-light shadow-sm" role="button" onclick="redirectTo('/products/show/{{ $item->id }}')">
      <img src="{{ $item->photo }}" height="200px" class="card-img-top placeholder" alt="...">
      <div class="card-body p-2 placeholder-glow">
        <p class="card-title placeholder">{{ mb_strimwidth($item->name, 0, 56, "...") }}</p>
        <div>
          <p class="placeholder"><i class="bi bi-star-fill text-warning float-start placeholder"></i>{{ $item->rating }}</p>
          @if ( !Auth::user() )
            <i class="bi bi-heart fs-5 me-1 float-end placeholder" onclick="wishlistAlertFailed()"></i>
          @else
            <i class="bi bi-heart fs-5 me-1 float-end placeholder" onclick="wishlistAlertFailed()"></i>
          @endif
        </div>
        <p class="card-price mb-1 placeholder"> <span class="">Rp</span>{{ number_format($item->price, 2, ',', '.') }}</p>
        <p class="text-secondary card-sold placeholder">
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