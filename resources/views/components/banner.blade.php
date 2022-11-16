<div class="swiper mySwiper placeholder-glow">
  <div class="swiper-wrapper" role="button">
    @foreach ($banners as $banner)
      <div class="swiper-slide m-auto placeholder" aria-hidden="false">
        <img src="{{ asset($banner['imageUrl']) }}" class="img-fluid img-ads h-100" alt="..." loading="preload">
      </div>
    @endforeach
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
