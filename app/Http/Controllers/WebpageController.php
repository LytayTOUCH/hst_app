<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    //
    public function index(){
      $data['test']="Test Data from Webpages Controller In index action !";
      $form['modal']=view('webpages.forms.modal', compact('data'));
      return view('webpages.index', compact('form'));
    }
    public function show_local_tour_page(){
      return view('webpages.local_tour');
    }
    public function show_intl_tour_page(){
      return view('webpages.intl_tour');
    }
    public function show_air_ticket_page(){
      return view('webpages.air_ticket');
    }
    public function show_bus_ticket_page(){
      $data['test']="Test Data from Webpages Controller In show_bus_ticket_page action !";
      $form['modal']=view('webpages.forms.modal', compact('data'));
      return view('webpages.bus_ticket', compact('form'));
    }
    public function show_boat_ticket_page(){
      return view('webpages.boat_ticket');
    }
    public function show_intl_visa_page(){
      return view('webpages.intl_visa');
    }
    public function show_khmer_visa_renew_page(){
      return view('webpages.khmer_visa_renew');
    }
    public function show_khmer_passport_page(){
      return view('webpages.contact_us');
    }
    public function show_contact_us_page(){
      return view('webpages.contact_us');
    }
    public function show_office_location(){
      return view('webpages.office_location');
    }

}
