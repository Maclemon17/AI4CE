@extends('layouts.main')

@section('title', 'Symposium Day2')

@section('content')

    <!-- main banner -->
    <div class="main-top" id="home">
        <!-- banner -->
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('symposium') }} " class="font-weight-bold">Arrival</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('symposium-day1') }} " class="font-weight-bold">Day 1</a></li>
                <li class="breadcrumb-item" aria-current="page">Day 2</li>
                <li class="breadcrumb-item"><a href=" {{ route('symposium-day3') }} " class="font-weight-bold">Day 3</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('symposium-posters') }} " class="font-weight-bold">Posters</a></li>
            </ol> 
        </div>
        <!-- //banner -->

        <!-- team -->
        <section class="team py-5" id="team">
            <div class="container py-xl-5 py-lg-3">
                <div class="bott-w3ls mr-xl-5">
                    <h3 class="title-w3 text-bl mb-3 font-weight-bold">Official Opening Ceremony and Invited Paper on AI and CE</h3>
                </div>
                <div class="row ab-info second pt-lg-4 ">
                    @foreach ($photos as $photo)
                        <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 my-4">
                            <div class="gallery">
                                <a href="{{ asset('media/eventsPhotos/symposium/day2/'. $photo->getFilename()) }} " data-lightbox="mygallery">
                                    <img src="{{ asset('media/eventsPhotos/symposium/day2/'. $photo->getFilename()) }}" alt="symposium arrival" height="350px" width="" class="gallery-thumbnail">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> 
            
        </section>
        <!-- //team -->
    </div>
    <!-- //main banner -->
@endsection