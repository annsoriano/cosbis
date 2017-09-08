<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <base href="http://craftbeer.dev"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css\app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css\main.css')}}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body style="background-image: url('{{asset('img/cosbis/loginmidbg.svg')}}')">
    @yield('navigation')
    <div class="container-fluid" style="padding:0; margin:0; height: 100%;">
        @yield('content')

        @yield('js')
    </div>
</body>
</html>