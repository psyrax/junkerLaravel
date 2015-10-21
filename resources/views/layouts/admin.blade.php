<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo asset('/css/app.css'); ?>" rel="stylesheet">
        <title>JunkerHQ ADMIN</title>
    </head>
    <body>
        @include('layouts.adminnav')
        <div class="container">
            @yield('content')
        </div>
        <script src="<?php echo asset('/js/vendor.js');?>"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
        <script src="<?php echo asset('/js/admin.js');?>"></script>
    </body>
</html>