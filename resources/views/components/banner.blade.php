<div class="swiper mySwiper placeholder-glow">
  <div class="swiper-wrapper" role="button">
    @foreach ($banners as $banner)
      <div class="swiper-slide m-auto">
        <img src="{{ asset($banner['imageUrl']) }}" height="2000" class="img-fluid img-ads placeholder" alt="...">
      </div>
    @endforeach
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
