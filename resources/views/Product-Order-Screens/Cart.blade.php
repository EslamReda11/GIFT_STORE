@extends('layout')
@section('title')
    GIFT STORE
@endsection
@section('keywords')
    Home,About,Contact,Car
@endsection
@section('description')
    We have a wonderful selection of unique gifts for all occasions from birthdays and weddings to holidays and special
    occasions
    Our store offers a variety of products to suit every taste and preference
    The products are characterized by high quality, rust resistance, scratch resistance, and light weight.
@endsection
@section('content')
    <style>
        @media (min-width: 768px) {
            #cartindesktopmode {
                display: block;
            }

            #cartinmobilemode {
                display: none;
            }
        }

        @media (max-width: 768px) {
            #cartindesktopmode {
                display: none;
            }

            #cartinmobilemode {
                display: block;
            }
        }
    </style>

    <div class="px-5 py-2" style="background:#1CD5E8;margin-top:5px;">
        <h5 class="my-2"> <a href="/" class="black-text">Home></a> <strong class="black-text"> <a href=""
                    class="white-text">Cart </a> </strong> </h5>

    </div>


    <!-- Cart Section Starts Here-->
    <section id="cartindesktopmode">
        @include('components.cartindesktopmode')
    </section>

    <section id="cartinmobilemode">
        @include('components.cartinmobilemode')
    </section>

    <!-- Cart Section Ends Here-->
@endsection
