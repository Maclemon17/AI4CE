<header>
    <div class="container-fluid">
        <div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
            <!-- logo -->
            <div id="logo">
                <a href="{{ route('home') }}" class="">
                    <img src="{{ asset('media/logo_ai4ce.jpeg')}}" style="height: 80px;"> 
                </a>
            </div>
            <!-- //logo -->
            <!-- nav -->
            <div class="nav_w3ls">
                <nav>
                    <label for="drop" class="toggle"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li><a href="{{ route('home') }}" class="{{ Request::is('/') ? "active" : "" }}">Home</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-1" class="toggle toogle-1">About AI4CE<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="{{ route('about')}}" class="{{ Request::is('about-us') ? "active" : "" }}"> About AI4CE <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-1" />
                            <ul>
                                <li><a href="{{ route('about') }}#aim_objectives" class="drop-text">Aim & Objectives</a></li>
                                <li><a href="{{ route('about')}}#expected_project " class="drop-text">Expected Project Outcomes</a></li>
                                <li><a href="{{ route('about')}}#organogram" class="">AI4CE Organogram</a></li>
                            </ul>
                        </li>

                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">The Projects<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#" class="{{ Request::is('projects*') ? "active" : "" }}"> The Projects <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="{{ route('research') }}" class="drop-text">Research Activities</a></li>
                                <li><a href="{{ route('capacityBuilding') }}" class="drop-text">Capacity Building</a></li>
                                <li><a href="{{ route('acado') }}" class="drop-text">Acado-prenuership</a></li>
                                <li><a href="{{ route('curriculum') }}" class="drop-text">Curriculum Development</a></li>
                            </ul>
                        </li>

                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-3" class="toggle toogle-3">Events<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#" class="{{ Request::is('events*') ? "active" : "" }}"> Events <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-3" />
                            <ul>
                                <li><a href="{{ route('symposium') }}" class="drop-text">Symposium</a></li>
                                <li><a href="{{ route('exhibition') }}" class="drop-text">Final Year Project Exhibition</a></li>
                                <li><a href="{{ route('webinar-1st') }}" class="drop-text">Webinars</a></li>
                                <li>
                                    <label for="drop-4" class="toggle toogle-4">Workshop Editions<span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Workshop Editions<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-4" />
                                    <ul>
                                        <li><a href="{{-- {{ route('workshop1st') }} --}}" class="drop-text">1st Edition</a></li>
                                        <li><a href="{{ route('workshop2nd') }}" class="drop-text">2nd Edition</a></li>
                                        <li><a href="{{ route('workshop3rd') }}" class="drop-text">3rd Edition</a></li>
                                        <li><a href="{{ route('workshop4th') }}" class="drop-text">4th Edition</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-5" class="toggle toogle-5">Online Projects<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#" class="{{ Request::is('learnergy_lms') ? "active" : "" }}"> Online Projects <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-5" />
                            <ul>
                                <li><a href="{{ route('learNergy') }}">LearNergy LMS</a></li>
                                <li><a href="https://vicelab.netlify.app/" class="drop-text" target="_blank">VICE-Lab</a></li>
                            </ul>
                        </li>               
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-6" class="toggle toogle-6">More Info <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#" class="{{ Request::is('achievements*') || Request::is('contact-us') || Request::is('opportunities') ? "active" : "" }}">More Info<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-6" />
                            <ul>
                                <li><a href="{{ route('opportunity') }}" class="drop-text">Opportunities</a></li>
                                <li><a href="{{ route('contact') }}" class="drop-text"> Contact AI4CE</a></li>
                                <li>
                            
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-7" class="toggle toogle-7">Achievements <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Achievements<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-7" />
                                    <ul>
                                        <li><a href="{{ route('academic') }}" class="drop-text">Academic Immersion</a></li>
                                        <li><a href="{{ route('IIP4S') }} " class="drop-text">Industrial Immersion</a></li>
                                        <li><a href="{{ route('pitching') }} " class="drop-text">Product Pitching</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li id="flash_update">
                            <a href="{{ route('workshop3rd') }} " class="btn btn-outline-danger my-0">Workshop (3rd Edition)</a>
                        </li>
                        
                    </ul>
                </nav>
            </div> <!-- //nav-->
            <!-- <div class="d-flex mt-lg-1 mt-sm-2 mt-3 justify-content-center mb-3">
                <div>
                    <a href="{{-- {{ route('workshop3rd') }} --}} " class="btn btn-outline-danger my-0">Workshop (3rd Edition)</a>
                </div>
                
            </div> -->
        </div>
    </div>
</header>    

