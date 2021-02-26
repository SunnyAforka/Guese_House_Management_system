<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="/home">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!-- Dark Logo icon -->
                <img class="img-fluid logo" src="{{ url('plugins/images/sfilogo.png') }}" alt="homepage" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text" style="color: #313131">
                    <!-- dark Logo text -->
                    Guest House
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-none d-md-block d-lg-none">
                <li class="nav-item">
                    <a class="nav-toggler nav-link waves-effect waves-light text-white"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ml-auto d-flex align-items-center">

                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class=" in">
                    <form method="GET" action="/search" role="search" class="app-search d-none d-md-block mr-3">
                        <input
                        type="search"
                        name="search"
                        placeholder="Search..."
                        autofocus
                        autocomplete="true"
                        class="form-control mt-0">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li>
                    <a class="profile-pic" href="#">
                        <img src="{{ url('plugins/images/sfilogo.png') }}" alt="user-img" width="36"
                            class="img-circle"><span class="text-white font-medium">{{ Auth::user()->name }}</span></a>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
