@foreach ($items as $item)        
  <div class="col-md-2 col-6 mt-3 mx-0">
    <div class="card placeholder-glow" role="button">
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
        <p class="text-secondary card-sold placeholder">{{ $item->sold }}+ Total Terjual</p>
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