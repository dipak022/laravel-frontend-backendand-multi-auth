<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/html/modern-dark-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:15:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/html/src/assets/img/favicon.ico"/>
    <link href="{{asset('backend')}}/layouts/modern-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/layouts/modern-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{asset('backend')}}/layouts/modern-dark-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('backend')}}/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('backend')}}/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{asset('backend')}}/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
       @include('backend.layouts.header')
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('backend.layouts.sidebar')

        @yield('content')
       

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('backend')}}/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('backend')}}/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="{{asset('backend')}}/src/plugins/src/waves/waves.min.js"></script>
    <script src="{{asset('backend')}}/layouts/modern-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('backend')}}/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="{{asset('backend')}}/src/assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/html/modern-dark-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:16:01 GMT -->
</html>