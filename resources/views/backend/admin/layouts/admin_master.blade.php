<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="gradient"
    data-menu-styles="light" data-vertical-style="detached">
<!-- Mirrored from spruko.com/demo/velvet/velvet/dist/html/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 18:42:19 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Velvet - Bootstrap 5 Premium Admin & Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template" />
    <meta name="Author" content="Spruko Technologies Private Limited" />
    <meta name="keywords"
        content="simple admin panel template html css,admin panel html,bootstrap 5 admin template,admin,bootstrap dashboard,bootstrap 5 admin panel template,html and css,admin panel,admin panel html template,simple html template,bootstrap admin template,admin dashboard,admin dashboard template,admin panel template,template dashboard" />
    <!-- Favicon -->
    <link rel="icon" href="https://spruko.com/demo/velvet/velvet/dist/assets/images/brand-logos/fav.ico"
        type="image/x-icon" />
    <!-- Choices JS -->
    <script src="{{ asset('contents/backend/admin') }}/assets/libs/choices.js/public/assets/scripts/choices.min.js">
    </script>
    <!-- Main Theme Js -->
    <script src="{{ asset('contents/backend/admin') }}/assets/js/main.js"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('contents/backend/admin') }}/assets/libs/bootstrap/css/bootstrap.min.css"
        rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
    <!-- Style Css -->
    <link href="{{ asset('contents/backend/admin') }}/assets/css/styles.css" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="{{ asset('contents/backend/admin') }}/assets/css/icons.css" rel="stylesheet" />
    <!-- Node Waves Css -->
    <link href="{{ asset('contents/backend/admin') }}/assets/libs/node-waves/waves.min.css" rel="stylesheet" />
    <!-- Simplebar Css -->
    <link href="{{ asset('contents/backend/admin') }}/assets/libs/simplebar/simplebar.min.css" rel="stylesheet" />
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('contents/backend/admin') }}/assets/libs/flatpickr/flatpickr.min.css" />
    <link rel="stylesheet"
        href="{{ asset('contents/backend/admin') }}/assets/libs/%40simonwep/pickr/themes/nano.min.css" />
    <!-- Choices Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="{{ asset('contents/backend/admin') }}/assets/libs/choices.js/public/assets/styles/choices.min.css" />

    <meta http-equiv="imagetoolbar" content="no" />
</head>

<body>
    <div id="loader" class="d-none">
        <img src="{{ asset('contents/backend/admin') }}/assets/images/media/loader.svg" alt="" />
    </div>

    <div class="page">
        <!-- app-header -->
        @include('backend.admin.layouts.includes.header')
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        @include('backend.admin.layouts.includes.sidebar')
        <!-- End::app-sidebar -->
        <!-- Page Header -->
      @yield('admin_master')
        <!-- End::app-content -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="input-group">
                            <input type="search" class="form-control px-2" placeholder="Search..."
                                aria-label="Username" />
                            <a href="javascript:void(0);" class="input-group-text bg-primary text-white"
                                id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                        </span>
                        <div class="mt-3">
                            <div class="">
                                <p class="fw-semibold text-muted mb-2 fs-13">
                                    Recent Searches
                                </p>
                                <div class="ps-2">
                                    <a href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>People<span></span></a>
                                    <a href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Pages<span></span></a>
                                    <a href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Articles<span></span></a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">
                                    Apps and pages
                                </p>
                                <ul class="ps-2">
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="full-calendar.html"><span><i
                                                    class="bx bx-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i>Calendar</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="mail.html"><span><i
                                                    class="bx bx-envelope me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i>Mail</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="buttons.html"><span><i
                                                    class="bx bx-dice-1 me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i>Buttons</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                <ul class="ps-2">
                                    <li class="p-1 align-items-center mb-1 search-app">
                                        <a href="javascript:void(0)"
                                            class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                                    </li>
                                    <li class="p-1 align-items-center mb-1 search-app">
                                        <a href="javascript:void(0)"
                                            class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-block">
                        <div class="text-center">
                            <a href="javascript:void(0)" class="text-primary text-decoration-underline fs-15">View all
                                results</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted">
                    Copyright © <span id="year">2023</span>
                    <a href="javascript:void(0);" class="text-dark fw-semibold">Velvet</a>. Designed with
                    <span class="bi bi-heart-fill text-danger"></span> by
                    <a href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Spruko</span>
                    </a>
                    All rights reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->

        <script src="{{ asset('contents/backend/admin') }}/assets/libs/flatpickr/flatpickr.min.js"></script>

        <script src="{{ asset('contents/backend/admin') }}/assets/js/date&amp;time_pickers.js"></script>
    </div>
    <script src="{{ asset('contents/backend/admin') }}/assets/libs/flatpickr/flatpickr.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/js/date%26time_pickers.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/libs/%40popperjs/core/umd/popper.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/js/defaultmenu.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="{{ asset('contents/backend/admin') }}/assets/libs/node-waves/waves.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/js/sticky.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/libs/simplebar/simplebar.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/js/simplebar.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/js/ecommerce-dashboard.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/js/custom-switcher.min.js"></script>

    <script src="{{ asset('contents/backend/admin') }}/assets/js/custom.js"></script>
</body>

</html>
