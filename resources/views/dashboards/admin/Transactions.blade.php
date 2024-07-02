@extends('layouts.admin')
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
    <div align="center" style="background:#1CD5E8;padding:20px;">
        <h3 class="black-text" style="font-weight:bold;"><a href="{{ url('admin-dash') }}">Admin Dashboard</a></h3>
        <p class="white-text" style="font-weight:bold;">Transaction Details </p>
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif


    </div>


    <!-- Payments Section Starts Here-->
    <section id="mytransactionsindesktopmode">

        @include('components.admin.mytransactionsindesktopmode')
    </section>
    <section id="mytransactionsinmobilemode">

        @include('components.admin.mytransactionsinmobilemode')
    </section>

    <!-- Payments Section Ends Here-->
@endsection
