<div class="ui secondary top fixed menu" style="background-color: yellow;">
  <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , '/') }}" class="ui icon item">
    <i class="home icon large"></i>
  </a>
    <div class="ui dropdown item">
      <i class="sidebar large icon"></i>
      <div class="{{ trans('translang.font_menu') }}">
        {{ trans('translang.menu_navigator') }}
      </div>
      <i class="dropdown icon"></i>
      <div class="menu {{ trans('translang.font_menu') }}">
        <div class="header">{{ trans('translang.tours') }}</div>
        <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'domestic_tour.html') }}" class="item"><i class="map icon"></i>{{ trans('translang.menu_tour.domestic_tour') }}</a>
        <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'international_tour.html') }}" class="item"><i class="send outline icon"></i>{{ trans('translang.menu_tour.international_tour') }}</a>
        <div class="ui fitted divider"></div>

        <div class="header">{{ trans('translang.ticket') }}</div>
        <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'air_ticket.html') }}" class="item"><i class="plane icon"></i>{{ trans('translang.menu_ticket.air_ticket') }}</a>
        <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'bus_ticket.html') }}" class="item"><i class="bus icon"></i>{{ trans('translang.menu_ticket.bus_ticket') }}</a>
        <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'boat_ticket.html') }}" class="item"><i class="ship icon"></i>{{ trans('translang.menu_ticket.boat_ticket') }}</a>
        <div class="ui fitted divider"></div>

        <div class="header">{{ trans('translang.passport') }}</div>
        <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'international_visa.html') }}" class="item"><i class="share alternate square icon"></i>{{ trans('translang.menu_passport.international_visa') }}</a>
        <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'khmer_visa_renew.html') }}" class="item"><i class="undo icon"></i>{{ trans('translang.menu_passport.khmer_visa_renew') }}</a>
        @if (trans('translang.lang') === 'kh')
          <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'khmer_passport.html') }}" class="item"><i class="write square icon"></i>{{ trans('translang.menu_passport.khmer_passport') }}</a>
        @endif
      </div>
    </div>
    <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'contact_us.html') }}" class="ui icon item" title="{{ trans('translang.contact_us') }}"><i class="call large icon"></i></a>
    <div class="ui inline dropdown item" title="{{ trans('translang.native') }}">
        <div class="ui icon text">
          <a href="#" ><i class="{{ trans('translang.lang') }} flag"></i></a>
        </div>
        <i class="dropdown icon"></i>
        <div class="menu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="item" rel="alternate" title="{{$properties['native']}}" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                <i class="{{$localeCode}} flag"></i>
            </a>
            @endforeach
        </div>
      </div>
      <div class="item"></div>
</div>
