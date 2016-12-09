@extends('layouts.webpages_layout')

@section('title')
  {{ trans('translang.menu_tour.international_tour') }}
@endsection

@section('body')

<div class="ui large text {{ trans('translang.font_menu') }}">
  <i class="send outline icon"></i> {{ trans('translang.menu_tour.international_tour') }}
  <div class="ui divider"></div>
</div>

<div class="ui content​ {{ trans('translang.font_menu') }}">


  <h1>International Tours Page!</h1>
  <button class="ui primary button">Follow</button>
  <p>click me</p>
  <div id=""></div>
  <img src="/images/HST-Logo/HSTLogo.svg" title="HongStar Trademark" class="ui tiny image">

      <h1>Home Index Page!</h1>
      <button class="ui primary button">Follow</button>
      <p>click me</p>
      {{ trans('translang.welcome') }}
      <img src="/images/HST-Logo/HSTLogo.svg" title="HongStar Trademark" class="ui tiny image">


      <div id="example">
        <example-component></example-component>
      </div>

      <div id="app_test">
        <button v-on:click="btn_test" class="ui primary button mini">
          VueJS Event
        </button>
        <p>@{{vue_data}}</p>
      </div>
</div>
@endsection
