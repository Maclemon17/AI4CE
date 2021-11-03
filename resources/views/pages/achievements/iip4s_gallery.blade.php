@extends('layouts.main')

@section('title', 'IIP4S Gallery')

@section('content')
    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('IIP4S') }} " class="font-weight-bold">Industial Immersion</a></li>
                <li class="breadcrumb-item" aria-current="page">IIP4S Gallery</li>
            </ol>
        </div>    
    </div>

    <section class="team py-2" id="team">
        <div class="container py-xl-5 py-lg-3">
            <div class="bott-w3ls mr-xl-5">
                <h3 class="title-w3 text-bl mb-3 font-weight-bold">Event Photographs</h3>
            </div>
            <div class="row second pt-lg-4"> 
                @foreach ($photos as $photo)
                    <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 my-4">
                        <div class="gallery">
                            <a href="{{ asset('media/IIP4S/gallery/' . $photo->getFilename()) }}" data-lightbox="mygallery">
                                <img src="{{ asset('media/IIP4S/gallery/' . $photo->getFilename()) }}" alt="" width="350px" height="255px" class="gallery-thumbnail">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection