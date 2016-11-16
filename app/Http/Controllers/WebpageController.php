<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    //
    public function index(){
      $data['test']="Test Data from Controller Webpages!";
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
      return view('webpages.bus_ticket');
    }
    public function show_boat_ticket_page(){
      return view('webpages.boat_ticket');
    }
    public function show_intl_visa_page(){

    }
    public function show_khmer_extend_visa_page(){

    }
    public function show_cam_passport_page(){

    }
    public function show_contact_us_page(){

    }

}
