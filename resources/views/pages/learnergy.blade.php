@extends('layouts.main')

@section('title', 'LMS')

@section('content')

    <!-- main banner -->
    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">LearNergy LMS</li>
                <li class="breadcrumb-item"><a href="https://ai4ce.com.ng/lms/login/index.php" class="font-weight-bold" target="_blank">Login</a></li>
                <li class="breadcrumb-item"><a href="https://ai4ce.com.ng/lms/login/signup.php?" class="font-weight-bold" target="_blank">Register</a></li>
            </ol>
        </div>

        <section class="team py-5" id="team">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="tittle text-center font-weight-bold">LearNergy Learning Management System</h3>
                <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
                <h5 class="tittle text-left font-weight-bold" >Our Courses</h5>
                <div class="row ab-info second pt-lg-4">
                    <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                        <div class="ab-content-inner">
                            <img src="{{ asset('media/clean_energy.png') }}" alt="Clean Energy Image" height="200" width="200" class="img-fluid">
                            <div class="ab-info-con">
                                <a href="https://ai4ce.com.ng/lms/">
                                    <h6 class="text-team-w3">Introduction to Clean Energy</h6>
                                </a>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 40px;">
                    <a href="https://ai4ce.com.ng/lms/login/signup.php?" class="btn button-style">Register</a>
                </div>
            </div>
        </section>
    </div>   

@endsection