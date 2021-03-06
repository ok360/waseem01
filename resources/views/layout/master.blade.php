<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Learn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        @yield('css')
</head>
<body>
<div class="container">

    @include('layout.header')

    <div class="row">
            @include('layout.side_menu')
    <div class="col-md-9">
        @yield('body')

    </div>

    </div>

</div>

</body>
</html>
