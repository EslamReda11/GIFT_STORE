@extends('layout')
@section('title')
    GIFT STORE
@endsection
@section('keywords')
    Home,About,Contact,Car
@endsection
@section('description')
    Welcome to GIFT STORE, your ultimate online destination for exquisite watches and stylish glasses! At GIFT STORE, we're
    passionate about offering premium quality accessories that not only enhance your look but also stand the test of time.
@endsection
@section('content')
    <style>
        .checked {
            color: orange;
        }

        /* button Oreder Now */
        .buttonO_N {
        width: 180px;
        height: 40px;
        background-image: linear-gradient(rgb(0, 0, 0), rgb(0, 0, 0));
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        cursor: pointer;
        box-shadow: 1px 3px 0px white;
        transition-duration: .3s;
        }

        .cartIconO_N {
        width: 14px;
        height: fit-content;
        }

        .cartIconO_N path {
        fill: white;
        }

        .buttonO_N:active {
        transform: translate(2px ,0px);
        box-shadow: 0px 1px 0px rgb(139, 113, 255);
        padding-bottom: 1px;
        }

        /* button Oreder Now About*/
        .buttonO_N_About {
        width: 180px;
        height: 40px;
        background-image: linear-gradient(rgb(0, 0, 0), rgb(255, 255, 255));
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        cursor: pointer;
        box-shadow: 1px 3px 0px rgb(0, 0, 0);
        transition-duration: .3s;
        }

        .cartIconO_N_About {
        width: 14px;
        height: fit-content;
        }

        .cartIconO_N_About path {
        fill: black;
        }

        .buttonO_N:active {
        transform: translate(2px ,0px);
        box-shadow: 0px 1px 0px rgb(139, 113, 255);
        padding-bottom: 1px;
        }


        /*  button Shop Now*/
        .button_ShopNow {
        font-size:1.2rem ;
        padding: 0.5em 0.8em;
        border-radius:0.5em;
        border: none;
        background-color: #000;
        color: #fff;
        cursor: pointer;
        box-shadow: 2px 2px 3px #000000b4;
        text-align         : center;
        display            : inline-block;
        font-weight        : 400;
        vertical-align     : middle;
        -webkit-user-select: none;
        -moz-user-select   : none;
        -ms-user-select    : none;
        user-select        : none;
        white-space        : nowrap;
        }

        .container_ShopNow {
        font-size:1rem ;
        padding: 0.4em 0.4em;
        text-align         : center;
        display            : inline-block;
        vertical-align     : middle;
        -webkit-user-select: none;
        -moz-user-select   : none;
        -ms-user-select    : none;
        user-select        : none;
        white-space        : nowrap;
        background: linear-gradient(90deg, #03a9f4, #f441a5);
        border-radius:0.9em;
        transition: all 0.4s ease;
        }

        .container_ShopNow::before {
        content: "";
        position: absolute;
        inset:0;
        margin: auto;
        border-radius:  0.9em;
        z-index:-10;
        filter: blur(0);
        transition: filter 0.4s ease;
        }

        .container_ShopNow:hover::before {
        background: linear-gradient(90deg, #03a9f4, #f441a5);
        filter: blur(1.2em);
        }
        .container_ShopNow:active::before {
        filter: blur(0.2em;);
        }




        /* BUTTON_SUBSCRIBE */
        .BUTTON_SUBSCRIBE {
        width: 140px;
        height: 40px;
        border: none;
        border-radius: 10px;
        background: linear-gradient(to right,#77530a,#ffd277,#77530a,#77530a,#ffd277,#77530a);
        background-size: 250%;
        background-position: left;
        color: #ffd277;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition-duration: 1s;
        overflow: hidden;
        }

        .BUTTON_SUBSCRIBE::before {
        position: absolute;
        content: "SUBSCRIBE";
        color: #ffd277;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 97%;
        height: 90%;
        border-radius: 8px;
        transition-duration: 1s;
        background-color: rgba(0, 0, 0, 0.842);
        background-size: 200%;
        }

        .BUTTON_SUBSCRIBE:hover {
        background-position: right;
        transition-duration: 1s;
        }

        .BUTTON_SUBSCRIBE:hover::before {
        background-position: right;
        transition-duration: 1s;
        }

        .BUTTON_SUBSCRIBE:active {
        transform: scale(0.95);
        }



    </style>

    <div id="slide_show_in_desktop_mode">
        @include('components.desktopslideshow')
    </div>
    <div id="slide_show_in_mobile_mode">
        @include('components.mobileslideshow')
    </div>
    <!-- About Starts Here -->
    <script>
        $(document).ready(function() {
            new WOW().init();
            $(".wow").addClass("fadeInLeft");
        });
    </script>



    {{-- about --}}
    <div id="About" class="container-fluid" style="background:white;">
        <br>
        <div class="row ">
            <div class="col-md-4 wow animated zoomIn slow">
                <img src="{{ asset('Img/About.png') }}" alt="" class="img-fluid">
            </div>
            <div align="center" class="col-md-8 wow animated flash slow"><br><br><br>
                    <h2 class="black-text" style="font-weight:bold;">
                        &#9829; about of <span style="color:rgb(255, 40, 40)">GIFT STORE</span> &#9829;
                    </h2>
                <div class="col-md-3" style=" border-bottom: 3px solid #003399;"></div>
                <div class="row my-5" style="font-size:27px; font-family: 'Balsamiq Sans', cursive;">
                    <div class="col-md-6">
                        <ul align="center" style="list-style:none;">
                            <li><i></i>&#9827; Stainless Steel &#9827;</li><br>
                            <li><i></i>&#9827; High Quality &#9827;</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul align="center" style="list-style:none;">
                            <li><i></i>&#9827; Scratch Resistant &#9827;</li><br>
                            <li><i></i>&#9827; LightWeight &#9827;</li>
                        </ul>
                    </div>
                </div>
                <p align="center" class="mx-5" style="margin-top:-30px; font-family: 'Balsamiq Sans', cursive;">
                    {{-- <a href="/#Products" class="btn btn-dark" style="margin-left:50px;">Order Now</a> --}}
                    <a  href="/#Products" class="buttonO_N_About">
                        Order Now
                    <svg class="cartIconO_N" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                    </a>
                </p>
            </div>
        </div><br>
    </div>
    <!-- About completed Here -->









    <!-- Products Starts Here -->

    @php
        $Products = App\Models\Products::where('status', '=', '1')->get();
    @endphp

    <section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast"
        style=" font-family: 'Balsamiq Sans', cursive;">

        <h1 class="black-text" style="font-weight:bold;">PRODUCTS</h1>
        <div align="center">
            <p class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
        </div>
        <div class="row my-4 px-4 " >
            @foreach ($Products as $item)
                <div class="col-md-3 px-4 my-5">
                    <a href="{{ url('Shop/' . $item->url) }}">
                        <img src=" {{ asset('Uploads/Products/' . $item->image1) }}" alt="image" class="img-fluid" style="width:400px;height:300px;background-size:cover; ">
                    </a>
                    <div class="py-2" style="background:white;">
                        <span class="black-text my-3"
                            style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{ $item->name }}</span>
                        <br>
                        Price :  {{ $item->price }} EGP<br>
                        @if ($item->rating == 1)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        @elseif($item->rating == 2)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        @elseif($item->rating == 3)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        @elseif($item->rating == 4)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        @else
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        @endif

                        <br>

                        {{-- button Shop Now --}}
                        <div align="center" class="container_ShopNow">
                            <button align="center" class=" button_ShopNow" onclick="goToShop('{{ url('Shop/' . $item->url) }}')" >Shop Now</button>
                        </div>
                        <script>
                            function goToShop(url) {
                                window.location.href = url;
                            }
                        </script>

                    </div>
                </div>
            @endforeach

        </div>

        <hr class="col-md-6">
    </section>
    <!-- Products Ends Here -->

    <section class="slideanim" id="testimonialsdesktopmode" align="center" style="margin-top:-50px;">

        @include('components.testimonialsdesktopmode')
    </section>

    <section class="slideanim" id="testimonialsmobilemode" align="center" style="margin-top:-70px;">

        @include('components.testimonialsmobilemode')
    </section>


    <section id="Contact" class="contact" style="background:cornflowerblue;">
        <div class="container ">

            <div class="section-title">

                <h2>Contact</h2>
                <p style=" font-family: 'Balsamiq Sans', cursive;"> </p>
            </div>

            <div class="row wow animated zoomIn slow">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div align="left" class="info">
                        <div class="address">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4>Location:</h4>
                            <p> Egypt- Egypt-Qalyubia</p>
                        </div>

                        <div class="email">
                            <i class="fas fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>EslamReda10001@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fas fa-phone"></i>
                            <h4>Call:</h4>
                            <p>Eslam Reda : +201150674192</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d412.8581208194774!2d77.6434072228083!3d14.605726057235447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sADI%20Foundation%2C%20%233%20Akuthotapalli%2C%20SKU%2C%20Anantapur%20-515003!5e1!3m2!1sen!2sin!4v1617198303303!5m2!1sen!2sin"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="send-email" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>

                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Contact Section Ends Here ======= -->
    <p align="center" class="py-2"><br>
        {{-- <button class="btn btn-dark" data-toggle="modal" data-target="#modalSocial">Subscribe to Our News Letter</button> --}}
        <button class="BUTTON_SUBSCRIBE" data-toggle="modal" data-target="#modalSocial"></button>
    </p>


    <!--Modal: modalSocial-->
    <div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">

            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header  darken-3 white-text" style="background-color:#40BFD6;">
                    <h4 class="title"><i class="fas fa-users"></i> Subscribe to Our Newsletter</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>

                <!--Body-->
                <div class="modal-body mb-0 text-center">
                    <form method="POST" action="subscribe-news-letter">
                        @csrf
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required><br>
                        <input type="email" class="form-control" name="email" placeholder="Your Email Id" required>
                        <button class="btn" style="background-color:#40BFD6;">Submit</button>
                    </form>
                </div>

            </div>
            <!--/.Content-->

        </div>
    </div>
    <!--Modal: modalSocial-->


    @if (session('status'))
        <script>
            $(document).ready(function() {

                $('#centralModalSuccess').modal('show');

            });
        </script>
    @endif


    @if ($errors->any())
        <script>
            $(document).ready(function() {

                $('#centralModaldanger').modal('show');

            });
        </script>
    @endif



    <!-- Central Modal Medium Success -->
    <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead"> Success</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>{{ session('status') }} </p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">

                    <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Success-->

    <!-- Central Modal Medium Danger -->
    <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead"> Form Not Submitted </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">

                        <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
                        <p>
                            @if ($errors->any())
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                            @endif
                        </p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">

                    <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Danger-->

@endsection


