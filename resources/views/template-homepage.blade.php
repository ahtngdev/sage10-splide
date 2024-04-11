{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  @dump(get_field('sections'))
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
