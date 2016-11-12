<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>reviewzup</title>

    <link rel="stylesheet" href="{{ asset('css/site.css') }}" >
    <script src="js/site.js"></script>
    <style>
        body {
            font-family: 'Lato';
            position: relative;
            background-color: aliceblue;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    @include('layouts.head')
    @yield('content')

    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>
