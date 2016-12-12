@extends('layouts.webpages_layout')

@section('title')
  {{ trans('translang.use_condition') }}
@endsection

@section('body')

<div class="ui large text {{ trans('translang.font_menu') }}">
  <i class="file text icon"></i> {{ trans('translang.use_condition') }}
  <div class="ui divider"></div>
</div>


<div class="ui content​ {{ trans('translang.font_menu') }}">
    
  <div class="ui large text"><b>{{ trans('translang.use_of_trademark') }}</b></div>
  <div class="ui hidden divider"></div>
  <div class="ui list">
    <div class="item">
      <p>{{ trans('translang.use_of_trademark_text1') }}</p>
    </div>
    <div class="item">
      <p>{{ trans('translang.use_of_trademark_text2') }}</p>
    </div>
    <div class="item">
      <p>{{ trans('translang.use_of_trademark_text3') }}</p>
    </div>
    <div class="item">
      <p>{{ trans('translang.use_of_trademark_text4') }}</p>
    </div>
  </div>
    
   <div class="ui hidden divider"></div>

  <div class="ui large text"><b>{{ trans('translang.permission_terms') }}</b></div>
  <div class="ui hidden divider"></div>
  <p>{{ trans('translang.permission_terms_text') }}</p>

</div>

@endsection
