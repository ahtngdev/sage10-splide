<section class="slider -wrapper" data-slider>
  <div class="slider__splide splide" aria-label="{{ __('Slider', 'sage') }}">
    <div class="splide__track">
      <ul class="splide__list">
        @foreach ($data as $id)
          <x-post-card class="slider__slide splide__slide" :id="$id"/>
        @endforeach
      </ul>
    </div>
  </div>
</section>