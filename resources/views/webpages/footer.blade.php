<div class="ui two column stackable grid container {{ trans('translang.font') }}">
  
  <div class="column">
    <div class="ui vertical segment">
      <div class="ui"><i class="sitemap icon"></i> {{ trans('translang.site_map') }}</div>
      <div class="ui divider"></div>
      <div class="ui three column stackable grid">
        
        <div class="column">
          <div class="ui tiny content">
            <div class="item">
              <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'domestic_tour.html') }}"><i class="map icon"></i>{{ trans('translang.menu_tour.domestic_tour') }}</a>
            </div>
            <div class="item">
              <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'international_tour.html') }}"><i class="send outline icon"></i>{{ trans('translang.menu_tour.international_tour') }}</a>
            </div>
          </div>
        </div>
        
        <div class="column">
          
          <div class="item">
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'air_ticket.html') }}"><i class="plane icon"></i>{{ trans('translang.menu_ticket.air_ticket') }}</a>
          </div>
          <div class="item">
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'bus_ticket.html') }}"><i class="bus icon"></i>{{ trans('translang.menu_ticket.bus_ticket') }}</a>
          </div>
          <div class="item">
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'boat_ticket.html') }}"><i class="ship icon"></i>{{ trans('translang.menu_ticket.boat_ticket') }}</a>
          </div>


        </div>

        <div class="column">
          
          <div class="item">
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'international_visa.html') }}"><i class="share alternate square icon"></i>{{ trans('translang.menu_passport.international_visa') }}</a>
          </div>
          <div class="item">
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'khmer_visa_renew.html') }}"><i class="undo icon"></i>{{ trans('translang.menu_passport.khmer_visa_renew') }}</a>    
          </div>
          <div class="item">
            @if (trans('translang.lang') === 'kh')
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'khmer_passport.html') }}" ><i class="write square icon"></i>{{ trans('translang.menu_passport.khmer_passport') }}</a>
            @endif
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="column">
  
    <div class="ui vertical segment">
      <div class="ui"><i class="text telephone icon"></i> {{ trans('translang.help_support') }}</div>
      <div class="ui divider"></div>
      <div class="ui three column stackable grid">
        
        <div class="column">
          <div class="ui tiny content">
            <div class="item">
              <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'contact_us.html') }}" class="ui icon item" title="{{ trans('translang.contact_us') }}"><i class="call icon"></i>{{ trans('translang.contact_us') }}</a>
            </div>
            <div class="item">
              <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'office_location.html') }}"><i class="marker icon"></i>{{ trans('translang.office_location') }}</a>
            </div>
          </div>
        </div>
        
        <div class="column">
          
          <div class="item">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'air_ticket.html') }}"><i class="plane icon"></i>{{ trans('translang.menu_ticket.air_ticket') }}</a> -->
          </div>
          <div class="item">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'bus_ticket.html') }}"><i class="bus icon"></i>{{ trans('translang.menu_ticket.bus_ticket') }}</a> -->
          </div>
          <div class="item">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'boat_ticket.html') }}"><i class="ship icon"></i>{{ trans('translang.menu_ticket.boat_ticket') }}</a> -->
          </div>


        </div>
        <div class="column">
          
          <div class="item">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'international_visa.html') }}"><i class="share alternate square icon"></i>{{ trans('translang.menu_passport.international_visa') }}</a> -->
          </div>
          <div class="item">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'khmer_visa_renew.html') }}"><i class="undo icon"></i>{{ trans('translang.menu_passport.khmer_visa_renew') }}</a>     -->
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<div class="ui container">
  <div class="ui stackable centered three column grid">
    <div class="five wide column">
      <!-- @include('webpages.facebook_page_plugin.facebook_hongstartravel') -->
    </div>
    <div class="five wide column">
      <!-- @include('webpages.facebook_page_plugin.facebook_hongstarticketing') -->
    </div>
    <div class="five wide column">
      <!-- @include('webpages.facebook_page_plugin.facebook_hongstarpassport') -->
    </div>
  </div>
</div>
<div class="ui fitted divider"></div>

<div class="ui basic segment" style="padding: 0px;">
  <div class="ui container {{ trans('translang.font_menu') }}">
    {{ trans('translang.brand_name') }} &copy <?php echo date('Y'); ?>, {{ trans('translang.all_right') }}
  </div>
</div>
