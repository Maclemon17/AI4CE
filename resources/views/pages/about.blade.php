@extends('layouts.main')

@section('title', 'About Us')

@section('content')

<!-- main banner -->
<div class="main-top" id="home">

	<!-- banner -->
	<div class="banner_w3lspvt-2">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
			<li class="breadcrumb-item" aria-current="page">About AI4CE</li>
			<li class="breadcrumb-item"><a href="#aim_objectives" class="font-weight-bold">Aim & Objectives</a></li>
			<li class="breadcrumb-item"><a href="#expected_project" class="font-weight-bold">Expected Project Outcomes</a></li>
			<li class="breadcrumb-item"><a href="#organogram" class="font-weight-bold">AI4CE Organogram</a></li>
		</ol>
	</div>
	<!-- //banner -->
</div>
<!-- //main banner -->

<!-- about -->
<div class="about-inner py-5">
	<div class="container pb-xl-5 pb-lg-3">
		<div class="row py-xl-4">
			<div class="col-lg-5 about-right-faq pr-5">
				<h6>About AI4CE</h6>
				<h3 class="mt-2 mb-3">Artificial Intelligence for Clean Energy (AI4CE)</h3>
				<p class="mt-2 text-justify">Artificial Intelligence for Clean Energy (AI4CE) is an initiative which aims at developing innovative approaches to clean energy generation using AI and at the same time rely on Information and Communication Technology (ICT) for integrating the clean energy to the existing grid system by turning academic ideas into businesses through AcadoPreneurship. 
				This initiative is supported by the Royal Academy of Engineering UK Grant under the Higher Education Partnerships in sub-Saharan Africa (HEP-SSA) programme with project ID HEPSSA1921\3\88</p>
			</div>
			<div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
				{{-- <img src="{{ asset('web/images/about.png') }}" alt="" class="img-fluid" /> --}}
				<img src="{{ asset('media/ai4ce_logo.png') }}" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<!-- //about -->

<!-- stats -->
<section class="bottom-count bg-li py-5" id="stats">
	<a id="aim_objectives"></a>
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<div class="col-lg-5 left-img-w3ls">
				<img src="{{ asset('web/images/b2.png') }}" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">Aim & Objectives</h3>
				</div>
				<div class="row mt-5">
					<ul>
						<li>To develop online laboratory system for extending Clean Energy (CE) research capabilities in Hub-Spoke Universities (HSU) </li>
						<li>To second 5 academic to the industry under the Industry Immersion Programme (IIP), 5 industry experts to the HSU under the Academic Immersion Programme (AIP and 50 undergraduate students to industry for Student Industrial Work Experience Scheme (SIWES). 
						</li>
						<li>To jointly conduct applied training with industrial partners for 100 undergraduate students and 3 postgraduate students in addition to provision of entrepreneurial training to 50 students under the AcadoPreneurship Programme. 
						</li>
						<li>To sponsor research bench work opportunities for two (2) PhD students at UK partner universities.</li>
						<li>To organise two dissemination workshops at 2 universities and CE forum in the two (2) hub universities.</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!-- Expected Project Outcomes -->
<div class="about-inner py-5">
	<a id="expected_project"></a>
	<div class="container pb-xl-5 pb-lg-3">
		<div class="row py-xl-4">
			<h3 class="mt-2 mb-3 col-12 text-center py-4"><b>Expected Project Outcomes</b></h3>
			<div class="col-lg-5 about-right-faq pr-5">
				
				<p class="mt-2 text-justify">The development of innovative AI/CE based products and approaches capable of providing CE to over 2 million financially disadvantaged populace in Nigeria.</p><hr>
				<p class="mt-2 text-justify"> The development of online laboratory system for extending Clean Energy (CE) research capabilities in Hub-Spoke Universities (HSU).</p><hr>
				<p class="mt-2 text-justify"> The development of AI/CE curriculum and laboratory equipment for manpower development </p> <hr>
				<p class="mt-2 text-justify"> Capacity Development for Academic staff in both Hub and Spoke Universities through the introduction of Industrial Immersion Programme (IIP) and Academic Immersion Programme (AIP) and Students Industrial Work Experience Scheme (SIWES) opportunities to students in the field of AI/CE </p> <hr>
				<p class="mt-2 text-justify">Provision of entrepreneurial training to 50 students and incubation of 5 start-up businesses under under the AcadoPreneurship Programme </p> <hr>
				<p class="mt-2 text-justify">Sponsoring research bench work opportunities for two (2) PhD students at UK partner universities. </p> <hr>
				<p class="mt-2 text-justify">Organizing two dissemination workshops and Two <a href="{{-- {{ route ('symposium') }}  --}}"> symposiums. </a></p>  <hr>
				<p class="mt-2 text-justify">Establishment of CE Ecosystem at Federal University of Technology, Minna and its environs </p>
			</div>
			<div class="col-lg-7 welcome-right text-center mt-lg-12 mt-5">
				<img src="{{ asset('web/images/project.png') }}" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>

<!-- //stats -->

<!-- team -->
<section class="team py-5 bg-li" id="team">
	<a id="organogram"></a>
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">AI4CE Organogram</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            <img src="{{ asset('media/organogram.jpeg') }}" class="img-fluid" style="display: block; margin: auto;">
        </div>
</section>
<!-- //team -->

@endsection
