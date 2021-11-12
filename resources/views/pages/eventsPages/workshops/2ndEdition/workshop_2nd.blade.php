@extends('layouts.main')

@section('title', 'Workshop 2nd Edition')

@section('content')
    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Workshop (2nd Edition)</li>
                <li class="breadcrumb-item"><a href="{{ route('workshop2ndDay1') }}" class="font-weight-bold">Day One</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop2ndDay2') }}" class="font-weight-bold">Day Two</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop2ndDay3') }}" class="font-weight-bold">Day Three</a></li>
            </ol>
        </div>

        <section class="bottom-count bg-li py-5" id="stats">
            <div class="container py-xl-5 py-lg-3">

                <h3 class="title-w3 text-bl mb-5 font-weight-bold">2nd Edition Workshop on Artificial Intelligence and Clean Energy</h3>
                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 35px">
                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/2ndworkshop.png') }}" alt="" class="img-fluid" />
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left"></h4>
                        </div>
                        <div class="row mt-3 container">
                            <ul class="list-unstyled">
                                <li class="text-justify">
                                    <p>Access to affordable, renewable and clean energy has not only been captured as the
                                        seventh (7th) objective of the Sustainable Development Goals, but has been linked to
                                        all elements of sustainable development.
                                    </p><br>
                                    <p>The existing power system in Nigeria is characterized by its inability to provide
                                        reliable and constant access to Clean Energy. Thus, a major barrier to: poverty
                                        eradication, Industry innovation, sustainable communities and quality education. The
                                        project, Artificial Intelligence for Clean Energy (AI4CE) development will also
                                        develop innovative approaches to clean energy generation using AI and at the same
                                        time rely on Information and Communication Technology (ICT) for integrating the
                                        clean energy to the existing grid system by turning academic ideas into businesses
                                        through AcadoPreneurship.
                                    </p><br>
                                    <p>Thus, Address the problem of weak University-Industry linkage, which has muffled
                                        innovation and commercialisation of research results from universities through the
                                        proposed AcadoPreneurship model.</p><br>
                                    <p>In addition, the project will serve as a regional vehicle to drive and sustain
                                        products development, knowledge and technology exchange between knowledge
                                        institutions and the industry as primary partners in Nigeria.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">

                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/salami.png') }}" alt="" class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Salami</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Chief Host</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Salami was appointed the Pioneer Vice chancellor of Nigeria’s premier
                                        Technical University, First Technical University, Ibadan in May 2017. He became a
                                        Professor of Environmental Science, at the Institute of Ecology and Environmental
                                        Studies, Obafemi Awolowo University (OAU), Ile-Ife in 2003. He was the Pioneer Head
                                        of Environmental Science, University of the Gambia, The Gambia (2000-2001); the
                                        Director, Institute of Ecology and Environmental Studies, OAU (2006-2010); Senior
                                        Research Advisor, Health, Safety and Environment, Corporate Environment Department,
                                        Shell Petroleum Development Company (SPDC), Port Harcourt (2010-2011); and Deputy
                                        Vice-Chancellor (Academic), OAU (2011-2016)
                                    </p><br>
                                    <p>He was the Project Manager, the World Bank sponsored Centre of Excellence (CoEx) in
                                        Software Engineering: Science & Technology Education at Post-Basic Levels (STEPB)
                                        Project OAU, from 2011-2013 and the Centre Leader, World Bank sponsored African
                                        Centre of Excellence on ICT-Driven Knowledge Park from 2014 to 2016.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 70px">
                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/ajayi.png') }}" alt="" class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Professor Sola Ajayi</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Project Team Lead</h4>
                        </div>
                        <div class="row mt-3 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Professor Sola Ajayi is an experienced agricultural scientist and higher education
                                        manager with several years teaching, research, and University management
                                        experience.As an expert and acknowledged research leader, he has vast research and
                                        industry experience on seed systems, agricultural innovations and enterprise
                                        development, research management, agricultural policy dialogue and mentorship of
                                        early career researchers (ECRs). His research focus has been on improving crop
                                        productivity through seed technologies, genetic resources conservation and
                                        enhancement, and the impact of climate change on food security. He is well networked
                                        with experts in the agricultural research-for-development fraternity.
                                    </p><br>
                                    <p>Prof Ajayi has held several management positions in the University system, mostly at
                                        Obafemi Awolowo University, Ile-Ife. Until he was appointed as the Director of
                                        Academic Planning and Partnerships at the Technical University, he was the Chairman,
                                        Faculty of Agriculture Postgraduate Committee /Member, Board of Postgraduate
                                        College, Obafemi Awolowo University (OAU) (Jan-Jun, 2017) among other positions held
                                        while at OAU.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/koja.png') }}" alt="" class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Prof O. A. Koya</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Host</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Prof O. A. Koya is a professor of mechanical engineering and the Dean of the Faculty
                                        Engineering and Technology, of the First Technical University, Ibadan, Nigeria. His
                                        area of specialisation is in the Applied Mechanics and Machine Design, and his
                                        researches spread over four major themes: bio-materials processing, renewable
                                        energy, machine development, and mechanical maintenance.
                                    </p><br>
                                    <p>His research teams were recipients of national awards on the Development of
                                        Automotive Parts and Components, Mathematical Modelling of Processing Equipment, and
                                        Process Equipment Design. His research publications also earned notable
                                        international recognitions. An innovation toward commercial production of
                                        Palm-Kernel-Shell Brake Pad received national patent in 2016; while an Intermittent
                                        Solar Dryer for Cocoa Beans is being scaled-up with some modifications for
                                        commercial applications.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/bamidele.png') }}" alt="" class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Prof Bamidele Adebisi</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Keynote Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Prof Bamidele Adebisi is a Professor in Intelligent Infrastructure Systems, and
                                        Director of Smart Infrastructure and Industry Research Group at Manchester
                                        Metropolitan University, UK. He received Master’s degree in Advanced Mobile
                                        Communication Engineering and Ph.D. in Communication Systems both from Lancaster
                                        University, UK. Before that, he obtained B.Eng. Electrical Engineering from Ahmadu
                                        Bello University, Zaria
                                    </p><br>
                                    <p>He is the Vice-Chair IEEE TC-PLC, a Panel Member, of the UK EPSRC Peer-Review
                                        College, and EU H2020 Expert Reviewer. His main research is in embedding sensing,
                                        communication, control, and data analytic technologies in critical infrastructure,
                                        i.e. water, energy, buildings etc., He has published over 160 peer-review papers and
                                        given several talks/panel discussions in the research areas of internet of things,
                                        smart cities, smart grids, cybersecurity and cyber physical systems.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/adeaga.png') }}" alt="" class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Dr Oyetunde Adeoye ADEAGA</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Chief Organizer</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Dr Oyetunde Adeoye ADEAGA is a senior Lecturer in the Department of Mechanical
                                        Engineering and the Ag. Head of Department of Electrical & Electronic and Biomedical
                                        Engineering, First Technical University Ibadan. He is an expert and consultant in
                                        computational Thermal Fluids and Renewable/Clean Energy of the Future with exposure
                                        to engineering design and construction. With twenty years of experience in teaching
                                        and research sector, he has supervised and co-supervised many of students’ project.
                                        He has authored and co-authored many research articles.
                                    </p>
                                    <br>
                                    <p>He attended Government College Ibadan for secondary education. He obtained B.Eng.
                                        (Hons.) (Mechanical Engineering) Second Class Upper (1998) from Federal University
                                        of Technology Akure, M.Sc. (Mechanical Engineering) and Ph.D. (Mechanical
                                        Engineering) from University of Ibadan in 2005 and 2015 respectively.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/austin.png') }}" alt="" class="img-fluid" />
                        <h5 class="title-w3 text-bl mb-1 font-weight-bold text-left">Mr. Austin Kwesi Okere</h5>
                    </div>
                    <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                        <div class="bott-w3ls mr-xl-5">
                            <h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Invited Speaker</h4>
                        </div>
                        <div class="row mt-5 container">
                            <ul class="list-unstyled">
                                <li class='text-justify'>
                                    <p>Mr. Austin Kwesi Okere is the Founder of CWG Plc and the Ausso Leadership Academy. He
                                        has an MBA from IESE Business School, and over 25 years entrepreneurial experience.
                                        Currently an Entrepreneur-in-Residence at Columbia Business School, New York, he has
                                        also been appointed to the Advisory Board of the Global Business School Network in
                                        Washington DC in recognition of his contribution to the development of business
                                        education and knowledge transfer in Africa. Austin has taught at the United States
                                        International University (USIU) in Kenya and has served as a Consultant to the
                                        Sustainable Development Goals, African Center (SDGAC) in Rwanda. Austin has recently
                                        been appointed to the Board of Trustees of the Global Business Practices Council
                                        under the auspices of the AACSB in Amsterdam.
                                    </p>
                                    <br>
                                    <p>Austin was recognized with a Lifetime Entrepreneurship Achievement Award by the
                                        American University of Nigeria in 2017 for his outstanding entrepreneurial
                                        accomplishments.
                                    </p>
                                </li>
                                <hr>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-5 left-img-w3ls" style="padding-top: 90px">
                        <img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/aibinu.png') }}" alt="" class="img-fluid" />
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
                                        Technology (FUT), Minna, Nigeria.
                                    </p>
                                    <br>
                                    <p>Furthermore, he is an advocate of Spiritual Intelligence, Artificial Intelligence and
                                        AcadoPreneurship. AcadoPreneurship simply means turning academic ideas into
                                        businesses and start-ups. Efforts are ongoing in turning some of his research
                                        outputs and that of other colleagues into start-up businesses.
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
