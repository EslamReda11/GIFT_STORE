@extends('layout')
@section('title') GIFT STORE -500 page @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') @endsection
@section('content')

 <style>

@media (min-width: 768px)
{
    .not_found_image
    {
        width:60%;
        margin-top:-10%;
    }
}
@media (max-width: 768px)
{
    .not_found_image
    {
        width:100%;

    }
}
 </style>
<div align="center"  style=" background-color:#DADADA;padding:10%;">


              <img src="{{asset('Img/500.png')}}"  class="not_found_image"   >

                <p>Sorry for your inconvenience! We will solve it soon...</p>


</div>
@endsection
