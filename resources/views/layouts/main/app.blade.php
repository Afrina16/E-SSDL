<!doctype html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @include('layouts.shared.style') 

</head>
    <body class="hold-transition sidebar-mini">

        <!-- Wrapper -->
        <div id="app" class="wrapper">

            <!-- Sidebar -->
            @include('layouts.main.sidebar')

            <!-- Main -->
            @include('layouts.main.main')

        </div>

        <!-- Scripts -->
        @include('layouts.shared.script')
            @yield('script')
    </body>
</html>