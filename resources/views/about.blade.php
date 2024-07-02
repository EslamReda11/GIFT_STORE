@extends('layout')
@section('title')
GIFT STORE-About
@endsection
@section('keywords')
@endsection
@section('description')
@endsection
@section('content')
<link href="{{asset('assets/css/ButtonObour.css')}}" rel="stylesheet">

    <div align="center" style="background:cadetblue;padding:20px;">
        <h3 class="black-text" style="font-weight:bold;margin-top:15px;">THE GIFT STORE STORY</h3>
        <p class="white-text" style="font-weight:bold;">JOURNEY OF GIFT STORE FROM IDEATION TO STARTUP</p>
    </div>

    <div class="container-fluid" style="background:white;font-family: 'Balsamiq Sans', cursive;">
        <div class="row px-5">
            <div class="col-md-12">
                <div align="center" style="padding: 20px">
                    <p class="col-md-4">
                        <img src="{{ url('assets/img/LogoGIFTSTORE.png') }}" class="img-fluid">
                    </p>
                </div>
                <p style="text-align: justify;font-weight:bold;font-size:x-large">Computer engineering students</p>
                <p style="font-size:large;text-align:justify;">Three ambitious computer engineering students embarked on a remarkable
                    journey during their final year at university.
                    Their graduation project wasn't just an academic requirement; it was the beginning of an entrepreneurial
                    adventure that
                    would ultimately lead to the creation of a thriving startup - The Gift Store.
                    The idea sprouted during one of their brainstorming sessions, fueled by a desire to utilize their
                    technical skills to solve a real-world problem.
                    With a shared passion for both technology and entrepreneurship, they set their sights on developing an
                    online platform where people could easily browse and purchase gifts for any occasion.
                    The journey began with intensive research, as they delved into market trends, consumer behavior, and
                    e-commerce platforms. They analyzed existing websites, identifying strengths, weaknesses,
                    and untapped opportunities. Armed with insights, they began drafting a comprehensive plan for their own
                    platform, envisioning a user-friendly interface, personalized recommendations, and seamless transaction
                    processes.</p> <br>




                <!--Team Starts Here-->
                <div id="Team">
                    <div id="teaminthedesktopmode" class="container" align="center">
                        @include('components.teamindesktopmode')
                    </div>
                    <div id="teaminthemobilemode" class="container" align="center">
                        @include('components.teaminmobilemode')
                    </div><br>
                </div>
                <!--Team Ends Here-->
                <!-- ======= Contact Section Starts Here ======= -->


                <p style="font-size:large;text-align: justify;">With a clear roadmap in hand, the students dove into the development phase.
                    Combining their expertise in programming languages, web development, and database management, they
                    worked tirelessly to bring their vision to life. Countless hours were spent coding, debugging, and
                    refining the website, ensuring it met their standards of functionality and aesthetics.

                    As they progressed, they encountered inevitable challenges and setbacks. From technical glitches to
                    design inconsistencies, each obstacle tested their resolve and ingenuity. Yet, they embraced these
                    challenges as opportunities for growth, learning valuable lessons along the way.

                    With the website nearing completion, the students turned their attention to marketing and promotion.
                    Leveraging their network and social media platforms, they generated buzz around The Gift Store, teasing
                    its upcoming launch and showcasing sneak peeks of its features. They also reached out to influencers and
                    bloggers, securing partnerships that would help amplify their reach.</p>

            </div>


            <div align="center" class="col-md-12">
                <div class="col-md-8  ">

                    <h1 align="center" class="black-text" style="font-weight:bold;">GALLARY</h1>

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <div class="carousel-item active">
                                <div class="view">
                                    <img class="d-block w-100" src="{{ url('Img/Gallary/Obour.JPEG') }}" alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive"></h3>
                                    <p></p>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="view">
                                    <img class="d-block w-100" src="{{ url('Img/Gallary/1.jpg') }}" alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="view">
                                    <img class="d-block w-100" src="{{ url('Img/Gallary/2.jpg') }}" alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="view">
                                    <img class="d-block w-100" src="{{ url('Img/Gallary/3.jpg') }}" alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="view">
                                    <img class="d-block w-100" src="{{ url('Img/Gallary/4.jpg') }}" alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="view">
                                    <img class="d-block w-100" src="{{ url('Img/Gallary/5.jpg') }}" alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                </div>
                            </div>

                        </div>

                        <!--/.Slides -->


                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
            </div>
            <div align="center" class="col-md-3"> </div>
            <div align="left" class="col-md-6 mx-3">
                <br> <br>
                <div style="display:flex;">
                    <span class="black-text">About the Institute &#8594;</span>
                    <a href="about_obour"  class="Btn" target="_blank" title="Click" >&#9829; O H I &#9829;</a>
                </div>
            </div>
        </div>
        <br><br>

    </div>
@endsection
