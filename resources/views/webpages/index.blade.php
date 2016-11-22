@extends('layouts.webpages_layout')
@section('body')
<div class="row">
  <div class="sixteen wide column">
    <p>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa strong. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede link mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
    </p>
    <h1>Home Index Page!</h1>
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

{!! $form['modal'] !!}
@endsection
