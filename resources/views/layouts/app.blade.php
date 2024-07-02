<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/Logo-Square.PNG') }}" rel="icon">
    <link href="{{ asset('assets/img/Logo-Square.PNG') }}" rel="apple-touch-icon">
    <link href="{{ asset('css/responsivecode.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link href="{{ asset('css/richtext.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!--google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Acme&family=Balsamiq+Sans&family=Bowlby+One+SC&family=Fredoka+One&family=Josefin+Sans:wght@700&family=Lobster&display=swap"
        rel="stylesheet">
    <!--google fonts closed-->



    <style>
        /* Modal styles warning message Reset Your Password */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: rgb(254 252 232);
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h5 {
            margin: 0;
        }

        .close {
            font-size: 1.5rem;
            cursor: pointer;
        }

        .modal-body {
            margin-top: 10px;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        /* Button Login and Create Account */
        .button {
            display: block;
  cursor: pointer;
  font-size: 1.6rem;
  border-radius: 16px;
  border: none;
  padding: 2px;
  background: radial-gradient(circle 80px at 80% -10%, #ffffff, #181b1b);
  position: relative;
}
.button::after {
  content: "";
  position: absolute;
  width: 65%;
  height: 60%;
  border-radius: 120px;
  top: 0;
  right: 0;
  box-shadow: 0 0 20px #ffffff38;
  z-index: -1;
}

.blob1 {
  position: absolute;
  width: 70px;
  height: 100%;
  border-radius: 16px;
  bottom: 0;
  left: 0;
  background: radial-gradient(
    circle 60px at 0% 100%,
    #3fe9ff,
    #0000ff80,
    transparent
  );
  box-shadow: -10px 10px 30px #0051ff2d;
}

.inner {
  padding: 14px 25px;
  border-radius: 14px;
  color: #fff;
  z-index: 3;
  position: relative;
  background: radial-gradient(circle 80px at 80% -50%, #777777, #0f1111);
}
.inner::before {
  content: "";
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 14px;
  background: radial-gradient(
    circle 60px at 0% 100%,
    #00e1ff1a,
    #0000ff11,
    transparent
  );
  position: absolute;
}

    </style>

</head>

<body id="body" class="contentfont" style="background:white;">


    @yield('content')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


         {{-- Chatbot --}}
         <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
         <df-messenger
         chat-icon="{{ asset('Img/2.png') }}"
         intent="WELCOME"
         chat-title="GIFT STORE"
         agent-id="cb47dc52-b61f-46da-afa4-5339d7986703"
         language-code="en"
         ></df-messenger>
         <style>
             df-messenger
             {
                --df-messenger-bot-message: #5c3940;
                --df-messenger-button-titlebar-color: #fffff;
                --df-messenger-button-titlebar-font-color:#7d0707;
                --df-messenger-chat-background-color: rgb(226, 190, 179);
                --df-messenger-font-color: #fff;
                --df-messenger-user-message: #4b5863;
             }
             /* 1.png --> https://i.imgur.com/Js3ZB0j.png */
             /* 2.png --> https://i.imgur.com/QLFNYOf.png */

         </style>
         {{-- end Chatbot --}}

</body>

</html>
