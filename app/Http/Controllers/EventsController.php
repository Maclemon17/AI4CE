<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    // Final Year Project Exhibition
    public function fypExhibition() {
        $photos = \File::allFiles(public_path('media/events_all/exhibition'));

        return view('pages.eventsp.exhibition', compact('photos'));
    }

    ###########     Symposium Starts    ###########

    // Symposium Home | Arrival
    public function symposium() {
        $photos = \File::allFiles(public_path('media/events_all/symposium/arrival'));
        
        return view('pages.eventsp.symposium.symposium', compact('photos'));
    }
    
    // Symposium day_one
    public function symposiumDay1() {
        $photos = \File::allFiles(public_path('media/events_all/symposium/day1'));
        
        return view('pages.eventsp.symposium.day_one', compact('photos'));
    }
    
    // Symposium day_two
    public function symposiumDay2() {
        $photos = \File::allFiles(public_path('media/events_all/symposium/day2'));
        
        return view('pages.eventsp.symposium.day_two', compact('photos'));
    }

    // Symposium day_three
    public function symposiumDay3() {
        $photos = \File::allFiles(public_path('media/events_all/symposium/day3'));
        
        return view('pages.eventsp.symposium.day_three', compact('photos'));
    }

    // Symposium Posters Presentation
    public function symposiumPosters() {
        $posters = \File::allFiles(public_path('media/events_all/symposium/posters'));
        
        return view('pages.eventsp.symposium.posters', compact('posters'));
    }

    ###########     Symposium Ends   ###########

    ###########     Webminar Starts   ###########

    // Webminar
    public function webinarFirst() {

        return view('pages.eventsp.webinars.webinar_1st');
    }

    public function webinarSecond() {

        return view('pages.eventsp.webinars.webinar_2nd');
    }

    ###########     Webminar  Ends   ###########


    ###########     Workshop  Starts   ###########

    /* Second Edition Start */

    public function workshop2nd() {
        
        return view('pages.eventsp.workshops.2ndEdition.workshop_2nd');
    }

    public function workshop2ndDay1() {
        $photos = \File::allFiles(public_path('media/events_all/workshops/2ndEdition/day1'));

        return view('pages.eventsp.workshops.2ndEdition.day_one', compact('photos'));
    }

    public function workshop2ndDay2() {
        $photos = \File::allFiles(public_path('media/events_all/workshops/2ndEdition/day2'));

        return view('pages.eventsp.workshops.2ndEdition.day_two', compact('photos'));
    }

    public function workshop2ndDay3() {
        $photos = \File::allFiles(public_path('media/events_all/workshops/2ndEdition/day3'));

        return view('pages.eventsp.workshops.2ndEdition.day_three', compact('photos'));
    }

    /* Second Edition Ends */

    /* Third Edition Starts */

    public function workshop3rd() {
        
        return view('pages.eventsp.workshops.3rdEdition.workshop_3rd');
    }

    public function workshop3rdDay1() {
        $photos = \File::allFiles(public_path('media/events_all/workshops/3rdEdition/day1'));

        return view('pages.eventsp.workshops.3rdEdition.day_one', compact('photos'));
    }

    public function workshop3rdDay2() {
        $photos = \File::allFiles(public_path('media/events_all/workshops/3rdEdition/day2'));

        return view('pages.eventsp.workshops.3rdEdition.day_two', compact('photos'));
    }

    public function workshop3rdDay3() {
        $photos = \File::allFiles(public_path('media/events_all/workshops/3rdEdition/day3'));

        return view('pages.eventsp.workshops.3rdEdition.day_three', compact('photos'));
    }
    
   
    /* Third Edition Ends */



    ###########     Workshop  Ends   ###########


}
