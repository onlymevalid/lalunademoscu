<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <div id="main-wrapper">
        <div class="nav-header">
            <a class="brand-logo" href="{{ url('/') }}">
                <img alt="" class="logo-abbr" src="{{ asset('images/logo-full.png') }}"> 
                {{-- <img alt="" class="logo-compact" src="{{ asset('images/logo-text.png') }}"> 
                <img alt="" class="brand-title" src="{{ asset('images/logo-text.png') }}"> --}}
            </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" role="button"><img alt="" src="{{ asset('images/profile/17.jpg') }}" width="20">
                                    <div class="header-info">
                                        <span class="text-black">{{ Auth::user()->name }}</span>
                                        <p class="fs-12 mb-0">
                                            Super Admin
                                        </p>
                                    </div></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item ai-icon" href="app-profile.html"><svg class="text-primary" fill="none" height="18" id="icon-user1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                        </path>
                                        <circle cx="12" cy="7" r="4">
                                        </circle></svg> <span class="ml-2">Profile</span></a> 

                                        <a class="dropdown-item ai-icon" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><svg class="text-danger" fill="none" height="18" id="icon-logout" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                        </path>
                                        <polyline points="16 17 21 12 16 7">
                                        </polyline>
                                        <line x1="21" x2="9" y1="12" y2="12">
                                        </line></svg> <span class="ml-2">{{ __('Logout') }}

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></span></a>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="dlabnav">
                <div class="dlabnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li>
                            <a aria-expanded="false" class="ai-icon" href="javascript:void()"><i class="flaticon-381-networking"></i> <span class="nav-text">Dashboard</span></a>
                        </li>
                        <li>
                            <a aria-expanded="false" class="ai-icon" href="{{ route('admin.userlist') }}"><i class="flaticon-381-user"></i> <span class="nav-text">Users</span></a>
                        </li>

                        <li>
                            <a aria-expanded="false" class="has-arrow ai-icon" href="javascript:void()"><i class="flaticon-381-television"></i> <span class="nav-text">Apps</span></a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="app-profile.html">Profile</a>
                                </li>

                                <li>
                                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">Email</a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="email-compose.html">Compose</a>
                                        </li>

                                        <li>
                                            <a href="email-inbox.html">Inbox</a>
                                        </li>

                                        <li>
                                            <a href="email-read.html">Read</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="app-calender.html">Calendar</a>
                                </li>

                                <li>
                                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">Shop</a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="ecom-product-grid.html">Product Grid</a>
                                        </li>

                                        <li>
                                            <a href="ecom-product-list.html">Product List</a>
                                        </li>

                                        <li>
                                            <a href="ecom-product-detail.html">Product Details</a>
                                        </li>

                                        <li>
                                            <a href="ecom-product-order.html">Order</a>
                                        </li>

                                        <li>
                                            <a href="ecom-checkout.html">Checkout</a>
                                        </li>

                                        <li>
                                            <a href="ecom-invoice.html">Invoice</a>
                                        </li>

                                        <li>
                                            <a href="ecom-customers.html">Customers</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a aria-expanded="false" class="has-arrow ai-icon" href="javascript:void()"><i class="flaticon-381-controls-3"></i> <span class="nav-text">Charts</span></a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="chart-flot.html">Flot</a>
                                </li>

                                <li>
                                    <a href="chart-morris.html">Morris</a>
                                </li>

                                <li>
                                    <a href="chart-chartjs.html">Chartjs</a>
                                </li>

                                <li>
                                    <a href="chart-chartist.html">Chartist</a>
                                </li>

                                <li>
                                    <a href="chart-sparkline.html">Sparkline</a>
                                </li>

                                <li>
                                    <a href="chart-peity.html">Peity</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a aria-expanded="false" class="has-arrow ai-icon" href="javascript:void()"><i class="flaticon-381-internet"></i> <span class="nav-text">Bootstrap</span></a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="ui-accordion.html">Accordion</a>
                                </li>

                                <li>
                                    <a href="ui-alert.html">Alert</a>
                                </li>

                                <li>
                                    <a href="ui-badge.html">Badge</a>
                                </li>

                                <li>
                                    <a href="ui-button.html">Button</a>
                                </li>

                                <li>
                                    <a href="ui-modal.html">Modal</a>
                                </li>

                                <li>
                                    <a href="ui-button-group.html">Button Group</a>
                                </li>

                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>

                                <li>
                                    <a href="ui-media-object.html">Media Object</a>
                                </li>

                                <li>
                                    <a href="ui-card.html">Cards</a>
                                </li>

                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>

                                <li>
                                    <a href="ui-dropdown.html">Dropdown</a>
                                </li>

                                <li>
                                    <a href="ui-popover.html">Popover</a>
                                </li>

                                <li>
                                    <a href="ui-progressbar.html">Progressbar</a>
                                </li>

                                <li>
                                    <a href="ui-tab.html">Tab</a>
                                </li>

                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>

                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>

                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a aria-expanded="false" class="has-arrow ai-icon" href="javascript:void()"><i class="flaticon-381-heart"></i> <span class="nav-text">Plugins</span></a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="uc-select2.html">Select 2</a>
                                </li>

                                <li>
                                    <a href="uc-nestable.html">Nestedable</a>
                                </li>

                                <li>
                                    <a href="uc-noui-slider.html">Noui Slider</a>
                                </li>

                                <li>
                                    <a href="uc-sweetalert.html">Sweet Alert</a>
                                </li>

                                <li>
                                    <a href="uc-toastr.html">Toastr</a>
                                </li>

                                <li>
                                    <a href="map-jqvmap.html">Jqv Map</a>
                                </li>

                                <li>
                                    <a href="uc-lightgallery.html">Light Gallery</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a aria-expanded="false" class="ai-icon" href="widget-basic.html"><i class="flaticon-381-settings-2"></i> <span class="nav-text">Widget</span></a>
                        </li>

                        <li>
                            <a aria-expanded="false" class="has-arrow ai-icon" href="javascript:void()"><i class="flaticon-381-notepad"></i> <span class="nav-text">Forms</span></a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="form-element.html">Form Elements</a>
                                </li>

                                <li>
                                    <a href="form-wizard.html">Wizard</a>
                                </li>

                                <li>
                                    <a href="form-editor-summernote.html">Summernote</a>
                                </li>

                                <li>
                                    <a href="form-pickers.html">Pickers</a>
                                </li>

                                <li>
                                    <a href="form-validation-jquery.html">Jquery Validate</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a aria-expanded="false" class="has-arrow ai-icon" href="javascript:void()"><i class="flaticon-381-network"></i> <span class="nav-text">Table</span></a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="table-bootstrap-basic.html">Bootstrap</a>
                                </li>

                                <li>
                                    <a href="table-datatable-basic.html">Datatable</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a aria-expanded="false" class="has-arrow ai-icon" href="javascript:void()"><i class="flaticon-381-layer-1"></i> <span class="nav-text">Pages</span></a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="page-register.html">Register</a>
                                </li>

                                <li>
                                    <a href="page-login.html">Login</a>
                                </li>

                                <li>
                                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">Error</a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="page-error-400.html">Error 400</a>
                                        </li>

                                        <li>
                                            <a href="page-error-403.html">Error 403</a>
                                        </li>

                                        <li>
                                            <a href="page-error-404.html">Error 404</a>
                                        </li>

                                        <li>
                                            <a href="page-error-500.html">Error 500</a>
                                        </li>

                                        <li>
                                            <a href="page-error-503.html">Error 503</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="page-lock-screen.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-body">
                <div class="container-fluid">
                    @yield('content')                    
                </div>
            </div>
        </div>
    </div>
<div>
    @include('partials.javascripts')
</body>
</html>
