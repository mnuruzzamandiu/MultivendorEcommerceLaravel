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
    <title>Multivendor Ecommerce - @yield('page_title')</title>
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
        @include('backend.admin.includes.header')
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        @include('backend.admin.includes.sidebar')
        <!-- End::app-sidebar -->
        <!-- Page Header -->
      @yield('admin_master')
        <!-- End::app-content -->

        <!-- Footer Start -->
        @include('backend.admin.includes.footer')
        <!-- Footer End -->


        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    @stack('scripts')
</body>

</html>
