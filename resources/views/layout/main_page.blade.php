<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>lakenonaindians</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
        {{-- <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> --}}
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" type="text/css">
        
        
        
        
        
    </head>
    <body>
        <div id="app">
            @include('layout.header')
            @yield('content')
            @include('layout.footer')
        </div>
        
    </body>
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    {{-- <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script> --}}
    <script>
        $(document).ready(function(){
            $(window).bind('mousewheel DOMMouseScroll', function(event){
                if (window.scrollY >= 100 ) {
                    console.log('sdfsfsd', window.scrollY);
                    $('#nav_menu').removeClass('bg-transparent');
                    $('#nav_menu').addClass('bg-dark');
                    $('#nav_menu').addClass('fixed-top');
                    $("#nav_menu").fadeIn("slow");
                    $('#navbar-brand').css('display', 'none');
                } 
                else {
                    console.log('sssssss', window.scrollY);
                    $('#nav_menu').removeClass('bg-dark');
                    $('#nav_menu').addClass('bg-transparent');
                    $('#nav_menu').removeClass('fixed-top');
                    $('#navbar-brand').css('display', 'inherit');
                }
                }
            );
        });
    </script>
    
    
</html>

