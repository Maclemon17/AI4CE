@extends('layouts.main')

@section('title', 'Webinar')

@section('content')

	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- banner -->
		<div class="banner_w3lspvt-2">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
				<li class="breadcrumb-item" aria-current="page">Webinar Workshop (1st Edition)</li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('webinar-2nd') }}" class="font-weight-bold">Webinar Workshop (2nd Edition)</a></li>
			</ol>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- stats -->
	<section class="bottom-count bg-li py-5" id="stats">
		<div class="container py-xl-5 py-lg-3">

			<h3 class="title-w3 text-bl mb-5 font-weight-bold">Webinar Workshop (1st Edition)</h3>

			<div class="row mb-5">
				<div class="col-lg-5 left-img-w3ls">
					<img src="{{ asset('web/images/prof_musa.jpg') }}" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
					<div class="bott-w3ls mr-xl-5">
						<h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Accessing Grants</h4>
					</div>
					<div class="row mt-3 container">
						<ul class="list-unstyled">
							<li>
								<p>Abiodun Musa AIBINU (Ph.D.), is an  “AcadoPreneur”  and a  highly-motivated career driven achiever with over Twenty-Three (23) years working experience in the field of: Artificial Intelligence, Information and Communication Technology (ICT), Robotics, Mechatronics Engineering, Telecommunication Engineering, Industrial Automation, Teaching and Research in the field of Artificial Intelligence, ICT and Robotics.</p>
								<br>
								<p>Professor Aibinu is a registered Engineer with COREN and NSE. His research interests include: Digital signal and Image processing, ICT, Intelligent system design with focus on Telecommunication and Mechatronics System development and Artificial Intelligence (AI) with emphasis on artificial neural networks and Genetic Algorithm.</p>

								<h6 class="accordion-textm mt-3"><a href="{{ asset('web/power_point/AI4CE Training Presentation Slides.pptx') }}">Click to download presentation slide</a> </h6>
							</li>
							<hr>
						</ul>
					</div>

				</div>
			</div>

			<div class="row mb-5">
				<div class="col-lg-5 left-img-w3ls">
					<img src="{{ asset('web/images/prof_bamidele.jpg') }}" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
					<div class="bott-w3ls mr-xl-5">
						<h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">Developing a Research Career</h4>
					</div>
					<div class="row mt-5 container">
						<ul class="list-unstyled">
							<li class='text-justify'>
								<p>Prof Bamidele Adebisi is a Professor in Intelligent Infrastructure Systems, and the Head of the Smart Infrastructure and Industry Research (SIIR) Group, Department of Engineering, Manchester Metropolitan University. </p>
								<br>

								<p>His research is mainly in embedding sensing, communication, control, and data analytic technologies in critical infrastructure, i.e. water, energy, transport (V2X/CAV), buildings etc.</p>

								<br>
								<p>Prof Bamidele is a Fellow of IET, a Fellow of Higher Education Academy and a Chartered Engineer.</p>

								<h6 class="accordion-textm mt-3"><a href="{{ asset('web/power_point/Research career Development B Adebisi.pdf') }}">Click to download presentation slide</a> </h6>

							</li>
							<hr>
						</ul>
					</div>
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-lg-5 left-img-w3ls">
					<img src="{{ asset('web/images/prof_wara.jpg') }}" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
					<div class="bott-w3ls mr-xl-5">
						<h4 class="title-w3 text-bl mb-1 font-weight-bold text-left">AI for Clean Energy Development and Deployment</h4>
					</div>
					<div class="row mt-5 container">
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
			</div>
		</div>
	</section>
	<!-- //stats -->

@endsection
