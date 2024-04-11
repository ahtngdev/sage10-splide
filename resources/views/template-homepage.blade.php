{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeWhen($sections, 'partials.flexible-sections', ['sections' => $sections])
  @endwhile
@endsection
