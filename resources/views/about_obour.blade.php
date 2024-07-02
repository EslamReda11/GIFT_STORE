@extends('layout')
@section('title')
GIFT STORE-OHI
@endsection
@section('keywords')
@endsection
@section('description')
@endsection
@section('content')
<link href="{{asset('assets/css/obour.css')}}" rel="stylesheet">

<header>
    <a href="https://www.ohie.edu.eg/ar" target="_blank" title="go to OHI" class="logoobour"><img src="{{ asset('assets/obourIMAGES/logoOHI.jpg')}}" alt="will not show"/> </a>
  </header> <br><br>

  <main>
    <div class="content">
      <h1 class="h1t">About the Institute</h1><br>
      <a href="https://www.ohie.edu.eg/ar" target="_blank" title="go to OHI" class="logoG"><img src="{{ asset('assets/obourIMAGES/imageOHI.png')}}" alt="will not show" class="imglogoG" /></a>
      <a href="https://www.facebook.com/ohi1996/" target="_blank" title="go to OHI" class="FACEico"><img src="{{ asset('assets/obourIMAGES/facebook.ico')}}" alt="will not show" class="imgFACEico"/></a><br>

      <p class="p22">Obour Higher Institute is one of the oldest institutes
      in the field of engineering and technology in Egypt, located on an area of ten acres
      The institute was established pursuant to Ministerial Resolution No. 581 dated 12/5/1996
      and is accredited by the Supreme Council of Universities, the Ministry of Higher Education, and the Egyptian Syndicate of Engineers.</p><br>

      <h1 class="h2t">The institute grants a bachelor's degree in engineering to the following subjects</h1>

      <p class="p22">&#8594;Electronics and communications engineering and technology</p>

      <p class="p22">&#8594;Computer engineering and technology and control systems</p>

      <p class="p22">&#8594;Architecture Engineering</p>

      <p class="p22">&#8594;Construction engineering and technology</p> <br><br>


      <div class="BG">
        <div class="section1">
          <div class="card">
            <div class="card-image-container" >
              <img src="{{ asset('assets/obourIMAGES/Iman.jpg')}}" alt="will not show" style="width: 100%; height:80%;">
            </div>
              <p class="card-title">Mr. Dr.Iman Anwar Al-Shami</p><br>
              <p class="card-des">Dean of the Institute</p>
          </div>

          <div class="card" style="margin-left: 50px;margin-right: 50px;">
            <div class="card-image-container" >
              <img src="{{ asset('assets/obourIMAGES/Vivian.jpg')}}" alt="will not show" style="width: 100%; height:80%;";>
            </div>
              <p class="card-title">Prof. Vivian Hana</p>
              <p class="card-des">Head of the Electrical Engineering Department</p>
          </div>

          <div class="card">
            <div class="card-image-container">
              <img src= "{{ asset('assets/obourIMAGES/DrEssamZaki.jpg')}}" alt="will not show" style="width: 100%; height:80%;">
            </div>
              <p class="card-title">DR.Essam Zaki</p><br>
              <p class="card-des">Project Supervisor</p>
          </div>
        </div><br>



      <div class="gallery-container">
        <div class="gallery">
          <div class="images">
            <img src="{{ asset('assets/obourIMAGES/1.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/2.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/3.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/4.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/5.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/6.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/7.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/8.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/9.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/10.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/11.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/12.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/13.jpg')}}" alt="Image 3">
            <img src="{{ asset('assets/obourIMAGES/14.jpg')}}" alt="Image 3">
          </div>
        </div>
      </div>
    </div>
   </div>
  </main><br>
@endsection
