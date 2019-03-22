<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Basic Website | @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        @include('inc.navbar')
        @yield('content')
        @include('inc.sidebar')

    </body>
</html>
