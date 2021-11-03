@extends('layouts.main')

@section('title', 'IIP4S')

@section('content')

    <div class="main-top" id="home">
        <div class="banner_w3lspvt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Industial Immersion</li>
                <li class="breadcrumb-item"><a href=" {{ route('IIP4S-gallery') }}" class="font-weight-bold">IIP4S
                        Gallery</a></li>
            </ol>
        </div>
    </div>

    <section class="team py-2" id="team">
        <div class="container py-xl-5 py-lg-3">

            <div class="bott-w3ls mr-xl-5">
                <h3 class="title-w3 text-bl mb-3 font-weight-bold">Industrial Immersion Programme for Students (IIP4S)
                </h3>
            </div>

            <div class="row mb-5">
                <div class="col-lg-5 left-img-w3ls mt-5">
                    <img src="{{ asset('web/images/student_immersion.jpg') }}" alt="" class="img-fluid" />
                </div>

                <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                    <div class="">
                        <ul style="list-style-type: none;">
                            <li>
                                <p>The Artificial Intelligence for Clean Energy (AI4CE) has concluded arrangements to
                                    train fifty (50) students from the Federal University of Technology, Minna (FUT,
                                    Minna) and Ibrahim Badamasi Babangida University, Lapai on an industry immersion
                                    programme, which represents a major component of the Research Group’s coined
                                    Acadoprenuership concept.</p>
                                <br>
                                <p>The training commenced on Tuesday, April 6, 2021 at the AI4CE Secretariat, CODeL
                                    Building, Main Campus, Gidan Kwano.
                                    The month-long orientation exercise is aimed at equipping the students with
                                    pre-requisite knowledge and skills needed in the 21st century. Further, it will
                                    acquaint them better with the demands of the industry before embarking on the
                                    six-month' mandatory Industrial Attachment Scheme.
                                </p>

                                <h6 class="accordion-textm mt-3">
                                    <a href="https://m.facebook.com/story.php?story_fbid=10216267653282929&id=1801157260&sfnsn=scwspwa"><em>read more...</em> </a>
                                </h6>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bott-w3ls mr-xl-8" align="center">
                <h5 class="title-w3 text-bl mb-3 font-weight-bold">Orientation and Training Activities</h5>
            </div>

            <div class="row my-3 d-flex justify-content-center">
                <a href="{{ asset('web/images/training_activity.png') }}">
                    <img src="{{ asset('web/images/training_activity.png') }}" alt="" class="img-fluid"/>
                </a>
            </div>

            <div class="bott-w3ls mr-xl-8">
                <h3 class="title-w3 text-bl mb-3 font-weight-bold">Speakers</h3>
            </div>

            <div class="row pt-lg-4">
                @foreach ($speakers as $speaker)
                    <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 my-4">
                        <div class="gallery m-2">
                            <a href="{{ asset('media/IIP4S/immersion/' . $speaker->getFilename()) }}"
                                data-lightbox="mygallery">
                                <img src="{{ asset('media/IIP4S/immersion/' . $speaker->getFilename()) }}"
                                    alt="industry immersion" width="350px" height="255px" class="gallery-thumbnail">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
