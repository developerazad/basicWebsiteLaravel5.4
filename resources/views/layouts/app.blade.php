<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Basic website | @yield('title')</title>
    </head>

    <body>
        @yield('content')
        @yield('sidebar')
        @section('sidebar2')
            <div class="sidebar2">
                <p>This is another sidebar appended from parent</p>
                @show
            </div>
        @endsection
    </body>
</html>
