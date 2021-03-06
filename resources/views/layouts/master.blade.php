<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Strengthpen - @yield('title')</title>

    <!-- Stylesheets -->
    <link href="/styles/strengthpen.css" rel='stylesheet' type='text/css'>

    <!-- Fonts -->
    <link href="/libs/font-awesome-4.5.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="/libs/bootstrap-3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/libs/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body id="app-layout">
    @include('layouts.includes.navbar')

    @yield('content')

    <!-- JavaScripts -->
    <script src="/libs/jquery-2.2.2/jquery.min.js"></script>
    <script src="/libs/bootstrap-3.3.6/js/bootstrap.min.js"></script>
    <script src="/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="/scripts/strengthpen.js"></script>
</body>
</html>
