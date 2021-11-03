@extends('layouts.main')

@section('title', 'Academic Immersion Program')

@section('content')

    <!-- main banner -->
    <div class="main-top" id="home">

        <div class="banner_w3lspvt-2">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="font-weight-bold">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Academic Immersion</li>
        </ol>
    </div>
    <section class="team py-2" id="team">
        <div class="container py-xl-5 py-lg-3">  
            <div class="bott-w3ls mr-xl-5">
             <h3 class="title-w3 text-bl mb-3 font-weight-bold">Academic Immersion Program</h3>
            </div>
            <br>
            <script type="text/javascript">
            function ChangeColor(tableRow, highLight)
            {
                if (highLight)
                {
                tableRow.style.backgroundColor = '#dcfac9';
                }
                else
                {
                tableRow.style.backgroundColor = 'white';
                }
            }

            function DoNav(theUrl)
            {
                document.location.href = theUrl;
            }
            </script>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>S/N</th>
                            <th>Presentation Title</th>
                            <th>Presenter</th>
                            <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#5G_saga');">
                            <td>1</td>
                            <td>5G Saga Myths & Realities</td>
                            <td>Dr. Wasiu Popoola <br>Electronics & Electrical Engineering, The University of Edinburg, Edinburg</td>
                            <td align="center">April 8, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#5G_saga');">
                            <td>2</td>
                            <td>Future of Energy Infrastructure</td>
                            <td>Prof.Bamidele Adebisi <br>Department of Engineering, Manchester Metropolitan University, Manchester </td>
                            <td align="center">April 15, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#5G_future');">
                            <td>3</td>
                            <td>IOT for Energy Conservation</td>
                            <td>Engr. Oluseye Timothy Odeleye <br>MD/CEO, Susej Nigeria Limited</td>
                            <td align="center">April 20, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#5G_future');">
                            <td>4</td>
                            <td>Future of Electronics & Embedded Systems</td>
                            <td></td>
                            <td align="center">April 24, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#combating');">
                            <td>5</td>
                            <td>Combating Cyber Crime using Artificial Intelligence</td>
                            <td>Adekunle Bamidele <br>Chief Technology Officer, Pro-ICE Ltd</td>
                            <td align="center">April 27, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#combating');">
                            <td>6</td>
                            <td>Career Internationalization and Post-COVID Strategy</td>
                            <td>Dr. Akanimo Odon<br>Africa Strategy & Business Expert</td>
                            <td align="center">May 5, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#innovations');">
                            <td>7</td>
                            <td>Recent AI Innovations in Power Distribution </td>
                            <td>Dr. Olatayo Olalere<br>AGM/Technical Optimization, Ikeja Electric Plc</td>
                            <td align="center">May 12, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#innovations');">
                            <td>8</td>
                            <td>Renewable Energy a Driving Force to Academia  </td>
                            <td>Ariba Oreoluwa<br>CEO, Deecaj Integrated Global Services LTD</td>
                            <td align="center">May 19, 2020</td>
                            </tr>
                            <tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);"onclick="DoNav('#renewable');">
                            <td>9</td>
                            <td>Smart Optimization techniques for Virtual Power Plants</td>
                            <td>Dr. Babatunde Odetayo<br>Power & Natural Gas Expert</td>
                            <td align="center">May 29, 2020</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
                <hr>
                <a id="5G_saga"></a>
            <div class="row">
            <div class="col-md-6">
                <div class="video-container">
                
                <video class="player" preload controls poster="{{ asset('media/academic/5G ND fUTURE.png') }}">
                    <source src="{{ asset('media/academic/5G ND fUTURE.mp4') }}" type="video/mp4">
                </video>
                <img class="starter hide" src="{{ asset('media/academic/5G ND fUTURE.png') }}" alt="">
                </div> 
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/5G ND fUTURE.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>          
            </div>
            <div class="col-md-6">
                <div class="video-container">
                <video class="player" preload controls poster="{{ asset('media/academic/2 Future of Energy Infrastructure.png') }}">
                    <source src="{{ asset('media/academic/2 Future of Energy Infrastructure.mp4') }}" type="video/mp4">
                </video>
                    <img class="starter hide" src="{{ asset('media/academic/2 Future of Energy Infrastructure.png') }}" alt="">
                </div> 
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/2 Future of Energy Infrastructure.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>         
            </div>   
            </div>
            <hr>
            <a id="5G_future"></a>
            <div class="row">
            <div class="col-md-6">
                <div class="video-container">
                <video class="player" preload controls poster="{{ asset('media/academic/3 IOT for Energy.png') }}">
                    <source src="{{ asset('media/academic/3 IOT for Energy.mp4') }}" type="video/mp4">
                </video>
                <img class="starter hide" src="{{ asset('media/academic/3 IOT for Energy.png') }}" alt="">
                </div>
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/3 IOT for Energy.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>             
            </div>
                <div class="col-md-6">
                <div class="video-container">
                    <video class="player" preload controls poster="{{ asset('media/academic/4 Future of Electronics.png') }}">
                    <source src="{{ asset('media/academic/4 Future of Electronics.mp4') }}" type="video/mp4">
                    </video>
                    <img class="starter hide" src="{{ asset('media/academic/4 Future of Electronics.png') }}" alt="">
                </div>         
                    <div class="caption" align="center">
                    <a href="{{ asset('media/academic/4 Future of Electronics.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                    </div>
                </div>
            </div>
            <a id="combating"></a>
            <div class="row">
            <div class="col-md-6">
                <div class="video-container">
                <video class="player" preload controls poster="{{ asset('media/academic/5 Combating Cyber crime.png') }}">
                    <source src="{{ asset('media/academic/5 Combating Cyber crime.mp4') }}" type="video/mp4">
                </video>
                <img class="starter hide" src="{{ asset('media/academic/5 Combating Cyber crime.png') }}" alt="">
                </div> 
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/5 Combating Cyber crime.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>          
            </div>
            <div class="col-md-6">
                <div class="video-container">
                <video class="player" preload controls poster="{{ asset('media/academic/6 Career Internationalization.png') }}">
                    <source src="{{ asset('media/academic/6 Career Internationalization.mp4') }}" type="video/mp4">
                </video>
                    <img class="starter hide" src="{{ asset('media/academic/6 Career Internationalization.png') }}" alt="">
                </div> 
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/6 Career Internationalization.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>         
            </div>   
            </div>
            <a id="innovations"></a>
            <div class="row">
            <div class="col-md-6">
                <div class="video-container">
                <video class="player" preload controls poster="{{ asset('media/academic/7 Recent AI Innovations.png') }}">
                    <source src="{{ asset('media/academic/7 Recent AI Innovations.mp4') }}" type="video/mp4">
                </video>
                <img class="starter hide" src="{{ asset('media/academic/7 Recent AI Innovations.png') }}" alt="">
                </div> 
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/7 Recent AI Innovations.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>          
            </div>
            <div class="col-md-6">
                <div class="video-container">
                <video class="player" preload controls poster="{{ asset('media/academic/8 Renwable Energy.png') }}">
                    <source src="{{ asset('media/academic/8 Renwable Energy.mp4') }}" type="video/mp4">
                </video>
                    <img class="starter hide" src="{{ asset('media/academic/8 Renwable Energy.png') }}" alt="">
                </div> 
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/8 Renwable Energy.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>         
            </div>   
            </div>
            <a id="renewable"></a>
            <div class="row">
            <div class="col-md-6">
                <div class="video-container">
                <video class="player" preload controls poster="{{ asset('media/academic/9 Smart Optimization.png') }}">
                    <source src="{{ asset('media/academic/9 Smart Optimization.mp4') }}" type="video/mp4">
                </video>
                <img class="starter hide" src="{{ asset('media/academic/9 Smart Optimization.png') }}" alt="">
                </div> 
                <div class="caption" align="center">
                <a href="{{ asset('media/academic/9 Smart Optimization.mp4') }}" target="_blank"><button type="button" class="btn btn-success btn-rounded btn-sm"><em>Download</em></button></a>
                </div>          
            </div>  
            </div>
        </div>
    </section>    
    </div>

@endsection