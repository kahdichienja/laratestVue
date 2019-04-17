<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>Window.laravel = { csrfToken:'{{ csrf_token() }}' }</script>

        <title>App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e0e0e0;
                color: #636b6f;
                font-family: 'Roboto', sans;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } */

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            #searchInput{
            margin: 70px 90px 8px 60rem;
            width:50%;
            background-color: #9e9e9e9e;
            border-radius: 5px;
            border-bottom: 0px;
        }
        #liHover:hover{
            text-decoration: none;
            background: white;
        }
        #sidenavLinks{
            position: relative;
            top: -4.25rem;
            left: 3rem;
        }
        div#btnfooter {
            margin-top: -2rem;
            background: #efefef;
        }
        #searchInput::placeholder {
            padding: 20px;
            color: #ffffff;
            font-family: 'Roboto' sans-serif;
        }
        .main-img img,
        .imgs img {
            width: 100%;
            cursor: pointer;
        }

        .imgs {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-gap: 8px;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1.5s ease-in 1 forwards;
        }
            @media (max-width: 650px) {
                #searchInput {
                    margin: 70px 90px 8px 30rem;
                    width: 10%;
                }
                #searchInput::placeholder {
                    padding: 0;
                    background-color: #fff;
                    height: auto;
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div id="app">
                <navbar></navbar>
                <articles></articles>
            </div>
        </div>
        
        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      {{-- assets file --}}
    <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
