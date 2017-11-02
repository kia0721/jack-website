<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jack Website</title>

    @yield('css_link')
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom_style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Jack_Website = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <br><br>
        @yield('content')
         
    

        <br><br>
        
    </div>

    <footer class="footer" >
    
        <div class="container">
            <p class="text-xs-center"><strong>Jack Website</strong> | Copyright © Jack Inc. 2017</p>
        </div>
    </footer>

    <!-- Scripts <script src="/js/jquery.min_v1.12.4.js"></script> -->
    

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!--script src="/js/bootstrap.min.js"></script -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/dialog.js') }}"></script>
    @yield('script_link')
</body>
</html>
