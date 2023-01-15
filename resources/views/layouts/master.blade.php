<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="{{asset('e-shop-frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('e-shop-frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('e-shop-frontend/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('e-shop-frontend/css/price-range.css')}}" rel="stylesheet">
        <link href="{{asset('e-shop-frontend/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('e-shop-frontend/css/main.css')}}" rel="stylesheet">


        <title>@yield('title')</title>

        @yield('css')


    </head>
    <body>
            @yield('content')

        {{-- <script src="{{asset('e-shop-frontend/js/jquery.js')}}"></script> --}}
	    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

        <script src="{{asset('e-shop-frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('e-shop-frontend/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('e-shop-frontend/js/price-range.js')}}"></script>
        <script src="{{asset('e-shop-frontend/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('e-shop-frontend/js/main.js')}}"></script>


        @yield('js')
    </body>
</html>