@extends('layouts.main')

@section('title', 'AcadoPrenuership')

@section('content')

	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- banner -->
		<div class="banner_w3lspvt-2">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
				<li class="breadcrumb-item" aria-current="page">Acadoprenuership</li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('acado_start') }} " class="font-weight-bold">Startup loop</a></li>
				<li class="breadcrumb-item"><a href="#" class="font-weight-bold">Incubation</a></li>
			</ol>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- stats -->
	<section class="bottom-count bg-li py-5" id="stats">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 about-right-faq">
					<h3 class="title-w3 text-da font-weight-bold">AcadoPrenuership</h3>
					<h6>Our Plan</h6>
					<ul class="w3l-right mt-4 list-unstyled text-justify">
						<li>- Fifty (50) innovative academic ideas would be selected for business incubation.</li>
						<li class="my-2">- Two (2) additional events would be organized in line with Acadopreneurship principle.</li>
						<li>- A 7-day boot camp will be held for pitching for presenting innovative ideas to prospective investors as contained in Acadopreneurship manual </li>
					</ul>
				</div>
				<div class="col-lg-6 left-wthree-img text-right">
					<img src="{{ asset('web/images/b1.png') }}" alt="" class="img-fluid mt-5" />
				</div>
			</div>
	</section>
	<!-- //stats -->

@endsection 