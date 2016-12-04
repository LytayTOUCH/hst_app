@extends('layouts.webpages_layout')

@section('title')
  Contact Us
@endsection

@section('body')

<div class="ui container">
  <div class="ui one centered column grid">
    
    <div class="row">
      <div class="sixteen wide column">
        
      <div class="ui basic segment">
        <h3 class="ui dividing {{ trans('translang.font_menu') }}">
            <i class="marker icon"></i>{{ trans('translang.office_location') }}
            <div class="ui fitted divider"></div>
        </h3>
        <div class="ui content {{ trans('translang.font_menu') }}">
          <p class="ui text">
            <i class="home meduim icon"></i>{{ trans('translang.office_address') }}
          </p>
          <p class="ui text">
            <i class="phone icon"></i>{{ trans('translang.phone') }} : +855(0)23 220 385 / +855(0)23 220 386
          </p>
          <p class="ui text">
            <i class="mobile icon"></i>{{ trans('translang.phone') }} : +855(0)11 67 37 67
          </p>
          <p class="ui text">
            <i class="mail icon"></i>{{ trans('translang.mail') }} : info@hongstartravel.com
          </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.170473163958!2d104.91424400000002!3d11.539626000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950e0954710a5%3A0x2ddb7e612390ca!2sHong+Star+Travel+%26+Tours!5e0!3m2!1sen!2skh!4v1417934544742" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>

      </div>
      
      </div>
    </div>

        <div class="row">
          <div class="sixteen wide column">
            
            <div class="ui basic segment">
              <p class="large text {{ trans('translang.font_menu') }}">
                <i class="phone icon"></i>{{ trans('translang.contact_title') }}
                <div class="ui fitted divider"></div>
              </p>

                <div class="ui content">
                  <div class="ui basic segment {{ trans('translang.font_menu') }}">
                    <p class="large text {{ trans('translang.font_menu') }}">
                      {{ trans('translang.passport_contact')}}
                      <div class="ui hidden fitted divider"></div>
                    </p>
                  
                  <div class="ui cards">
                      
                      <!-- <div class="card">
                        <div class="content">
                          <p class="large text">Ms. Lyna TOCH</p>
                          <div class="description">
                            <p><i class="user blue icon"></i>General Manager</p>
                            <p><a href="tel:+85512807733" class="item">+855(0)12 80 77 33</a></p>
                            <p><a href="tel:+85570881188" class="item">+855(0)70 88 11 88</a></p>  
                            <p><i class="mail blue icon"></i>Email: <a href="mailto:gm@hongstartravel.com"> gm@hongstartravel.com</a></p>
                            <p><i class="skype blue icon"></i>Skype: <a href="skype:lynapp?chat">Lyna Hong Star</a></p>
                          </div>
                        </div>
                      </div> -->

                      <div class="card">
                      <div class="content">
                        <p class="large text">Mr. Uthdomrithy HOM</p>
                        <div class="description">
                          <p><i class="user blue icon"></i>Deputy General Manager</p>
                          <p><a href="tel:+85599881199" class="item">+855(0)99 88 11 99</a></p>
                          <p><i class="mail blue icon"></i>Email: <a href="mailto:dgm@hongstartravel.com"> dgm@hongstartravel.com</a></p>
                          <p><i class="skype blue icon"></i>Skype: <a href="skype:live:uthdomrithyhom">HOM Uthdomrithy</a></p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="content">
                        <p class="large text">Ms. Bunleng LUM</p>
                        <div class="description">
                          <p><i class="user blue icon"></i>Accounting Assistant</p>
                          <p><a href="tel:+85587881177" class="item">+855(0)87 88 11 77</a></p>
                          <p><a href="tel:+85511673767" class="item">+855(0)11 67 37 67</a></p>  
                          <p><i class="mail blue icon"></i>Email: <a href="mailto:obm@hongstartravel.com"> om@hongstartravel.com</a></p>
                          <p><i class="skype blue icon"></i>Skype: <a href="skype:live:hongstarfinance?chat">Leng-HongStar</a></p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="content">
                        <p class="large text">Ms. Lakhna CHHEAK</p>
                        <div class="description">
                          <p><i class="user blue icon"></i>Deputy General Assistant</p>
                          <p><a href="tel:+855966881188" class="item">+855(0)96 688 11 88</a></p>
                          <p><a href="tel:+85599881122" class="item">+855(0)99 88 11 22</a></p>
                          <p><i class="mail blue icon"></i>Email: <a href="mailto:marketing@hongstartravel.com"> marketing@hongstartravel.com</a></p>
                          <p><i class="skype blue icon"></i>Skype: <a href="skype:lakhacute?chat">Chheak Lakhna</a></p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="content">
                        <p class="large text">Ms. Rathana SEM</p>
                        <div class="description">
                          <p><i class="user blue icon"></i>Passport Assistant</p>
                          <p><a href="tel:+85596881144" class="item">+855(0)96 88 11 44</a></p>
                          <p><i class="skype blue icon"></i>Skype: <a href="skype:ratana938?chat">Ratana Sem</a></p>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

              <div class="ui content">
                
                <div class="ui basic segment {{ trans('translang.font_menu') }}">
                  <p class="large text {{ trans('translang.font_menu') }}">
                      {{ trans('translang.tour_contact')}}
                    <div class="ui hidden fitted divider"></div>
                  </p>
                
                  <div class="ui cards">
                    
                    <div class="card">
                      <div class="content">
                        <p class="large text">Mr. Rathanak SUM</p>
                        <div class="description">
                          <p><i class="user blue icon"></i>Tour Manager</p>
                          <p><a href="tel:+855965551188" class="item">+855(0)96 555 11 88</a></p>
                          <p><a href="tel:+85577778811" class="item">+855(0)77 77 88 11</a></p>  
                          <p><i class="mail blue icon"></i>Email: <a href="mailto:obm@hongstartravel.com"> obm@hongstartravel.com</a></p>
                          <p><i class="skype blue icon"></i>Skype: <a href="skype:live:hongstarobm?chat">OBM Hong Star Travel</a></p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="content">
                        <p class="large text">Mr. Sereyvathana DONG</p>
                        <div class="description">
                          <p><i class="user blue icon"></i>Tour Operator</p>
                          <p><a href="tel:+85587881187" class="item">+855(0)87 88 11 87</a></p>
                          <p><a href="tel:+855" class="item">+855(0)96 555 11 88</a></p>  
                          <p><i class="mail blue icon"></i>Email: <a href="mailto:op@hongstartravel.com"> op@hongstartravel.com</a></p>
                          <p><i class="skype blue icon"></i>Skype: <a href="skype:princehero4?chat">Hong Star Outbound (Nelson)</a></p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="content">
                        <p class="large text">Ms. Sreynich PHAN</p>
                        <div class="description">
                          <p><i class="user blue icon"></i>Tour Operator</p>
                          <p><a href="tel:+85599778811" class="item">+855(0)99 77 88 11</a></p>
                          <p><a href="tel:+85593881100" class="item">+855(0)93 88 11 00</a></p>  
                          <p><i class="mail blue icon"></i>Email: <a href="mailto:op1@hongstartravel.com"> op1@hongstartravel.com</a></p>
                          <p><i class="skype blue icon"></i>Skype: <a href="skype:live:hongstarobm1?chat">Hong Star OP (NICH)</a></p>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

              </div>

              <div class="ui content">
                <div class="ui basic segment {{ trans('translang.font_menu') }}">
                  <p class="large text {{ trans('translang.font_menu') }}">
                    {{ trans('translang.ticketing_contact')}}
                    <div class="ui hidden fitted divider"></div>
                  </p>
                
                  <div class="ui cards">
                      
                      <div class="card">
                        <div class="content">
                          <p class="large text">Mr. Kakrona PRUM</p>
                          <div class="description">
                            <p><i class="user blue icon"></i>Sales & Ticketing Officer</p>
                            <p><a href="tel:+85569881122" class="item">+855(0)69 88 11 22</a></p>
                            <p><a href="tel:+85595558811" class="item">+855(0)95 55 88 11</a></p>  
                            <p><i class="mail blue icon"></i>Email: <a href="mailto:ticketing1@hongstartravel.com"> ticketing1@hongstartravel.com</a></p>
                            <p><i class="skype blue icon"></i>Skype: <a href="skype:live:hongstarticketing1?chat">Hong Star Ticketing 1 (Kakrona)</a></p>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="content">
                          <p class="large text">Ms. Khanya THAN</p>
                          <div class="description">
                            <p><i class="user blue icon"></i>Sales & Ticketing Officer</p>
                            <p><a href="tel:+85587881100" class="item">+855(0)87 88 11 00</a></p>
                            <p><a href="tel:+85599881100" class="item">+855(0)99 88 11 00</a></p>  
                            <p><i class="mail blue icon"></i>Email: <a href="mailto:ticketing2@hongstartravel.com"> ticketing2@hongstartravel.com</a></p>
                            <p><i class="skype blue icon"></i>Skype: <a href="skype:live:hongstarticketing2?chat">Hong Star Ticketing 2 (Khanya)</a></p>
                          </div>
                        </div>
                      </div>
                      
                      
                  </div>
  
                </div>
              </div>

              <div class="ui content">
                <div class="ui basic segment {{ trans('translang.font_menu') }}">
                  <p class="large text {{ trans('translang.font_menu') }}">
                    {{ trans('translang.messenger_contact')}}
                    <div class="ui hidden fitted divider"></div>
                  </p>
                
                  <div class="ui cards">
                      
                      <div class="card">
                        <div class="content">
                          <p class="large text">Ms. Sopheaktra MAO</p>
                          <div class="description">
                            <p><i class="user blue icon"></i>Passport & VISA Messenger</p>
                            <p><a href="tel:+85587881144" class="item">+855(0)87 88 11 44</a></p>
                            <p><a href="tel:+85595668811" class="item">+855(0)95 66 88 11</a></p>  
                          </div>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="content">
                          <p class="large text">Mr. Phatriya PHEON</p>
                          <div class="description">
                            <p><i class="user blue icon"></i>Passport & VISA Messager</p>
                            <p><a href="tel:+85593881144" class="item">+855(0)93 88 11 44</a></p>
                          </div>
                        </div>
                      </div>
                      
                      
                  </div>
  
                </div>
              </div>

            </div>
          </div>
        </div> 
      </div>
    </div>
    




  </div>
</div>



@endsection
