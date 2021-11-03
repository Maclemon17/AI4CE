@extends('layouts.main')

@section('title', '3rd Edition Workshop Day3')

@section('content')
    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('workshop3rd') }} "class="font-weight-bold">Workshop (3rd Edition)</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop3rdDay1') }}" class="font-weight-bold">Day One</a></li>
                <li class="breadcrumb-item"><a href="{{ route('workshop3rdDay2') }}" class="font-weight-bold">Day Two</a></li>
                <li class="breadcrumb-item">Day Three</a></li>

            </ol>
        </div>
        <section class="team py-2" id="team">
			<div class="container py-xl-5 py-lg-3">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">3rd Edition Workshop Day 3</h3>
				</div>
				<div class="row second pt-lg-4 ">
					@foreach ($photos as $photo)
						<div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 my-4">
							<div class="gallery">
								<a href="{{ asset('media/events_all/workshops/3rdEdition/day3/' . $photo->getFilename()) }}" data-lightbox="mygallery">
									<img src="{{ asset('media/events_all/workshops/3rdEdition/day3/' . $photo->getFilename()) }}" alt="3rd Workshop Day3" width="350px" height="255" class="gallery-thumbnail">
								</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>

    </div>
@endsection
