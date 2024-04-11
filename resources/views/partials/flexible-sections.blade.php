<section class="flexible-sections">
  @foreach ($sections as $section)
    @includeIf('sections.'.$section['acf_fc_layout'].'', ['data' => $section['data']])
  @endforeach
</section>