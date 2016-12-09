@extends('layouts.webpages_layout')

@section('title')
  {{ trans('translang.menu_ticket.bus_ticket') }}
@endsection

@section('slide_box')
	@include('webpages.carousel_forms.carousel_image')
@endsection

@section('body')

<div class="ui large text {{ trans('translang.font_menu') }}">
  <i class="bus icon"></i> {{ trans('translang.menu_ticket.bus_ticket') }}
  <div class="ui divider"></div>
</div>

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
