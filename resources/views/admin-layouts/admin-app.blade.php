<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Bookharbor - Buy and sell books online</title>

    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">

    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->


    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/pages/card-analytics.css" />
    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
</head>

<body>


    <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo ">
                    <span class="app-brand-logo demo">
                        <a href="{{route('admin.dashboard')}}"><img src="/images/bookharbor1_logo.png" alt="logo"></a>
                    </span>
                </div>

                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">

                    <li class="menu-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                        <a href="{{route('admin.dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-item {{ (request()->is('admin/users')) ? 'active' : '' }}">
                        <a href="{{route('admin.userlist')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div data-i18n="Users">Users</div>
                        </a>
                    </li>

                    <li class="menu-item {{ (request()->is('admin/coupons')) ? 'active' : '' }}">
                        <a href="{{route('admin.coupon')}}" class="menu-link">
                            <img class="menu-icon tf-icons" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALlJREFUSEvtlbENgzAQRR+iSJcFqNgEimzAFjRski570CIkMknKLECTikREQrJsIn+coFDg1v/8zv9854iVV7Ty+ewAr8OmRR2QeSM0wRXIR6kJeGqxsup9tgqYdEuS2BZA9sUQOjcY945A/UWxG6AA+gk012gpcLNSVmuQAHczdg5wAB6BgBgYfIAKOIeYDpTA5RNgyRNU+Nt6pmqRHXfUTlYssTWORb8cdi1wsmdRSJbemP1H+79FL6fsGxmgSaN3AAAAAElFTkSuQmCC"/>
                            <div data-i18n="Coupons">Coupons</div>
                        </a>
                    </li>

                    <li
                        class="menu-item {{ (request()->is('admin/our-books')) || (request()->is('admin/add-books')) || (request()->is('admin/listed-books')) ? 'active open' : '' }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-book-open"></i>
                            <div data-i18n="Books">Books</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ (request()->is('admin/our-books')) || (request()->is('admin/add-books')) ? 'active' : '' }}">
                                <a href="{{route('admin.our-books')}}" class="menu-link">
                                    <div data-i18n="Our Books">Our Books</div>
                                </a>
                            </li>
                            <li class="menu-item {{ (request()->is('admin/listed-books')) ? 'active' : '' }}">
                                <a href="{{route('admin.listed-books')}}" class="menu-link">
                                    <div data-i18n="Listed Books">Listed Books</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item {{ (request()->is('admin/order-list')) ? 'active' : '' }}">
                        <a href="{{route('admin.admin-orders')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cart-download"></i>
                            <div data-i18n="Orders">Orders</div>
                        </a>
                    </li>

                    {{-- <li class="menu-item {{ (request()->is('admin/promote-book')) ? 'active' : '' }}">
                        <a href="{{route('admin.promote-book')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-voice"></i>
                            <div data-i18n="Promote Book">Promote Book</div>
                        </a>
                    </li> --}}

                    <!-- <li class="menu-item {{ (request()->is('admin/payments')) ? 'active' : '' }}">
                        <a href="{{route('admin.payments')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-wallet"></i>
                            <div data-i18n="Payments">Payments</div>
                        </a>
                    </li> -->

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <!-- <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                    <i class="bx bx-search bx-sm"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div> -->
                        <!-- /Search -->
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="https://www.gravatar.com/avatar/EMAIL_MD5?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{{Auth::user()->first_name}}+{{Auth::user()->last_name}}/128" alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="https://www.gravatar.com/avatar/EMAIL_MD5?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{{Auth::user()->first_name}}+{{Auth::user()->last_name}}/128" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->


                        </ul>
                    </div>


                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>


                </nav>



                <!-- / Navbar -->

                @yield('admin-content')

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>
                            Bookharbor
                        </div>
                        <div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <!-- Core JS -->
                <!-- build:js /assets/vendor/js/core.js -->
                <script src="/assets/vendor/libs/jquery/jquery.js"></script>
                <script src="/assets/vendor/libs/popper/popper.js"></script>
                <script src="/assets/vendor/js/bootstrap.js"></script>
                <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

                <script src="/assets/vendor/libs/hammer/hammer.js"></script>
                <script src="/assets/vendor/libs/i18n/i18n.js"></script>
                <script src="/assets/vendor/libs/typeahead-js/typeahead.js"></script>

                <script src="/assets/vendor/js/menu.js"></script>
                <!-- endbuild -->

                <!-- Vendors JS -->
                <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>
                <script src="/assets/vendor/libs/cleavejs/cleave.js"></script>

                <!-- Main JS -->
                <script src="/assets/js/main.js"></script>

                <!-- Page JS -->
                <script src="/assets/js/dashboards-ecommerce.js"></script>

                @stack('scripts')

</body>

</html>

<!-- beautify ignore:end -->
