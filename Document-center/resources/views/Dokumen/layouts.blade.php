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
                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <!-- <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div> -->
                            <!-- <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar style="max-height: 320px;">
                                    item
                                    <div class="dropdown-header">
                                        <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                    </div>
                                    <div class="dropdown-item bg-transparent text-wrap">
                                        <a href="index-2.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                            setup <i class="mdi mdi-magnify ms-1"></i></a>
                                        <a href="index-2.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                            <i class="mdi mdi-magnify ms-1"></i>
                                        </a>
                                    </div>
                                    item
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                    </div>
                                    item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Analytics Dashboard</span>
                                    </a>
                                    item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>
                                    item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>
                                    item
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                    </div>
                                    <div class="notification-list">
                                        item
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                item
                                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                    <div class="d-flex">
                                                        <img src="{{ asset('assets') }}/images/users/avatar-3.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <h6 class="m-0">David Grasso</h6>
                                                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-1">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results
                                        <i class="ri-arrow-right-line ms-1"></i>
                                    </a>
                                </div>
                            </div> -->
                        </form>
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
                            <!-- <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                            Analytics </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-projects.html" class="nav-link" data-key="t-projects">
                                            Projects </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-nft.html" class="nav-link">
                                            <span data-key="t-nft">NFT</span>
                                            <span class="badge badge-pill bg-danger" data-key="t-new">New</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Categories</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('Categories.index') }}" class="nav-link"
                                            data-key="t-calendar"> Petunjuk
                                            Organisasi
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ ('/Sop') }}" class="nav-link" data-key="t-chat"> SOP </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ ('/StandartOrganisasi') }}" class="nav-link" data-key="t-chat">
                                            Standart Organisasi
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ ('/ManagementRisk') }}" class="nav-link" data-key="t-chat">
                                            Manajemen Risiko
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ ('/IAOL') }}" class="nav-link" data-key="t-chat"> IAOL </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ ('/IBPR') }}" class="nav-link" data-key="t-chat"> IBPR </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                                            Email
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarEmail">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox">
                                                        Mailbox </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebaremailTemplates" class="nav-link"
                                                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                        aria-controls="sidebaremailTemplates">
                                                        <span data-key="t-email-templates">Email Templates</span>
                                                        <span class="badge badge-pill bg-danger"
                                                            data-key="t-new">New</span>
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="apps-email-basic.html" class="nav-link"
                                                                    data-key="t-basic-action"> Basic Action </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="apps-email-ecommerce.html" class="nav-link"
                                                                    data-key="t-ecommerce-action"> Ecommerce Action </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li class="nav-item">
                                        <!-- <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarEcommerce"
                                            data-key="t-ecommerce"> Ecommerce 
                                        </a> -->
                                        <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                            <ul class="nav nav-sm flex-column">
                                                <!-- <li class="nav-item">
                                                    <a href="apps-ecommerce-products.html" class="nav-link"
                                                        data-key="t-products"> Products </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-product-details.html" class="nav-link"
                                                        data-key="t-product-Details"> Product Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-add-product.html" class="nav-link"
                                                        data-key="t-create-product"> Create Product </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-orders.html" class="nav-link"
                                                        data-key="t-orders"> Orders </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-order-details.html" class="nav-link"
                                                        data-key="t-order-details"> Order Details </a>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-customers.html" class="nav-link"
                                                        data-key="t-customers"> Customers </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-cart.html" class="nav-link"
                                                        data-key="t-shopping-cart"> Shopping Cart </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-checkout.html" class="nav-link"
                                                        data-key="t-checkout"> Checkout </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-sellers.html" class="nav-link"
                                                        data-key="t-sellers"> Sellers </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-seller-details.html" class="nav-link"
                                                        data-key="t-sellers-details"> Seller Details </a>
                                                </li> -->
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <!-- <li class="nav-item">
                            <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects">Projects
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-projects-list.html" class="nav-link" data-key="t-list"> List </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview">
                                            Overview </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-projects-create.html" class="nav-link"
                                            data-key="t-create-project"> Create Project </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks 
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarTasks">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard">
                                            Kanban Board </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view">
                                            List View </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details">
                                            Task Details </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM </a>
                            <div class="collapse menu-dropdown" id="sidebarCRM">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts">
                                            Contacts </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies">
                                            Companies </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals"> Deals </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads"> Leads </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCrypto"> Crypto </a>
                            <div class="collapse menu-dropdown" id="sidebarCrypto">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-crypto-transactions.html" class="nav-link"
                                            data-key="t-transactions"> Transactions </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell"> Buy
                                            & Sell </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders"> Orders
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet"> My
                                            Wallet </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list"> ICO List
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application">
                                            KYC Application </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarInvoices"> Invoices </a>
                            <div class="collapse menu-dropdown" id="sidebarInvoices">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view"> List
                                            View </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-invoices-details.html" class="nav-link" data-key="t-details">
                                            Details </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-invoices-create.html" class="nav-link"
                                            data-key="t-create-invoice"> Create Invoice </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarTickets"> Support Tickets </a>
                            <div class="collapse menu-dropdown" id="sidebarTickets">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view"> List
                                            View </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-tickets-details.html" class="nav-link"
                                            data-key="t-ticket-details"> Ticket Details </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarnft">
                                <span data-key="t-nft-marketplace">NFT Marketplace</span>
                                <span class="badge badge-pill bg-danger" data-key="t-new">New</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarnft">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-nft-marketplace.html" class="nav-link" d ata-key="t-marketplace">
                                            Marketplace </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-explore.html" class="nav-link" data-key="t-explore-now">
                                            Explore Now </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-auction.html" class="nav-link" data-key="t-live-auction"> Live
                                            Auction </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-item-details.html" class="nav-link" data-key="t-item-details">
                                            Item Details </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-collections.html" class="nav-link" data-key="t-collections">
                                            Collections </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-creators.html" class="nav-link" data-key="t-creators">
                                            Creators </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-ranking.html" class="nav-link" data-key="t-ranking"> Ranking
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-wallet.html" class="nav-link" data-key="t-wallet-connect">
                                            Wallet Connect </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-nft-create.html" class="nav-link" data-key="t-create-nft"> Create
                                            NFT </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>
                </div>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="mdi mdi-view-carousel-outline"></i> <span data-key="t-layouts">Layouts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" class="nav-link" target="_blank"
                                    data-key="t-horizontal">Horizontal</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" class="nav-link" target="_blank"
                                    data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" class="nav-link" target="_blank"
                                    data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" class="nav-link" target="_blank"
                                    data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li> end Dashboard Menu -->
                <!-- <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">Pages</span>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarResetPass"
                                    data-key="t-password-reset">Password Reset
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarResetPass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarchangePass"
                                    data-key="t-password-create">
                                    Password Create
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarchangePass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen">
                                    Lock Screen
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLogout">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSuccessMsg"
                                    data-key="t-success-message"> Success Message
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTwoStep"
                                    data-key="t-two-step-verification"> Two Step Verification
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404
                                                Cover </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt">
                                                404 Alt </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline.html" class="nav-link" data-key="t-offline-page">
                                                Offline Page </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-profile.html" class="nav-link" data-key="t-simple-page">
                                                Simple Page </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-profile-settings.html" class="nav-link"
                                                data-key="t-settings"> Settings </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance">
                                    Maintenance </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon">
                                    Coming Soon </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search
                                    Results </a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing.html" class="nav-link" data-key="t-one-page"> One Page </a>
                            </li>
                            <li class="nav-item">
                                <a href="nft-landing.html" class="nav-link"> <span data-key="t-nft-landing">NFT
                                        Landing</span><span class="badge badge-pill bg-danger"
                                        data-key="t-new">New</span></a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarUI">
                        <i class="mdi mdi-cube-outline"></i> <span data-key="t-base-ui">Base UI</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns.html" class="nav-link"
                                            data-key="t-dropdowns">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions.html" class="nav-link"
                                            data-key="t-accordion-collapse">Accordion & Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas.html" class="nav-link"
                                            data-key="t-offcanvas">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders.html" class="nav-link"
                                            data-key="t-placeholders">Placeholders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications.html" class="nav-link"
                                            data-key="t-notifications">Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media
                                            object</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed
                                            Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-typography.html" class="nav-link"
                                            data-key="t-typography">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-utilities.html" class="nav-link"
                                            data-key="t-utilities">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="mdi mdi-layers-triple-outline"></i> <span data-key="t-advance-ui">Advance
                            UI</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet
                                    Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable
                                    List</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar.html" class="nav-link"
                                    data-key="t-scrollbar">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-animation.html" class="nav-link"
                                    data-key="t-animation">Animation</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-tour.html" class="nav-link" data-key="t-tour">Tour</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper
                                    Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight.html" class="nav-link"
                                    data-key="t-highlight">Highlight</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy.html" class="nav-link"
                                    data-key="t-scrollSpy">ScrollSpy</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Widgets</span>
                    </a>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('Dokumen.create') }}" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="mdi mdi-form-select"></i> <span data-key="t-forms">Forms</span>
                    </a> -->
                <!-- <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('Dokumen.create') }}" class="nav-link"
                                    data-key="t-basic-elements">Basic
                                    Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select.html" class="nav-link" data-key="t-form-select"> Form
                                    Select </a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios.html" class="nav-link"
                                    data-key="t-checkboxs-radios">Checkboxs & Radios</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers.html" class="nav-link" data-key="t-pickers"> Pickers </a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input
                                    Masks</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider">
                                    Range Slider </a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File
                                    Uploads</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form
                                    Layouts</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select2.html" class="nav-link"><span data-key="t-select2">Select2</span>
                                    <span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                            </li>
                        </ul>
                    </div> -->
                <!-- </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarTables">
                        <i class="mdi mdi-grid-large"></i> <span data-key="t-tables">Tables</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic
                                    Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables.html" class="nav-link"><span
                                        data-key="t-datatables">Datatables</span> <span
                                        class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="mdi mdi-chart-donut"></i> <span data-key="t-charts">Charts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">
                                    Apexcharts
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="charts-apex-line.html" class="nav-link" data-key="t-line">
                                                Line </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-area.html" class="nav-link" data-key="t-area">
                                                Area </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-column.html" class="nav-link" data-key="t-column">
                                                Column </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar">
                                                Bar </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed"> Mixed
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">
                                                Timeline </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-candlestick.html" class="nav-link"
                                                data-key="t-candlstick"> Candlstick </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot">
                                                Boxplot </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">
                                                Bubble </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">
                                                Scatter </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">
                                                Heatmap </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">
                                                Treemap </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie">
                                                Pie </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radialbar.html" class="nav-link"
                                                data-key="t-radialbar"> Radialbar </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar"> Radar
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">
                                                Polar Area </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs"> Chartjs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-echarts.html" class="nav-link" data-key="t-echarts"> Echarts
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="mdi mdi-android-studio"></i> <span data-key="t-icons">Icons</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-materialdesign.html" class="nav-link"
                                    data-key="t-material-design">Material Design</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-lineawesome.html" class="nav-link" data-key="t-line-awesome">Line
                                    Awesome</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-feather.html" class="nav-link" data-key="t-feather">Feather</a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="mdi mdi-map-marker-outline"></i> <span data-key="t-maps">Maps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google.html" class="nav-link" data-key="t-google">
                                    Google
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                    Vector
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                    Leaflet
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="mdi mdi-share-variant-outline"></i> <span data-key="t-multi-level">Multi
                            Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                    1.2
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarCrm"
                                                data-key="t-level-2.2"> Level 2.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1">
                                                            Level 3.1 </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2">
                                                            Level 3.2 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> -->

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