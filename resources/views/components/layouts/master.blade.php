<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="15e1caf3-4f8b-47d4-ad0c-a4ac37d31ac3" data-blockingmode="auto" type="text/javascript"></script> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Villa Górskie Klimaty')</title>
    <meta name="description" content='@yield('description')'>
    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!--Favicons-->
    @include('partials.favicon')
    <!--Facebook Meta-->
    @include('partials.facebook-meta')
    <!--Fonts-->
    @include('partials.fonts')
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="overflow-x-hidden">

    <!--NAVIGATION-->
    @include('shared.nav.top-bar')
    @include('shared.nav.nav-bar')
    @include('shared.nav.mobile-menu')
    <!--PRELOADER-->
    @include('shared.preloader')

    <div>

        {{ $slot }}
    </div>

    <!--FOOTER-->

    @include('shared.footer')
    @include('shared.mobile-buttons')

    <!--SCRIPTS-->
    {{-- <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script> --}}



</body>

</html>
