<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    {{-- add : custom css --}}
    @stack('css')
    <title>{{$title}}</title>
</head>

<body class="bg-dark">
    {{-- add : navbar --}}
    @include('layouts/navbar')
    <hr class="py-1 bg-light mt-0">
    <div class="container mt-3" style="color: white">
        {{-- add section : container --}}
        @yield('container')
    </div>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>

    {{-- add : custom script --}}
    @stack('scripts')
</body>

</html>