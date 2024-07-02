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
   <h5 class="my-2" >Reset Your Password</h5>
   <div class="row justify-content-center">
        <div class="col-md-7">
             {{-- <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div  align="left" class="col-md-6  p-2">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                            <div class="col-md-12">
                                <button type="submit" class="btaobtn btaobtn-dark px-5 py-2">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                    </form> --}}

                    <form id="password-reset-form" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div align="left" class="col-md-6 p-2">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btaobtn btaobtn-dark px-5 py-2">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>

                    <!-- Modal -->
                    <div id="warningModal" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <svg   svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m13 14h-2v-5h2zm0 4h-2v-2h2zm-12 3h22l-11-19z" fill="#393a37"></path></svg>
                                <h5 style="color: red;font-weight: bold">Warning</h5>
                                <span class="close">&times;</span>
                            </div>



                            <div class="modal-body">

                                <p align="center">
                                    <strong style="font-size:larger">Sorry, you do not have the ability to recover your password.<br>
                                                                            To retrieve it, please contact customer service on<a href="https://console.dialogflow.com/api-client/demo/embedded/cb47dc52-b61f-46da-afa4-5339d7986703" target="_blank"
                                            style=" font-family: 'Balsamiq Sans', cursive;"><u> &#9829; GIFT STORE &#9829;</u></a>
                                    </strong>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary">Close</button>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('password-reset-form').addEventListener('submit', function(event) {
                            event.preventDefault();
                            document.getElementById('warningModal').style.display = 'block';
                        });

                        document.querySelector('.close').addEventListener('click', function() {
                            document.getElementById('warningModal').style.display = 'none';
                        });

                        document.querySelector('.btn-secondary').addEventListener('click', function() {
                            document.getElementById('warningModal').style.display = 'none';
                        });

                        window.onclick = function(event) {
                            if (event.target == document.getElementById('warningModal')) {
                                document.getElementById('warningModal').style.display = 'none';
                            }
                        }
                    </script>


                    <div class="col-md-12 ">
                        or
                                   <p class="my-2">
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>Back to GIFT STORE</u>
                                           </a>
                                   </p>
                                </div>
                                             <div class="col-md-12">
                                                 <div class="card-body">
                                                         @if (session('status'))
                                                         <div class="alert alert-success" role="alert">
                                                             <strong>{{ session('status') }}</strong>
                                                        </div>
                                                         @endif
                                                    </div>

                                             </div>
        </div>
    </div>
</div> <br> <br>





<footer id="footer" class="page-footer font-small  pt-4" style="background:indigo;">
    <div class="container text-center text-md-left">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-lg-8">

                <a href="/">
                    <strong>GIFT STORE</strong>
                </a>
                <br>
                <span>&#169;All Right Reserved . Designed By <a href="https://github.com/EslamReda11" target="_blank"
                        style=" font-family: 'Balsamiq Sans', cursive;"><u>Eng.Eslam Reda</u><img src="{{asset('assets/github.png')}}" width="20px" height="20px" alt=""></a> </span>
                </p>
            </div>


            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/EslamReda10001/" target="_blank"><img src="{{asset('assets/facebook.ico')}}" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://x.com/_EslamReda?t=iyAGPnDPnznfeoVVWK565g&s=09" target="_blank"><img src="{{asset('assets/X.png')}}" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/eslamreda1236?igsh=NjU4a2R0emNqMjMy" target="_blank"><img src="{{asset('assets/instagram.png')}}" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/eslam-reda-86a216243/" target="_blank"><img src="{{asset('assets/linkedin.png')}}" width="30px" height="30px" alt=""></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://github.com/EslamReda11" target="_blank"><img src="{{asset('assets/github.png')}}" width="30px" height="30px" alt=""></a>
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
