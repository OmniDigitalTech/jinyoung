<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jinyoung</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/style.css') }}">

    <script src="https://kit.fontawesome.com/6d3db1e240.js" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
    @yield('content')
    <script src="{{ URL::asset('template/js/bootstrap.bundle.min.js') }}"</script>
</body>
</html>
