  <div class="ui stackable two column grid {{ trans('translang.font_menu') }}">
    
    <div class="row">
      <div class="ui seven wide column right floated">
        <div class="ui ">
      <div class="ui"><i class="sitemap icon"></i> {{ trans('translang.site_map') }}</div>
      <div class="ui divider"></div>
      <div class="ui three column stackable grid">
        
        <div class="column">
          <div class="ui small list">
              <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'domestic_tour.html') }}" class="item"><i class="map icon"></i> {{ trans('translang.menu_tour.domestic_tour') }}</a>
              <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'international_tour.html') }}" class="item"><i class="send outline icon"></i> {{ trans('translang.menu_tour.international_tour') }}</a>
          </div>
        </div>
        
        <div class="column">

            <div class="ui small list">
              
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'air_ticket.html') }}" class="item"><i class="plane icon"></i> {{ trans('translang.menu_ticket.air_ticket') }}</a>
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'bus_ticket.html') }}" class="item"><i class="bus icon"></i> {{ trans('translang.menu_ticket.bus_ticket') }}</a>
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'boat_ticket.html') }}" class="item"><i class="ship icon"></i> {{ trans('translang.menu_ticket.boat_ticket') }}</a>

            </div>

        </div>

        <div class="column">
          <div class="ui small list">
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'international_visa.html') }}" class="item"><i class="share alternate square icon"></i> {{ trans('translang.menu_passport.international_visa') }}</a>
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'khmer_visa_renew.html') }}" class="item"><i class="undo icon"></i> {{ trans('translang.menu_passport.khmer_visa_renew') }}</a>    
            @if (trans('translang.lang') === 'kh')
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'khmer_passport.html') }}" class="item"><i class="write square icon"></i> {{ trans('translang.menu_passport.khmer_passport') }}</a>
            @endif
          </div>
        </div>

      </div>
    </div>
      </div>

      <div class="ui seven wide column left floated left aligned">
         <div class="ui ">
      <div class="ui"><i class="text telephone icon"></i> {{ trans('translang.help_support') }}</div>
      <div class="ui divider"></div>
      <div class="ui three column stackable grid">
        
        <div class="column">

          <div class="ui small list">
              <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'contact_us.html') }}" class="item"><i class="call icon"></i> {{ trans('translang.contact_us') }}</a>
              <a href="#" class="location_modal item"><i class="marker icon"></i> {{ trans('translang.office_location') }}</a>
          </div>

        </div>
        
        <div class="column">
            <div class="ui small list">
              
              <a target="_blank" href="http://www.facebook.com/hongstartravel" class="item"><i class="facebook square icon"></i> {{trans('translang.social_media')}} </a>

            </div>
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'air_ticket.html') }}"><i class="plane icon"></i>{{ trans('translang.menu_ticket.air_ticket') }}</a> -->
          <div class="item">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'bus_ticket.html') }}"><i class="bus icon"></i>{{ trans('translang.menu_ticket.bus_ticket') }}</a> -->
          </div>
          <div class="item">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'boat_ticket.html') }}"><i class="ship icon"></i>{{ trans('translang.menu_ticket.boat_ticket') }}</a> -->
          </div>


        </div>
        <div class="column">
          <div class="ui small list">
            <!-- <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'payment_methods.html') }}" class="item"><i class="dollar icon"></i>{{ trans('translang.payment_method') }}</a> -->
            <a href="{{ LaravelLocalization::getLocalizedURL(trans('translang.lang') , 'use_condition.html') }}" class="item"><i class="file text outline icon"></i>{{ trans('translang.use_condition') }}</a>
          </div>
          
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

  </div>

  
  <!-- <div class="ui stackable centered three column grid">
    <div class="five wide column">
      @include('webpages.facebook_page_plugin.facebook_hongstartravel')
    </div>
    <div class="five wide column">
      @include('webpages.facebook_page_plugin.facebook_hongstarticketing')
    </div>
    <div class="five wide column">
      @include('webpages.facebook_page_plugin.facebook_hongstarpassport')
    </div>
  </div>
 -->
  <div class="ui one column grid centered">
    <div class="fifteen wide column">
      <div class="ui fitted divider"></div>
      <div class="ui basic segment" style="padding: 0px;">
        <div class="{{ trans('translang.font_menu') }}">
          {{ trans('translang.brand_name') }} &copy <?php echo date('Y'); ?>, {{ trans('translang.all_right') }}
        </div>
      </div>
    </div>
  </div>
