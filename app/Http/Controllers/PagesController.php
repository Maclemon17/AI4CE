<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    ############    About AI4CE     ##############
    public function aboutUs(){
    	return view('pages.about');
    }
    
    ##########   Contact AI4CE      ##################
    public function contactUs(){
    	return view('pages.contact');
    }

    ###############     The Projects    #################
    // # Research Activities
    public function researchActivities() {
        return view('pages.projects.research');
    }

    // # Capacity Building
    public function capacityBuilding() {
        return view('pages.projects.capacity-building');
    }
    
    // #  Curriculum Development
    public function curriculumDev() {
        return view('pages.projects.curriculum');
    }


    #### AcadoPrenuership ####
    function acadoPre() {
        return view('pages.acadoprenuership.acado');
    }

    #### StartUp Loop ####
    function startUpLoop() {
        $photos = \File::allFiles(public_path('media/acadoprenuership/loop'));

        return view('pages.acadoprenuership.startUp', compact('photos'));
    }

    #### Incubation ####
    function incubation() {
        return view;
    }
    ##############      The Projects Ends       ############# 

    ##############      Acievements       ############# 
    // Industrial Immersion Programme
    public function studentImmersion() {
        $speakers = \File::allFiles(public_path('media/IIP4S/immersion'));

        return view('pages.achievements.industrial_immersion', compact('speakers'));
    }
    
    public function immersionGallery() {
        $photos = \File::allFiles(public_path('media/IIP4S/gallery'));

        return view('pages.achievements.iip4s_gallery', compact('photos'));
    }

    // Academic Immersion Programme
    public function academicImmersion() {
        
        return view('pages.achievements.academic_immersion');
    }

    ##############      Acievements Ends      ############# 


    // Online Projects 
    public function lmsPage() {
        return view('pages.learnergy');
    }

    ####################    More Info   ##################
    // Opportunities
    public function opportunity() {
        return view('pages.opportunities');
    }

    // Achievementsa
    public function prodPitching() {
        $products = \File::allFiles(public_path('media/product_pitching'));;

        return view('pages.achievements.pitching', compact('products'));
    }


}
