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

</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('snippets.header')

        @include('snippets.aside')

        <main>
            <div class="page-wrapper">

                <div class="page-breadcrumb bg-white">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title text-uppercase font-medium font-14">Sisters' Fellowship Int'l</h4>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <div class="d-md-flex">
                                <a href="/guests/create" class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add New Guest</a>
                                <a href="/room/create" class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add Room type</a>
                                <a href="/ttr/create" class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Update Total No. of Rooms</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>
                <footer class="footer text-center"> 2021 © <a
                    href="https://www.sfiloveinaction.org">Sisters' Fellowship International</a>
                </footer>
            </div>
        </main>
    </div>
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
    <script>
        $(document).ready(function(){
            $('.delete_guest').on('submit', function(){
                if (confirm("Confirm you want to delete this record!")) {
                    return true;
                }else {
                    return false;
                }
            });
        });
    </script>
</body>
</html>
