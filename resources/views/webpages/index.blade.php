@extends('layouts.webpages_layout')
@section('title')
  {{ trans('translang.brand_name') }}
@endsection

@section('slide_box')
  @include('webpages.carousel_forms.carousel_image')
@endsection

@section('body')

  @include('webpages.index_sections.intl_tour')

  <div class="ui hidden divider"></div>
       
  @include('webpages.index_sections.domestic_tour')

  <div class="ui hidden divider"></div>
  
  @include('webpages.index_sections.air_ticket')

  <div class="ui hidden divider"></div>
  
  @include('webpages.index_sections.client')

  <div class="ui hidden divider"></div>
 
  @include('webpages.index_sections.about_us')
      
 
@endsection
