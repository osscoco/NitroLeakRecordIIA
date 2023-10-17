<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        @include('shared.imports.header')
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

                <!-- Flashed Message -->
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
        @include('shared.modaux.modal-login')

        <!-- Modal Register -->
        @include('shared.modaux.modal-register')

        <!-- Modal Language -->
        @include('shared.modaux.langage-selection')

        <!-- Modaux Register & Login -->
        @include('shared.clear')

        <!-- Modaux Register & Login -->
        @include('shared.save')

        <!-- Scripts JS --> 
        @include('shared.imports.js')

    </body>
</html>
