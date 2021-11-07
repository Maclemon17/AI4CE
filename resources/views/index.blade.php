@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="main-top" id="home">
   
    <!-- banner -->
    <div class="banner_w3lspvt position-relative">
        <div class="container">
            <div class="d-md-flex">
                <div class="row">
                    <div class="w3ls_banner_txt col-md-6">                    
                        <h3 class="w3ls_pvt-title">Artificial Intelligence<br> <span>for Clean Energy</span></h3>
                        <p class="text-sty-banner">Artificial Intelligence for Clean Energy (AI4CE) is an initiative which aims at developing innovative approaches to clean energy generation using AI and at the same time rely on Information and Communication Technology (ICT)...</p>
                        <a href=" {{ route('about') }} " class="btn button-style mt-md-5 mt-2">Read More</a>
                    </div>
                    <div class="banner-img col-md-5 mt-"> 
                        <div class="row ab-info second pt-lg-3">
                            <video id="video"  width="650" height="400" controls autoplay muted loop>
                                <source src="{{ asset('media/fut_video.MP4')}}" type="video/mp4" id="vid">
                                Your browser does not support the video tag.
                            </video>
                            <video id="video1"  width="600" height="400" controls autoplay muted loop style="display: none">
                                <source src="{{ asset('media/fut_video.MP4')}}" type="video/mp4" id="vid">
                                Your browser does not support the video tag.
                            </video>
                            <video id="video2"  width="500" height="400" controls autoplay muted loop style="display: none">
                                <source src="{{ asset('media/fut_video.MP4')}}" type="video/mp4" id="vid">
                                Your browser does not support the video tag.
                            </video>
                            <video id="video3"  width="450" height="400" controls autoplay muted loop style="display: none">
                                <source src="{{ asset('media/fut_video.MP4')}}" type="video/mp4" id="vid">
                                Your browser does not support the video tag.
                            </video>
                            <video id="video4"  width="350" height="400" controls autoplay muted loop style="display: none">
                                <source src="{{ asset('media/fut_video.MP4')}}" type="video/mp4" id="vid">
                                Your browser does not support the video tag.
                            </video>
                            <video class="img-fluid mt-2" id="video5"  width="650" height="400" controls autoplay muted loop style="display: none">
                                <source src="{{ asset('media/fut_video.MP4')}}" type="video/mp4" id="vid">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- animations effects -->
        <div class="icon-effects-w3l">
            <img src="{{ asset('web/images/shape1.png') }}" alt="" class="img-fluid shape-wthree shape-w3-one">
            <img src="{{ asset('web/images/shape2.png') }}" alt="" class="img-fluid shape-wthree shape-w3-two">
            <img src="{{ asset('web/images/shape3.png') }}" alt="" class="img-fluid shape-wthree shape-w3-three">
            <img src="{{ asset('web/images/shape5.png') }}" alt="" class="img-fluid shape-wthree shape-w3-four">
            <img src="{{ asset('web/images/shape4.png') }}" alt="" class="img-fluid shape-wthree shape-w3-five">
            <img src="{{ asset('web/images/shape6.png') }}" alt="" class="img-fluid shape-wthree shape-w3-six">
        </div>
        <!-- //animations effects -->
    </div>
    <!-- //banner -->
</div>
<!-- //main banner -->

<!-- team -->
<section class="team py-5" id="team">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">Our Academic Partners</h3>
        {{-- <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p> --}}
        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/futminna.png') }}" alt="futminna image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://futminna.edu.ng" target="_blank">
                            <h6 class="text-team-w3">Federal University of Technology Minna</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/huddersfield.png') }}" alt="huddersfield image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https://www.hud.ac.uk/" target="_blank">
                            <h6 class="text-team-w3">University of Huddersfield</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/ibbul.jpeg') }}" alt="ibbul image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://ibbu.edu.ng/" target="_blank">
                            <h6 class="text-team-w3">Ibrahim Badamasi Babangida University Lapai</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>

        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/lautech.png') }}" alt="lautech image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://www.lautech.edu.ng/" target="_blank">
                            <h6 class="text-team-w3">Ladoke Akintola University of Technology Ogbomosho</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/manchester.png') }}" alt="manchester image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://www2.mmu.ac.uk/" target="_blank">
                            <h6 class="text-team-w3">Manchester Metropolitan University</h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/techu.png') }}" alt="techu image" height="150" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://tech-u.edu.ng/" target="_blank">
                            <h6 class="text-team-w3">First Technical University</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3 class="tittle text-center font-weight-bold">Our Industrial Partners</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/susej.jpeg') }}" alt="susej image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://susejgroup.org/" target="_blank">
                            <h6 class="text-team-w3">SUSEJ Nigeria Limited</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/basic.png') }}" alt="basic image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https://basicworks.com.ng/" target="_blank">
                            <h6 class="text-team-w3">Basic Electrical Electronics Works Limited</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 Tumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/buypower.png') }}" alt="buypower image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://buypower.ng/" target="_blank">
                            <h6 class="text-team-w3">Buy Power</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row ab-info second pt-lg-4">    
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/eclipsepower.jpg') }}" alt="eclipsepower image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://eclipsepower.ng/" target="_blank">
                            <h6 class="text-team-w3">Eclipse Power</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/valuehandlers.png') }}" alt="Valuehandlers image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https://www.valuehandlers.com/">
                            <h6 class="text-team-w3">Valuehandlers International LTD </h6>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- //team -->


 {{-- @push('scripts') --}}
    <script>
        // video responsive
        function responsive() {
            const vid = document.querySelector("#video");
            const vid1 = document.querySelector("#video1");
            const vid2 = document.querySelector("#video2");
            const vid3 = document.querySelector("#video3");
            const vid4 = document.querySelector("#video4");
            const vid5 = document.querySelector("#video5");
            if (screen.width <= 1310) {
                vid.style.display = "none";
                vid1.style.display = "block";
                vid2.style.display = "none";
                vid3.style.display = "none";
                vid4.style.display = "none";
                vid5.style.display = "none";
            }  
            if (screen.width <= 1200) {
                vid.style.display = "none";
                vid1.style.display = "none";
                vid2.style.display = "block";
                vid3.style.display = "none";
                vid4.style.display = "none";
                vid5.style.display = "none";
            } 
            if (screen.width <= 1000) {
                vid.style.display = "none";
                vid1.style.display = "none";
                vid2.style.display = "none";
                vid3.style.display = "block";
                vid4.style.display = "none";
                vid5.style.display = "none";
            }
            if (screen.width <= 915) {
                vid.style.display = "none";
                vid1.style.display = "none";
                vid2.style.display = "none";
                vid3.style.display = "none";
                vid4.style.display = "block";
                vid5.style.display = "none";
            }
            if(screen.width < 765) {
                vid.style.display = "none";
                vid1.style.display = "none";
                vid2.style.display = "none";
                vid3.style.display = "none";
                vid4.style.display = "none";
                vid5.style.display = "block";
            }
        };

        setInterval(responsive, 1000);
        document.getElementById('vid').play();
    </script>
 {{-- @endpush --}}

@stop