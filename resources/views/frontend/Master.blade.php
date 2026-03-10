<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        @include('frontend.include.style')
    </head>
    <body>
        <!-- Navigation-->
        @include('frontend.include.navbar')
        <!-- Page Header-->
        @yield('main')
        <!-- Footer-->
        @include('frontend.include.footer')
        <!-- Bootstrap core JS-->
        @include('frontend.include.script')
    </body>
</html>
