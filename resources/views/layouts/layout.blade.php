<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{asset('storage/imagem/icon/favicon.png')}}" type="image/x-icon">
    <title>@yield('title','')</title>
</head>

<body>
    @yield('content')

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
