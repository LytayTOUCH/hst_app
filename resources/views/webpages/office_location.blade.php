@extends('layouts.webpages_layout')
@section('body')

<div class="row">
  <div class="sixteen wide column">
    
    <div class="ui header dividing">
      Office Location Page
    </div>
    
    <div class="ui basic segment">
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.170473163958!2d104.91424400000002!3d11.539626000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950e0954710a5%3A0x2ddb7e612390ca!2sHong+Star+Travel+%26+Tours!5e0!3m2!1sen!2skh!4v1417934544742" width="100%" height="350" frameborder="0" style="border:0"></iframe>

    </div>
    <button class="ui primary button">Follow</button>
    <p>click me</p>
    {{ trans('translang.welcome') }}
    <img src="/images/HST-Logo/HSTLogo.svg" title="HongStar Trademark" class="ui tiny image">

    <div id="example">
      <example-component></example-component>
    </div>

    <div id="app">
      <button v-on:click="btn_test" class="ui primary button mini">
        VueJS Event
      </button>
      <p>@{{vue_data}}</p>
    </div>

  </div>
</div>

<div class="column">1</div>
<div class="column">2</div>
<div class="column">3</div>
<div class="column">4</div>
</div>

@endsection
