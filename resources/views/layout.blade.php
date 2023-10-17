<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Music">
        <meta name="keywords" content="">
        <meta name="author" content="kamleshyadav">
        <meta name="MobileOptimized" content="320">
        <!--Start Style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/swiper/css/swiper.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/nice_select/nice-select.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/player/volume.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/scroll/jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <!-- Favicon Link -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body class="antialiased">

        <!-- Loader -->
        @include('shared.loader')

        <!----Main Wrapper Start---->
        <div class="ms_main_wrapper">

            @if (!Session::has('UserSession'))

                <!-- SideBarMenu GUEST -->
                @include('shared.sidebars.sidebar-guest')

            @endif

            @if (Session::get('UserSession') == true)

                <!-- SideBarMenu AUTH -->
                @include('shared.sidebars.sidebar-auth')
                
            @endif

            <!---Main Content Start--->
            <div class="ms_content_wrapper padder_top80">
                
                @if (!Session::has('UserSession'))

                    <!-- Header Search Music GUEST -->
                    @include('shared.header.search-music-guest')

                @endif

                @if (Session::get('UserSession') == true && Session::has('UserName'))

                    <!-- Header Search Music AUTH -->
                    @include('shared.header.search-music-auth', ['UserName' => Session::get('UserName')])
                    
                @endif

                @include('shared.flash-messages.flash-message')

                <!-- Main Content -->
                @yield('content')

            </div>

            <!-- SideBarMenu -->
            @include('shared.footer.footer')

            <!-- Audio Player -->
            @include('shared.audio-player')
        </div>

        <!-- Modal Login -->
        @include('shared.modal-login')

        <!-- Modal Register -->
        @include('shared.modal-register')

        <!-- Modal Language -->
        @include('shared.langage-selection')

        <!-- Modaux Register & Login -->
        @include('shared.clear')

        <!-- Modaux Register & Login -->
        @include('shared.save')

        <!-- Scripts JS --> 
        @include('shared.js.js')

    </body>
</html>
