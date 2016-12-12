@extends('layouts.webpages_layout')

@section('title')
  {{ trans('translang.menu_passport.khmer_passport') }}
@endsection

@section('body')

<div class="ui large text {{ trans('translang.font_menu') }}">
  <i class="write square icon"></i>
  {{ trans('translang.menu_passport.khmer_passport') }}
  <div class="ui divider"></div>
</div>
    
<div class="ui content​ {{ trans('translang.font_menu') }}">
	<div class="ui large text">សេចក្តីណែនាំក្នុងការសុំបែបបទសំរាប់ធ្វើលិខិតឆ្លងដែន</div>
  
  <p>តំរូវការឯកសារ អត្តសញញាណបត្ត និង សៀវភៅគ្រួសារ</p>

</div>

<div class="ui content {{ trans('translang.font_menu') }}">
	
	<table class="ui very basic celled unstackable single line table">
  <thead class = "ui center aligned">
    <tr><th>Header</th>
    <th>Header</th>
    <th>Header</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>Cell</td>
      <td>
        <div class="ui ribbon label">First</div>
      </td>
      <td>Cell</td>
    </tr>
    <tr>
      <td>Cell</td>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr>
      <td>Cell</td>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
  </tbody>
  <tfoot>
    <tr><th colspan="3">
      <div class="ui left mini floated pagination menu">
        <a class="icon item">
          <i class="left chevron icon"></i>
        </a>
        <a class="item">1</a>
        <a class="item">2</a>
        <a class="item">3</a>
        <a class="item">4</a>
        <a class="icon item">
          <i class="right chevron icon"></i>
        </a>
      </div>
    </th>
  </tr></tfoot>
</table>

</div>
<div class="ui hidden divider"></div>

<div class="ui content {{ trans('translang.font_menu') }}">
	<table class="ui single line basic celled unstackable table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Registration Date</th>
      <th>E-mail address</th>
      <th>Premium Plan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>John Lilki</td>
      <td>September 14, 2013</td>
      <td>jhlilk22@yahoo.com</td>
      <td>No</td>
    </tr>
    <tr>
      <td>Jamie Harington</td>
      <td>January 11, 2014</td>
      <td>jamieharingonton@yahoo.com</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>Jill Lewis</td>
      <td>May 11, 2014</td>
      <td>jilsewris22@yahoo.com</td>
      <td>Yes</td>
    </tr>
  </tbody>
</table>

</div>
@endsection
