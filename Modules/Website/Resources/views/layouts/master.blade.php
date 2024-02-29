<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jinyoung</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css">
    <link rel="shortcut icon" href="{{ URL::asset('template/img/SJI.svg') }}">

    <script src="https://kit.fontawesome.com/6d3db1e240.js" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ URL::asset('template/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
</body>
</html>
