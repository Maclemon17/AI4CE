@extends('layouts.main')

@section('title', 'Opportunities')

@section('content')

<!-- main banner -->
<div class="main-top" id="home">
	<!-- banner -->
	<div class="banner_w3lspvt-2">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
			<li class="breadcrumb-item" aria-current="page">Opportunities</li>
		</ol>
	</div>
	<!-- //banner -->
</div>
<!-- //main banner -->

<!-- stats -->
<section class="bottom-count bg-li py-5" id="stats">
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<!-- <div class="col-lg-5 left-img-w3ls">
				<img src="{{ asset('web/images/b2.png') }}" alt="" class="img-fluid" />
			</div> -->
			<div class="col-lg-12 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-5 font-weight-bold">Opportunities</h3>
				</div>
				<div class="Thumbnail">
				<a class="black-text" href="{{ asset('web/images/intern.jpg') }}" target="_blank" data-lightbox="mygallery">
					<img alt="Picture" src="{{ asset('web/images/intern.jpg') }}" style="width: 40%">
				</a>
				<div class="caption">
				<a href="#" class="btn btn-outline-success my-2">Click to Apply</a>
				</div>
            </div>
				<!-- <div class="col-lg-5 left-img-w3ls">
				<img src="{{ asset('web/images/intern.jpg') }}" alt="" class="img-fluid" />
				<a href="http://bit.ly/ai4ceinternship2021" target="_blank"> <em> Apply</em></a>
				</div> -->
				
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

@endsection