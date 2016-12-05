@extends('layouts.webpages_layout')
@section('title')
  {{ trans('translang.brand_name') }}
@endsection

@section('body')

@include('webpages.carousel_forms.carousel_image')

<div class="ui container">
  
  <div class="row">
    <div class="sixteen wide column">
      
        <p class="ui large text {{ trans('translang.font_menu') }}">
          {{ trans('translang.welcome') }}
          <div class="ui fitted divider"></div>
        </p>
        
        <div class="ui content​ {{ trans('translang.font_menu') }}">
          
          <p>Description of the welcome page</p>
          
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa strong. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede link mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
          </p>

          <p>
            
            PERMISSION TERMS

      YOU GRANT TO NYX COSMETICS AND ITS PARENT, AFFILIATES AND OR RELATED ENTITIES (COLLECTIVELY "NYX") THE RIGHT TO USE YOUR SOCIAL MEDIA HANDLE, MONIKER, NAME AND/OR YOUR PHOTOGRAPHS(S), UPLOAD, VIDEO, COMMENT, TESTIMONIAL, LIKENESS AND OTHER SUBMISSIONS IN ADDITION TO THOSE YOU HAVE TAGGED WITH #NYX OR A NYX-CAMPAIGN HASHTAG ("YOUR POST") IN PERPETUITY AND FOR ANY BRAND MARKETING, ADVERTISING AND PROMOTIONAL PURPOSES, INCLUDING BUT NOT LIMITED TO ON NYX COSMETICS.COM, IN SOCIAL MEDIA, ON THIRD PARTY RETAIL SITES FEATURING NYX, PRINT MATERIALS, IN-STORE OR DIGITAL ADVERTISING. NYX MAY USE, REPRODUCE, DISTRIBUTE, COMBINE YOUR POST WITH OTHER MATERIALS, ALTER AND/OR EDIT IT IN ANY MANNER IN ITS SOLE DISCRETION. YOU HEREBY REPRESENT AND WARRANT THAT (I) YOU OWN ALL RIGHTS IN AND TO YOUR POSTS, (II) YOU HAVE PERMISSION FROM ANY PERSON(S) APPEARING IN YOUR POST TO GRANT THE RIGHTS HEREIN, (III) YOU ARE NOT A MINOR, (IV) NYX USE OF YOUR POST WILL NOT VIOLATE THE RIGHTS OF ANY THIRD PARTY OR ANY LAW AND, (V) IF YOUR POST CONTAINS A TESTIMONIAL YOU FURTHER AGREE THAT IT IS A TRUE AND ACCURATE EXPRESSION OF YOUR HONEST BELIEF BASED ON USE OF NYX PRODUCTS AND THAT YOU HAVE DISCLOSED RECEIPT OF ANY FREE PRODUCT OR INCENTIVES IN EXCHANGE FOR PROVIDING YOUR POST.
      YOU HEREBY RELEASE, DISCHARGE AND AGREE TO HOLD NYX AND ANY PERSON ACTING ON NYX COSMETICS' BEHALF HARMLESS FROM ANY LIABILITY RELATED IN ANY WAY WITH THE USE OF YOUR POST.

          </p>

        </div>    
    </div>
  </div>

  <div class="row">
    <div class="sixteen wide column">
        
      
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

</div>

{!! $form['modal'] !!}
@endsection
