@extends('layouts.webpages_layout')

@section('title')
  {{ trans('translang.menu_passport.international_visa') }}
@endsection

@section('body')

<div class="ui large text {{ trans('translang.font_menu') }}">
<i class="share alternate square icon"></i>{{ trans('translang.menu_passport.international_visa') }}
<div class="ui divider"></div>
</div>

<div class="ui content​ {{ trans('translang.font_menu') }}">

  <h3>International VISA Page!</h3>
  <h4>Test broswerSync!</h4>
  <h4>Checkup with browserSync !</h4>
  {{ trans('translang.welcome') }}
  <button class="ui primary button">
    Follow
  </button>

<p>
  click me
</p>


</div>


@endsection
