<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>hello</title>
        {{-- library --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        @yield('css')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        @yield('js')
    </head>
    <body>
        @include('navbar')
        @if (session()->has('email'))
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('sidebar')
                </div>
                <div class="col-md-9">
                    @yield('konten')
                </div>
            </div>
        </div>
        @else
            <div class="container">
                @yield('konten')
            </div>
        @endif
    </body>
</html>