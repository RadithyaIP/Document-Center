<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">


<!-- Mirrored from themesbrand.com/velzon/html/material/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 03:24:08 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Form Upload </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/ship1.png">


    <!-- dropzone css -->
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets') }}/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ route('Dokumen.index') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/ship1.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/ship1.png" alt="" height="17">
                                </span>
                            </a>
                            <span class="logo-sm">
                                <img src="{{ asset('assets') }}/images/ship1.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/ship1.png" alt="" height="17">
                            </span>
                        </div>
                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="mdi mdi-magnify"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-category-alt fs-22'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps <i
                                                    class="ri-arrow-right-s-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="{{ asset('assets') }}/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="{{ asset('assets') }}/images/brands/bitbucket.png"
                                                    alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="{{ asset('assets') }}/images/brands/dribbble.png"
                                                    alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="{{ asset('assets') }}/images/brands/dropbox.png"
                                                    alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="{{ asset('assets') }}/images/brands/mail_chimp.png"
                                                    alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="{{ asset('assets') }}/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>
                        <div class="dropdown ms-sm-3 header-item topbar-user">

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user"
                                            src="{{ asset('assets') }}/images/users/avatar-1.jpg" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                                {{ Auth::user()->name }} </span>
                                            @guest
                                            @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @endif

                                            @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                            @endif
                                            @else
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    </a> <a class="dropdown-item" href="pages-profile.html">
                                        <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                                        <span class="align-middle">Profile</span>
                                    </a>
                                    <a class="dropdown-item" href="pages-faqs.html"><i
                                            class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i>
                                        <span class="align-middle">Help</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-profile-settings.html">
                                        <span class="badge bg-soft-success text-success mt-1 float-end">New</span>
                                        <i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        <i class="mdi mdi-logout text-muted fs-16 align-middle me-1" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"></i>
                                        <span class="align-middle">Logout</span>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                </div>
                                </li>
                                @endguest
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets') }}/images/ship1.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets') }}/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ route('Dokumen.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets') }}/images/ship1.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets') }}/images/logo3.png" alt="" height="30">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('Dokumen.index') }}" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="mdi mdi-speedometer"></i>
                                <span data-key="t-dashboards">Dashboards</span>
                            </a>
                            <a class="nav-link menu-link" href="{{ route('Dokumen.create') }}" role="button"
                                aria-expanded="false" aria-controls="sidebarForms">
                                <i class="mdi mdi-form-select"></i> <span data-key="t-forms">Forms</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Categories</span>
                            </a>
                            @php( $kategoris = \App\Models\Kategori::all() )
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    @foreach($kategoris as $kategori)
                                    <li class="nav-item">
                                        <a href="{{ route('viewKategori', $kategori->id) }}" class="nav-link"
                                            data-key="t-calendar">
                                            {{ $kategori->nama }}
                                        </a>
                                    </li>
                                    @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Form Layout</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Layout</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @yield('content')
            </div>
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                        document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->





    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('assets') }}/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="{{ asset('assets') }}/libs/prismjs/prism.js"></script>

    <script src="{{ asset('assets') }}/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/material/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 03:24:08 GMT -->

</html>