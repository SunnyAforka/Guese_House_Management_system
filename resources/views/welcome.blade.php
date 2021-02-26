<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Guest House Admin Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('plugins/images/sfilogo.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('plugins/bower_components/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newstyle.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito';
                background-image: url("plugins/images/welcomebg.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            .welcome {
                text-align: right;
            }
        </style>
    </head>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
           <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="container">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block welcome">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm underline">Home</a>
                    @else
                    <a name="" id="" class="btn btn-primary" href="{{ route('login') }}" role="button">Kindly Log in here</a>
                    @endauth
                </div>
            @endif
            </div>

        </div>

    </body>
    <script src="{{url('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('js/custom.js')}}"></script>
</html>
