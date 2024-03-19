<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('asserts/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asserts/style.css') }}">
    <style type="text/css">
        @yield('css');
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-1">
            @section('navbar')
                @include('navbar')
            @show
        </div>
        <div class="col-11" style="overflow: hidden;">
            <div class="container">
               @include('sidebar')
               @include('main')
            </div>
            <div class="pt-5"></div>
            <hr>
            <div class="d-flex">
                <h5>Deals of the Day | </h5>
                <h5 style="padding-left: 20px;color:crimson">20:45:12 Left</h5>
                <p class="pp">Views all deal</p>
            </div> 
            <div class="pt-3"></div>
           @include('card')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>