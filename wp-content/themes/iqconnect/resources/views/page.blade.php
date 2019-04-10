{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @include('partials.hero')
  
  @php $sections = get_field('components') @endphp
  
  @if($sections)
    @foreach ($sections as $section)
      @php ($sectionName = $section['acf_fc_layout']) @endphp

      
    @endforeach
  @endif

@endsection