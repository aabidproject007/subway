<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    @yield('extra_css')
    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</head>
<body class="nav-md">
<div id="app" class="container body">
    <div class="main_container">

        @include('layouts.elements.side_nav')

            @include('layouts.elements.top_nav')

         @yield('content')


    <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

    </div>
</div>

<!-- Scripts -->
<!-- FastClick -->
<script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('build/js/custom.min.js') }}"></script>
<!-- PNotify -->
<script src="/vendors/pnotify/dist/pnotify.js"></script>
<script src="/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="/vendors/pnotify/dist/pnotify.nonblock.js"></script>

@include('layouts.elements.notification')

@yield('extra_script')
</body>
</html>
