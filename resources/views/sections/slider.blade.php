<section class="slider -wrapper">
  @foreach ($data as $id)
    <x-post-card class="slider__slide" :id="$id"/>
  @endforeach
</section>