@extends('layouts.main')

@section('title', 'Workshop 4th Edition')


@section('content')
    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Workshop (4th Edition)</li>
                <li class="breadcrumb-item"><a href="{{ route('workshop4thDay1') }}" class="font-weight-bold">Day One</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('workshop4thDay2') }}" class="font-weight-bold">Day Two</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('workshop4thDay3') }}" class="font-weight-bold">Day
                        Three</a></li>
            </ol>
        </div>

        <section class="bottom-count bg-li py-5" id="stats">
            <div class="container py-xl-5 py-lg-3">

                <h3 class="title-w3 text-bl mb-5 font-weight-bold">4th Edition Workshop on Artificial Intelligence and Clean
                    Energy</h3>
                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3l">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/4th_workshop.jpg') }}"
                            alt="4th_workshop_banner" class="img-fluid" />
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left"></h4>
                        </div>
                        <div class="row mt-3 container">
                            <ul class="list-unstyled">
                                <li class="text-justify">
                                    <p>The existing power system in Nigeria is characterized by its inability to provide
                                        reliable and constant access to Clean Energy. Thus, a major barrier to: poverty
                                        eradication, Industry innovation, sustainable communities and quality education. The
                                        project, Artificial Intelligence for Clean Energy (AI4CE) development will also
                                        develop innovative approaches to clean energy generation using AI and at the same
                                        time rely on Information and Communication Technology (ICT) for integrating the
                                        clean energy to the existing grid system by turning academic ideas into businesses
                                        through AcadoPreneurship.
                                    </p>

                                </li>
                                <hr>
                                <h5 class="title-w3 text-bl mb-5 font-weight-bold" align="center"> Program of Event</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/4thEdition/day1.png') }}"
                                            target="_blank">Day 1</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/4thEdition/day2.png') }}"
                                            target="_blank">Day 2</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/4thEdition/day3.png') }}"
                                            target="_blank">Day 3</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/4thEdition/day4.png') }}"
                                            target="_blank">Day 4</a>
                                    </div>
                                </div>
                            </ul>

                        </div>

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">

                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/ojo.jpg') }}" alt="Prof Ojo"
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor John Adedapo OJO</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Chief Host</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor J. A. Ojo holds B.Tech (1999), M.Sc. (2002), and Ph.D. (2011) in Electronic
                                        & Electrical Engineering, with specialization in Communication Systems and Signal
                                        Processing.
                                    </p><br>
                                    <p>Prof. Ojo has over fifty (60) articles in peer-reviewed journals and conference
                                        proceedings. He has taught core courses in the department of electronic and
                                        electrical engineering both at the undergraduate and postgraduate levels and has
                                        developed resources for teaching and learning these courses.
                                    </p>
                                    <p>rof. Ojo is the Chair of, Centre for Emerging Skills Technology (CEST-LAUTECH) a
                                        centre with the vision of building future competencies in people. He is also the
                                        Coordinator of the Signal Processing and Instrumentation and Control (SIPIC)
                                        research group with membership in about six tertiary institutions.
                                    </p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/aibinu.jpg') }}" alt="Prof Aibinu"
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Abiodun Musa AIBINU</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Principal Investigator</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Abiodun Musa AIBINU (Ph.D.), is an “AcadoPreneur” and a highly-motivated
                                        career-driven achiever with over Twenty-Two (22) years of working experience. in the
                                        field of Mechatronics Engineering, Autotronics, Information and Communication
                                        Technology (ICT) and Teaching and Research. Presently AcadoPreneur Aibinu is a:
                                        Professor of Mechatronics Engineering, Head of Department, Department of
                                        Mechatronics Engineering; Director, Centre of Open Distance and e-Learning, Federal
                                        University of Technology (FUT), Minna, Nigeria.
                                    </p><br>

                                    <p>Furthermore, he is an advocate of Spiritual Intelligence, Artificial Intelligence
                                        and AcadoPreneurship. AcadoPreneurship simply means turning academic ideas into
                                        businesses and start-ups. Efforts are ongoing in turning some of his research
                                        outputs and that of other colleagues into start-up businesses.
                                    </p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/adesola.jpg') }}" alt="Prof Aderounmu"
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Adesola Aderounmu </h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Keynote Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Adesola Aderounmu is a Professor in the Department of Computer Science and
                                        Engineering,
                                        Obafemi Awolowo University (OAU), Ile Ife. He is the immediate past President of
                                        Nigeria
                                        Computer Society, the umbrella body of all Information Technology Professionals,
                                        Stakeholders, and Interest Groups in Nigeria.
                                    </p><br>

                                    <p>Professor Aderounmu is a visiting research fellow at University of Zululand, South
                                        Africa. He is Principal Investigator OAU ICT-Driven Knowledge Park. He is also an
                                        advisor to TETFund on capacity building workshop on effective research
                                        administration,
                                        panel moderator to NCC on the Emerging Technologies Research and ICT Innovation
                                        Forum
                                    </p>

                                    <p>He has received several grants and scholarships within the last twenty years
                                        including a
                                        World Bank sponsored project, 2014 to Date, and has successfully trained 20 Ph.D.
                                        and 45
                                        M.Sc. candidates in Computer Science. He is currently serving as an external
                                        examiner at
                                        various universities in Nigeria and abroad.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/xiongwei.jpg') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Xiongwei Liu</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Invited Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Xiongwei Liu is the Managing Director at Entrust Smart Home Microgrid Ltd.
                                        Professor of Energy and Power Systems at the University of Huddersfield. Xiongwei is
                                        a global leader in smart microgrid, renewable energy and EV charging systems with
                                        30+ years of academic and industrial experience.
                                    </p><br>
                                    <p>Xiongwei is the inventor/founder of Entrust Smart Microgrid and EV Charging systems
                                        with three core patents.
                                    </p>
                                    <p>Xiongwei was Professor of Sustainable Engineering at the University of Cumbria, and
                                        Professor of Energy and Power Management at the University of Central Lancashire has
                                        led 20+ renewable energy and smart microgrid projects with funds (£5+m) from
                                        research councils and supervised dozens of post-doctoral researchers and PhD
                                        students.
                                    </p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/alice.jpg') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Alice Oluwafunke Oke</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Guest Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Alice Oluwafunke Oke, born almost five decades ago, hails from late Elder
                                        Michael Ayoola Alaba family in Ago-are, Oyo State.
                                    </p><br>
                                    <p>Prof. Alice Oluwafunke Oke is a researcher-cum-teacher per excellence. She teaches
                                        excellently at both undergraduate and postgraduate levels. She has successfully
                                        supervised and still supervising a number of postgraduate (M.Tech. and Ph.D)
                                        students.
                                    </p>
                                    <p>Her research interest is in the areas of Pattern recognition, signal and image
                                        processing and hardware system design. She is a Registered Engineer with COREN and a
                                        member of the following professional bodies: CPN, NSE, NCS and APWEN.
                                    </p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/adedayo.jpg') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Adedayo Yusuff</h5>

                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Guest Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Adedayo Yusuff is a lecturer and a researcher in Electrical Engineering. He
                                        is currently a Professor at the University of South Africa (UNISA).
                                    </p><br>
                                    <p>Adedayo Yusuff is currently a full professor in the department. He has extensive
                                        industry experience in the areas of signal processing & control, network
                                        optimisation, and machine translation. He has been involved in research projects in
                                        South Africa and Nigeria.
                                    </p><br>
                                    <p>He is a recipient of the Tertiary Education Support Fund from Eskom. He specialises
                                        in adaptive electric power transmission networks; application of computational
                                        intelligence schemes for operation, control and protection of power grid;
                                        integration of intermittent and renewable energy sources to a power grid, among
                                        others.
                                    </p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/timothy.jpg') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Engineer Oluseye Timothy Odeleye</h5>

                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Guest Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Oluseye Timothy Odeleye is an Engineer with many years of experience. He is the
                                        MD/CEO of Susej Nigeria Limited, and the Original Manufacturer of IoT devices with
                                        applications in various filed of life, such as power, medical, Telecoms e.t.c.
                                    </p>
                                    <br>
                                    <p>He is a graduate of Elect Elect of Federal Poly Ilaro, The Polytechnic Ibadan,
                                        University of Ibadan, and Red River College, Winnipeg, Canada
                                    </p><br>
                                    <p>He has developed many patents in IoT systems and is the pioneering engineer that
                                        developed solutions for Real-Time Remote Monitoring for Discos in Nigeria.
                                    </p>
                                    <p> He has worked both in Nigeria and North America in notable companies in Nigeria
                                        Globacoms, Huawei and was a part-time lecturer in Polytechnic Ibadan for a few
                                        months in his early career, and in North America.
                                    </p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/4thEdition/ifeoluwa.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Mr. Ifeoluwa David Solomon</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Ifeoluwa David Solomon is a research assistant with Signal and Information
                                        Processing, Instrumentation and Control (SIPIC) Research group, Ladoke Akintola
                                        University of Technology (LAUTECH), Ogbomoso.
                                    </p><br>
                                    <p>He holds an M.Tech degree in Electronic and Electrical Engineering from LAUTECH. He
                                        has been a part of a number of studies and has a number of peer-reviewed journal
                                        articles to his credit.
                                    </p><br>
                                    <p>His research interests include computer Vision with applications in robotics and
                                        automation, facial recognition, biomedical engineering, agriculture, security, and
                                        surveillance.
                                    </p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
