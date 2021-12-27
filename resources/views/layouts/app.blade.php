<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset("assets/icon/favicon.png")}}">

    <title>@yield('title')</title>

    @yield('style')

</head>
<body class="antialiased">
@yield('content')
</body>

@yield('script')
</html>
