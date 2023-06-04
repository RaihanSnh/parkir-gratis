<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Pendataan Kendaraan Siswa</title>

    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Font Awesome 5 Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- CSS Link --}}
    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">

</head>
<body>
    @include('partials.navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar bg-light h-costum" style="height: 100vh;">
                <p class="text-center disabled" style="color: gray; letter-spacing: 2px; line-height: 1.6;">PARKIR GRATIS</p>
                @include('partials.sidebar')
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
