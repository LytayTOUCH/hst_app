@extends('layouts.webpages_layout')

@section('title')
  {{ trans('translang.menu_ticket.boat_ticket') }}
@endsection

@section('body')

<div class="ui large text {{ trans('translang.font_menu') }}">
  <i class="ship icon"></i> {{ trans('translang.menu_ticket.boat_ticket') }}
  <div class="ui divider"></div>
</div>



<h1>Boat Ticket Page!</h1>
<button class="ui primary button">Follow</button>
<p>click me</p>
<div id="app"></div>

@endsection
