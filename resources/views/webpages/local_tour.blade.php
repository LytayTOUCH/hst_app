@extends('layouts.webpages_layout')

@section('title')
  {{ trans('translang.menu_tour.domestic_tour') }}
@endsection

@section('body')

<div class="ui large text {{ trans('translang.font_menu') }}">
  <i class="map icon"></i> {{ trans('translang.menu_tour.domestic_tour') }}
  <div class="ui divider"></div>
</div>

<div class="row">
  <div class="sixteen wide column">


  <h1>Local Tour Page!</h1>
  <h4>Test broswerSync!</h4>
  <h4>Checkup with browserSync !</h4>
  {{ trans('translang.welcome') }}

  <button class="ui button">
    Follow
  </button>

<p>
  click me
</p>


<div id="app">

</div>

  </div>
</div>

@endsection
