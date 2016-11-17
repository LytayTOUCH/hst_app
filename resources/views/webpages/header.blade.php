<div class="ui fluid container bg-yellow">
  <div class="ui container">
    <div class="ui hidden fitted divider"></div>
    <div class="ui hidden fitted divider"></div>
    <a href="{{ url('/') }}">
      <img src="/images/HST-Logo/HSTLogo.svg" title="HongStar Trademark" class="ui tiny image">
    </a>
    <div class="ui hidden fitted divider"></div>
    <div class="ui hidden fitted divider"></div>
  </div>
</div>
<div class="ui hidden fitted divider"></div>
<div class="ui container">

  <div class="ui secondary menu">
    <!-- <a href="{{ url('/') }}" class="item">
      <i class="home icon big"></i>
    </a> -->

    <div class="ui dropdown item">
      <i class="street view icon"></i> <b>Tours</b>
      <i class="dropdown icon"></i>
      <div class="menu">
        <a href="{{ url('/domestic_tour.html') }}" class="item"><i class="map icon"></i>Domestic Tours</a>
        <a href="{{ url('/international_tour.html') }}" class="item"><i class="send outline icon"></i>International Tours</a>
      </div>
    </div>

    <div class="ui dropdown item">
      <i class="ticket icon"></i><b>Ticket Services</b>
      <i class="dropdown icon"></i>
      <div class="menu">
        <a href="{{ url('/air_ticket.html') }}" class="item"><i class="plane icon"></i>Air Ticket</a>
        <a href="{{ url('/bus_ticket.html') }}" class="item"><i class="bus icon"></i>Bus Ticket</a>
        <a href="{{ url('/boat_ticket.html') }}" class="item"><i class="ship icon"></i>Boat Ticket</a>
      </div>
    </div>

    <div class="ui dropdown item">
      <i class="newspaper icon"></i><b>Passport Services</b>
      <i class="dropdown icon"></i>
      <div class="menu">
        <a href="{{ url('/international_visa.html') }}" class="item"><i class="share alternate square icon"></i>International VISA</a>
        <a href="{{ url('/khmer_visa_renew.html') }}" class="item"><i class="undo icon"></i>Khmer VISA Renew</a>
        <a href="{{ url('/khmer_passport.html') }}" class="item"><i class="write square icon"></i>Khmer Passport</a>
      </div>
    </div>

    <a href="{{ url('/contact_us.html') }}" class="item"><i class="location arrow icon"></i><b>Contact Us</b></a>
    <div class="ui inline dropdown item">
        <div class="text">
          <a href="#"><i class="gb flag"></i></a>
        </div>
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">
            <a href="#gb"><i class="gb flag"></i></a>
          </div>
          <div class="item">
            <a href="#kh"><i class="kh flag"></i></a>
          </div>
          <div class="item">
            <a href="#cn"><i class="cn flag"></i></a>
          </div>
        </div>
      </div>
  </div>
</div>
