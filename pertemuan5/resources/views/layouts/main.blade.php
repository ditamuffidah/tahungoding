<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
    </head>

    <body>
        @include('partials.header')
        @include('partials.navbar')

        <main style="padding:20px">
            @yield('content')
        </main>

        @include('partials.footer')

    </body>
</html>
