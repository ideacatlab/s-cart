@php
$banners = $modelBanner->start()->getBanner()->getData()
@endphp
@if (!empty($banners))
<section class="section swiper-container swiper-slider swiper-slider-1" data-loop="true">
  <div class="swiper-wrapper text-center text-lg-left">
    @foreach ($banners as $key => $banner)
    <div class="swiper-slide swiper-slide-caption context-dark" data-slide-bg="{{ asset($banner->image) }}">
      <div class="swiper-slide-caption section-md text-center">
        <div class="container">
          <a href="{{ sc_route('banner.click',['id' => $banner->id]) }}" target="{{ $banner->target }}">
            <h1 class="swiper-title-1" data-caption-animate="fadeScale" data-caption-delay="100">Cadouri care creează amintiri</h1>
            <p class="biggest text-white-70" data-caption-animate="fadeScale" data-caption-delay="200"></p>
            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300">
               <span class="button button-zachem-tak-delat button-white button-zakaria"> Cumpara Acum </span>
             </div>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination"></div>
  <!-- Swiper Navigation-->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</section>
<!--slider-->
@endif
