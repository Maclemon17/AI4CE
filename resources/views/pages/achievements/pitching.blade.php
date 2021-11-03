@extends('layouts.main')

@section('title', 'Product Pitching')

@section('content')

    <!-- main banner -->
    <div class="main-top" id="home">
        <!-- banner -->
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Product Pitching</li>
            </ol>
        </div>
        <!-- //banner -->

        <!-- team -->
        <section class="team py-5" id="team">
            <div class="container py-xl-5 py-lg-3">
                <div class="bott-w3ls mr-xl-5">
                    <h3 class="title-w3 text-bl mb-3 font-weight-bold">Product Pitching</h3>
                </div>
                <div class="row ab-info second pt-lg-4 ">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 my-4">
                            <div class="ab-content-inner gallery">
                                <a href="{{ asset('media/product_pitching/'. $product->getFilename()) }} " data-lightbox="mygallery">
                                    <img src="{{ asset('media/product_pitching/'. $product->getFilename()) }}" alt="products-pitching image" height="500" width="500" class="img-fluid">
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