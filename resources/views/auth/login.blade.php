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

    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Login-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div class="login-clean">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group">
                <input
                id="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}"
                required
                placeholder="Email"
                autocomplete="email"
                autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password"
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password"
                required
                placeholder="Password"
                autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Log In
                </button>
            </div>
            @if (Route::has('password.request'))
                <a class="forgot" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>




<footer class="footer text-center"> 2021 © <a
    href="https://www.sfiloveinaction.org">Sisters' Fellowship International</a>
</footer>
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
</body>
</html>
