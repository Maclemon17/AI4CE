@extends('layouts.main')

@section('title', 'Webinar')

@section('content')

    <!-- main banner -->
    <div class="main-top" id="home">
        <!-- banner -->
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('webinar-1st') }}" class="font-weight-bold">Webinar Workshop (1st Edition)</a></li>
                <li class="breadcrumb-item" aria-current="page">Webinar Workshop (2nd Edition)</li>
            </ol>
        </div>
        <!-- //banner -->
    </div>
    <!-- //main banner -->

    <!-- stats -->
    <section class="bottom-count bg-li py-5" id="stats">
        <div class="container py-xl-5 py-lg-3">

            <h3 class="title-w3 text-bl mb-5 font-weight-bold">Webinar Workshop (2nd Edition)</h3>

            <div class="row mb-5">
                <div class="col-lg-5 left-img-w3ls">
                    <img src="{{ asset('web/images/Tolulope_Poster.jpeg') }}" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                    <div class="bott-w3ls mr-xl-5">
                        <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Foundations for Effective Public Speaking</h4>
                    </div>
                    <div class="row mt-3 container">
                        <ul class="list-unstyled">
                            <li>
                                <p>Tolulope Lottu, is an embodiment of professional talents, ranging from content planning, design and development, to business communication, project management and customer content authoring.She holds various certifications in the field of content authoring and design, business management and Customer Experience. </p>
                                <br>
                                <p>She is a trained teacher, instructional design and learning professional with over 12 years extensive experience in trainings, workshop facilitations for in-corporate and academic settings.</p>

                                <h6 class="accordion-textm mt-3"><a href="{{ asset('web/power_point/Foundations for Effective Public Speaking (1).pdf') }}" target = "_blank">Click to download presentation slide</a> </h6>
                            </li>
                            <hr>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-5 left-img-w3ls">
                    <img src="{{ asset('web/images/Mutiat_Olagoke_Poster.jpeg') }}" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                    <div class="bott-w3ls mr-xl-5">
                        <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Effective Virtual Presentation Strategy</h4>
                    </div>
                    <div class="row mt-5 container">
                        <ul class="list-unstyled">
                            <li class='text-justify'>
                                <p>Mutiat Olagoke, is a social entrepreneur, communication expert, publisher, writer, public speaker, educational consultant, coach and teacher. She runs Egret Media Concept, a media company with a niche in education and self development. </p>
                                <br>

                                <p>Mutiat is helping scores of people from across the world through her online courses and in partnership with other outfit help dozens of people from across the world overcome fears and limiting beliefs, build confidence and be their most awesome selves in every aspects of their lives.</p>

                                <br>
                                <p>She has students from across Nigeria, Canada, Tanzania, The UAE, Saudi Arabia, United Kingdom and USA. She is known to friends and associates as “The Queen of Awesomeness” for her selflessness and passion to help everyone be awesome.</p>

                                <h6 class="accordion-textm mt-3"><a href="{{ asset('web/power_point/Effective Virtual Presentation Strategy.pptx') }}" target = '_blank'>Click to download presentation slide</a> </h6>

                            </li>
                            <hr>
                        </ul>
                    </div>

                </div>
            </div>

            {{-- <div class="row mb-5">
                <div class="col-lg-5 left-img-w3ls">
                    <img src="{{ asset('web/images/prof_wara.jpg') }}" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                    <div class="bott-w3ls mr-xl-5">
                        <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">AI for Clean Energy Development and Deployment</h4>
                    </div>
                    <div class="row mt-5">
                        <ul class="list-unstyled">
                            <li class='text-justify'>
                                <p>Engr. Prof. Samuel T. Wara, is a Professor of Power and Energy Systems, a Chartered Electrical Engineer (COREN) and a holder of a PhD in Electrical Engineering from the University of Benin with over twenty – nine years cognate experience in the Public and Private University as a teacher, a researcher, manager, and an administrator.</p>
                                <br>
                                <p>His research interests are: Energy Management; Renewable Energy (Solar PV) systems; Power quality; Energy audit; Measurement and Verification; Energy Efficiency; Energy Conservation and Environment with several National and International awards on developed clean energy products.</p>

                                <h6 class="accordion-textm mt-3"><a href="{{ asset('web/power_point/AT4CE LECTURE WARA.pptx') }}">Click to download presentation slide 1</a> </h6>
                                <h6 class="accordion-textm mt-3"><a href="{{ asset('web/power_point/AI4CE CASE STUDIES WARA.pptx') }}">Click to download presentation slide 2</a> </h6>
                            </li>
                            <hr>
                        </ul>
                    </div>

                </div>
            </div> --}}


        </div>
    </section>
<!-- //stats -->

@endsection
