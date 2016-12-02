@extends('layouts.webpages_layout')

@section('title')
  Khmer Passport
@endsection

@section('body')
  


<div class="ui container">
  <div class="ui one centered column grid">
    
      <div class="row">
        <div class="sixteen wide column">
          
          <div class="ui basic segment">
            <h3 class="ui dividing {{ trans('translang.font_menu') }}">
            <i class="write square icon"></i>{{ trans('translang.khmer_passport') }}
            <div class="ui fitted divider"></div>
          </h3>
            
            <div class="ui content​ {{ trans('translang.font_menu') }}">
              
              <p>តំរូវការឯកសារ អត្តសញញាណបត្ត និង សៀវភៅគ្រួសារ</p>

            </div>

          </div>        
          
        </div>
      </div>

  </div>
</div>


@endsection
