@extends('layouts.webpages_layout')

@section('title')
  Bus Ticket
@endsection

@section('body')

@include('webpages.carousel_forms.carousel_image')

<div class="row">
  <div class="sixteen wide column">


  <h1>Bus Ticket Page!</h1>
  <button class="ui primary button">Follow</button>
  <p>click me</p>
  <div id="app"></div>

  </div>
</div>
{!! $form['modal'] !!}
@endsection
