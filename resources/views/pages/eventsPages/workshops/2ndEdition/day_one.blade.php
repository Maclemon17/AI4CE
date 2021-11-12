@extends('layouts.main')

@section('title', '2nd Edition Workshop Day1')

@section('content')
    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('workshop2nd') }} " class="font-weight-bold">Workshop (2nd Edition)</a> </li>
                <li class="breadcrumb-item">Day One</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop2ndDay2') }}" class="font-weight-bold">Day Two</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop2ndDay3') }}" class="font-weight-bold">Day Three</a></li>
            </ol>
        </div>
        <section class="team py-2" id="team">
			<div class="container py-xl-5 py-lg-3">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">2nd Edition Workshop Day 1</h3>
				</div>
				<div class="row second pt-lg-4 ">
					@foreach ($photos as $photo)
						<div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 my-4">
							<div class="gallery">
								<a href="{{ asset('media/eventsPhotos/workshops/2ndEdition/day1/' . $photo->getFilename()) }}" data-lightbox="mygallery">
									<img src="{{ asset('media/eventsPhotos/workshops/2ndEdition/day1/' . $photo->getFilename()) }}" alt="Final Year Exhibition" width="350px" height="255" class="gallery-thumbnail">
								</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>

    </div>
@endsection
