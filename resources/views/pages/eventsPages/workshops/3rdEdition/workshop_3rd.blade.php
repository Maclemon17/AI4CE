@extends('layouts.main')

@section('title', 'Workshop 3rd Edition')


@section('content')
    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Workshop (3rd Edition)</li>
                <li class="breadcrumb-item"><a href="{{ route('workshop3rdDay1') }}" class="font-weight-bold">Day One</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop3rdDay2') }}" class="font-weight-bold">Day Two</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop3rdDay3') }}" class="font-weight-bold">Day Three</a></li>
            </ol>
        </div>

        <section class="bottom-count bg-li py-5" id="stats">
            <div class="container py-xl-5 py-lg-3">

                <h3 class="title-w3 text-bl mb-5 font-weight-bold">3rd Edition Workshop on Artificial Intelligence and Clean
                    Energy</h3>
                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3l">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/3rd_workshop.png') }}" alt=""
                            class="img-fluid" />
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left"></h4>
                        </div>
                        <div class="row mt-3 container">
                            <ul class="list-unstyled">
                                <li class="text-justify">
                                    <p><strong>“Show me your friends and I will show you your future”</strong> has become a
                                        popular saying when it comes to advice on friendships and career development. Thus,
                                        it is also safe to say,<strong>“ Show me your mentor and I will tell you how far and
                                            how fast you will go in life ”.</strong> </p><br>

                                    <p>Mentorship is one of the greatest tools for success, yet it is one of the most
                                        undermined concepts. Lailah Gifty Akita once said<strong> “ Every great achiever is
                                            inspired by a great mentor ” </strong>while Isaac Newton was also reported to
                                        have said, <strong> “ If I have seen further than others, it is by standing upon the
                                            shoulders of giants”</strong>, yet we never fully take advantage of mentoring.
                                    </p>

                                </li>
                                <hr>
                                <h5 class="title-w3 text-bl mb-5 font-weight-bold" align="center"> Program of Event</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/3rdEdition/day1.png') }}"
                                            target="_blank">Day 1</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/3rdEdition/day2.png') }}"
                                            target="_blank">Day 2</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/3rdEdition/day3.png') }}"
                                            target="_blank">Day 3</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ asset('media/eventsPhotos/workshops/3rdEdition/day4.png') }}"
                                            target="_blank">Day 4</a>
                                    </div>
                                </div>
                            </ul>

                        </div>

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">

                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/adamu.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Adamu Abu Kasim</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Chief Host</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Adamu Abu Kasim is a Nigerian botanist and Professor of Science. He was
                                        appointed as Vice Chancellor of Ibrahim Badamasi Babangida University, Lapai by
                                        Governor Abubakar Sani Bello of Niger State, and has since assumed ofice in December
                                        2019.</p><br>
                                    <p>Professor Kasim holds a M.Sc of Botany and PhD of crop breeding in Ahmadu Bello
                                        University, he then obtained a Certificate in Tissue Biotechnology in 1995 from the
                                        University of Nigeria, Nsukka</p>
                                    <p>He has held several positions in the academic circle including the Dean Faculty of
                                        Science,
                                        Deputy Vice Chancellor (Administration) in IBBUL, and Director in various capacity
                                        in ABU
                                        Zaria.</p>

                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/nuhu.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Nuhu George Obaje</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Host</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Nuhu George Obaje is the NNPC Chair Professor for Basinal Studies and
                                        Coordinating Director of Research and Development at the Ibrahim Badamasi Babangida
                                        University, Lapai, Niger State, Nigeria.</p><br>
                                    <p>He has held research tenures with Chevron Nigeria Limited, Lagos and later with the
                                        Shell Petroleum Development Company of Nigeria Limited. The 1st Ph.D. graduate at
                                        the Nasarawa State University Keffi (Ali Moumouni) graduated under his supervision
                                        and mentorship. Prof Obaje is a Team Leader of many nationally and internationally
                                        funded research projects including those funded by the TETFund National Research
                                        Grant (2015-2018)</p>
                                    <p>On 20th March 2014, Prof. Obaje received the NMGS/NAPIMS/Prof. R.A. Reyment Award at
                                        the 50th International Conference of the Nigerian Mining and Geosciences Society
                                        (NMGS) held in Benin City, for consistent excellent research outputs on the
                                        sedimentary geology of Nigeria. The Award, sponsored by NNPC/NAPIMS, is in honour of
                                        Prof. R.A. Reyment, the first Head of Department of Geology at the University of
                                        Ibadan</p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/ibrahim.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Dr. Ibrahim Abdullahi</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Host</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Doctor Ibrahim ABDULLAHI currently the Head of Department Computer Sciences, Ibrahim
                                        Badamasi Babangida University Lapai, Niger State</p><br>
                                    <p>He was the Chair of the TPC at International Conference on Network Applications and
                                        Protocols (NETAPPS) 2015 which involved 30+ counties.In 2019, Dr. Abdullahi was
                                        awarded the most outstanding Academic Staff of Ibrahim Badamasi Babangida University
                                        Lapai. Among other awards and National and International Recognition </p>
                                    <p>Dr. ABDULLAHI is a Co-Lead on the Virtual Laboratory for Science and Engineering
                                        project, funded by the Royal Academy of Engineering UK, a Spoke Coordinator of IBBUL
                                        on the AI4CE, a co educator on the CLIX4STEM grant funded by the Canadian sponsors
                                        and a Country Co-lead on a global idea of FAIR concept of Virus Outbreak Data
                                        Network Africa and Asia (VODANA).</p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/abdullahi.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Abdullahi Abubakar Kawu</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Host</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Abdullahi Abubakar Kawu is a Lecturer at the Department of Computer Science, Ibrahim
                                        Badamasi Babangida University, Lapai (Nigeria</p><br>
                                    <p>He has also worked as a Consultant to international organisations like Malaria
                                        Consortium, World Bank and UNDP where he had the rare opportunity to learn and apply
                                        technical, leadership, project management, and Monitoring and Evaluation (M&E)
                                        skills in health projects.</p>
                                    <p>He is a professional member of the ACM and an ANIM. Most recently, he is a lead
                                        recepient of the Royal Academy of Engineering (RAEng) London, 2021 Spokes Award
                                        under the HEPSSA, a research grant. He also plays a key role in a multi-national
                                        research project on building capacity of teachers in the use of digital technologies
                                        in select global south countries including Nigeria, Bhutan & Tanzania funded by
                                        IDRC. </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/bamidele.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Prof Bamidele Adebisi</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Guest Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Bamidele Adebisi is a Professor in Intelligent Infrastructure Systems, and
                                        Director of Smart Infrastructure and Industry Research Group at Manchester
                                        Metropolitan University, UK. He received Master’s degree in Advanced Mobile
                                        Communication Engineering and Ph.D. in Communication Systems both from Lancaster
                                        University, UK. Before that, he obtained B.Eng. Electrical Engineering from Ahmadu
                                        Bello University, Zaria</p><br>
                                    <p>He is the Vice-Chair IEEE TC-PLC, a Panel Member, of the UK EPSRC Peer-Review
                                        College, and EU H2020 Expert Reviewer. His main research is in embedding sensing,
                                        communication, control, and data analytic technologies in critical infrastructure,
                                        i.e. water, energy, buildings etc., He has published over 160 peer-review papers and
                                        given several talks/panel discussions in the research areas of internet of things,
                                        smart cities, smart grids, cybersecurity and cyber physical systems.</p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/aibinu.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Prof Abiodun Musa AIBINU</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Guest Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Abiodun Musa AIBINU (Ph.D.), is an “AcadoPreneur” and a highly-motivated career
                                        driven achiever with over Twenty-Two (22) years working experience. in the field of:
                                        Mechatronics Engineering, Autotronics, Information and Communication Technology
                                        (ICT) and Teaching and Research.Presently AcadoPreneur Aibinu is a: Professor of
                                        Mechatronics Engineering, Head of Department, Department of Mechatronics
                                        Engineering; Director, Centre of Open Distance and e-Learning, Federal University of
                                        Technology (FUT), Minna, Nigeria.</p><br>
                                    <p>Furthermore, he is an advocate of Spiritual Intelligence, Artificial Intelligence and
                                        AcadoPreneurship. AcadoPreneurship simply means turning academic ideas into
                                        businesses and start-ups. Efforts are ongoing in turning some of his research
                                        outputs and that of other colleagues into start-up businesses.</p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/abdulkadir.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Dr. Abdulkadir Mukhtar</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Keynote Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Doctor Abdulkadir Mukhtar holds a BEng in Chemical Engineering from the Federal
                                        University of Technology, Minna (FUTMINNA) and an MSc in Oil and Gas Engineering
                                        from the Robert Gordon University, Aberdeen, the United Kingdom in 2004 and 2007,
                                        respectively</p><br>
                                    <p>He is a visiting Associate Professor to both the Petroleum Engineering Departments of
                                        the African University of Science and Technology (AUST), Abuja, and the Institute of
                                        Petroleum Studies (IPS), University of Port Harcourt, Port Harcourt, Rivers State,
                                        Nigeria. He is also a distinguished scholar with profound expertise in multiphase
                                        flows, Computational Fluid Dynamics (CFD), and flow assurance. </p>
                                    <p> His recent work by successfully employing cutting-edge instrumentation and CFD to
                                        interrogate the behaviour of gas–liquid flows in straight pipes and bends with
                                        applications to the petroleum industry gained him a strong global recognition in
                                        research and development (R&D)</p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/3rdEdition/steve.png') }}" alt=""
                            class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Prof. Steve A. Adeshina</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Steve A. Adeshina is the Dean of the Faculty of Engineering. He is also a
                                        Professor of Computer Vision and Engineering at the Department of Computer
                                        Engineering. He is currently serving as the Dean, Faculty of Engineering</p><br>
                                    <p>His research interest is in using Computer Vision and Deep Learning techniques in
                                        analyzing medical and biological images and data. He has published over 60 articles
                                        in peer-reviewed conferences and Journals. His current interest is in using the same
                                        Computer Vision techniques in automated cancer detection and diagnosis.
                                        Additionally, Prof. Adeshina has research interests in using electronic voting in
                                        engendering good governance. He has published some high impact works in this
                                        regard.Prof. Adeshina is a member of several national and international professional
                                        organizations including MIEEE, MACM, MNSE, MNCS, Regd. COREN, MCPN, amongst others
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
