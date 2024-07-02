@extends('layouts.app')
@section('title')
GIFT STORE-Reset Your Password
@endsection

@section('keywords')

@endsection

@section('description')
@endsection


@section('content')
 <div align="center" class="container-fluid py-5 my-5 animated bounceIn">

    <div class="col-md-2" >
        <a href="/">
            <img src="{{asset('assets/img/Logo-Square.PNG')}}" class="img-fluid px-2 py-2" style="width:200px;">
        </a>
    </div>
   <h5 class="my-2" >Reset Password</h5>
   <div class="row justify-content-center">
        <div class="col-md-7">
             <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">


                            <div class="col-md-6 p-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 p-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 p-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btaobtn btaobtn-dark px-5 py-2">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>

                    </form>
                       <div class="col-md-12 ">
                        or
                                   <p class="my-2">
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>Back to GIFT STORE</u>
                                           </a>
                                   </p>
                                </div>
        </div>
    </div>
 </div>
 <footer id="footer" class="page-footer font-small  pt-4" style="background:indigo;">
    <div class="container text-center text-md-left">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-lg-8">
                <a href="/">
                    <strong>GIFT STORE</strong>
                </a>
                <br>
                <span>&#169;All Right Reserved . Designed By <a href="https://github.com/EslamReda11" target="_blank"
                        style=" font-family: 'Balsamiq Sans', cursive;"><u>Eng.Eslam Reda</u></a> </span>
                </p>
            </div>
            <div class="col-md-5 col-lg-4 ml-lg-0">
                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/eslam.zizo.9862?mibextid=ZbWKwL"
                                class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://x.com/_EslamReda?t=iyAGPnDPnznfeoVVWK565g&s=09"
                                class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                                {{-- <i class="fab fa-twitter"></i> --}}
                                <img src="{{asset('assets/X_icon.png')}}" alt="" style="width: 15px;height:20px ;">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/eslamreda1236?igsh=NjU4a2R0emNqMjMy"
                                class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/eslam-reda-86a216243/"
                                class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Buttondown --}}
    <div id="bottom"></div>
</footer>

@endsection
