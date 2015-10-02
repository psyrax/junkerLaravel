<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo asset('css/app.css'); ?>" rel="stylesheet">
         <title>JunkerHQ - @yield('title')</title>
    </head>
    <body class="junkerBody @yield('bodyClass')">
        @include('layouts.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
        <script src="<?php echo asset('/js/vendor.js');?>"></script>
        <script src="<?php echo asset('js/app.js');?>"></script>
    </body>
</html>