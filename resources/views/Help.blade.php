@extends('layout')
@section('title')
   GIFT STORE-Help
@endsection
@section('keywords')
    Home,About,Contact,Car
@endsection
@section('description')
@endsection
@section('content')
    <style>
        @media screen and (max-width: 700px) {
            #helpcenterindesktopmode {
                display: none;
            }

            #helpcenterinmobilemode {
                display: block;
            }
        }

        @media screen and (min-width: 700px) {
            #helpcenterindesktopmode {
                display: block;
            }

            #helpcenterinmobilemode {
                display: none;
            }
        }
    </style>
    <div class="container">
        <div class="row d-flex align-items-center " >
            <section align="center" id="helpcenterindesktopmode">
                <div class="card-deck" style="padding:5%;" >
                    <h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Help Center</h1>

                    <div class="card mb-4 "  >
                        <div class="view overlay" >
                            <img class="card-img-top  animated pulse infinite slow" src="assets/help/1.jpg" alt="Card image cap" style="height: 200px">
                            <a href="{{ url('Frequently-Asked-Questions') }}" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 align="center" class="card-title font-weight-bold">FAQ'S</h4>
                            <a href="{{ url('Frequently-Asked-Questions') }}" align="center" target="_blank" type="button" class="btaobtn btaobtn-outline-primary btn-md  animated pulse infinite slow" style="margin-top: 30px;">Read more</a>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="view overlay">
                            <img class="card-img-top  animated pulse infinite slow" src="assets/help/2.jpg" alt="Card image cap" style="height: 200px">
                            <a href="Shipping-and-Returns" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 align="center" class="card-title font-weight-bold">Shipping and Returns</h4>
                            <a href="{{ url('Shipping-and-Returns') }}" align="center" type="button" target="_blank" class="btaobtn btaobtn-outline-primary  btn-md  animated pulse infinite slow">Read more</a>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="view overlay">
                            <img class="card-img-top  animated pulse infinite slow" src="assets/help/3.jpeg" alt="Card image cap" style="height: 200px">
                            <a href="{{ url('Contact') }}" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 align="center" class="card-title font-weight-bold">Contact Us</h4>
                            <a href="{{ url('Contact') }}" target="_blank" align="center" type="button" class="btaobtn btaobtn-outline-primary  btn-md  animated pulse infinite slow" style="margin-top: 30px;">Read more</a>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="view overlay">
                            <img class="card-img-top  animated pulse infinite slow" src="assets/help/4.jpg" alt="Card image cap" style="height: 200px">
                            <a href="{{ url('Terms-and-Conditions') }}" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 align="center" class="card-title font-weight-bold">Terms and Conditions</h4>
                            <a href="{{ url('Terms-and-Conditions') }}" target="_blank" align="center" type="button" class="btaobtn btaobtn-outline-primary  btn-md  animated pulse infinite slow">Read more</a>
                        </div>
                    </div>

                </div>
            </section>




            <section id="helpcenterinmobilemode" align="center" class="wow fadeInUp" id="featuredproducts">
                <h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Help Center</h1>

                <div align="center" id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div class="col-12 col-md-3">
                                <div class="card mb-2">
                                    <img class="card-img-top  animated pulse infinite slow" src="assets/help/1.jpg" target="_blank" alt="Card image cap">
                                        <a href="{{ url('Frequently-Asked-Questions') }}" target="_blank">
                                    <div class="card-body">
                                        <h4 class="card-title font-weight-bold">FAQ'S</h4>
                                        <a href="{{ url('Frequently-Asked-Questions') }}" target="_blank" class="btn btn-primary btn-md btn-rounded  animated pulse infinite slow">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-12 col-md-3">
                                <div class="card mb-2">
                                    <img class="card-img-top  animated pulse infinite slow" src="assets/help/2.jpg" target="_blank" alt="Card image cap">
                                    <a href="{{ url('Shipping-and-Returns') }}" target="_blank">
                                    <div class="card-body">
                                        <h4 class="card-title font-weight-bold">Shipping & Returns</h4>
                                        <a href="{{ url('Shipping-and-Returns') }}" target="_blank" class="btn btn-primary btn-md btn-rounded  animated pulse infinite slow">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-12 col-md-3">
                                <div class="card mb-2">
                                    <img class="card-img-top  animated pulse infinite slow" src="assets/help/3.jpeg" target="_blank" alt="Card image cap">
                                    <a href="{{ url('Contact') }}" target="_blank">
                                    <div class="card-body">
                                        <h4 class="card-title font-weight-bold">Contact Us</h4>
                                        <a href="{{ url('Contact') }}" target="_blank" class="btn btn-primary btn-md btn-rounded  animated pulse infinite slow">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <div class="carousel-item">
                        <div class="col-12 col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top  animated pulse infinite slow" src="assets/help/4.jpg" target="_blank" alt="Card image cap">
                            <a href="{{ url('Terms-and-Conditions') }}" target="_blank">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Terms and Conditions</h4>
                                    <a href="{{ url('Terms-and-Conditions') }}" target="_blank" class="btn btn-primary btn-md btn-rounded  animated pulse infinite slow">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>





                    <div class="controls-top">
                        <a class="btn btn-primary animated pulse infinite slow" style="border-radius:50px;"
                            href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn btn-primary animated pulse infinite slow" style="border-radius:50px;"
                            href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                    </div>

                </div>
            </section>
        </div>
    </div>
    </section>
    </div>
    </div>
@endsection
