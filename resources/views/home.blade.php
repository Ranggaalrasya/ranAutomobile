@extends('layouts.main')
@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Document</title>
    </head>

    <body>
        <div class="hero-section">
            <img src="{{ asset('assets/img/home_hero_section.png') }}" alt="">
            <h2>Kami menciptakan<br>
                lebih banyak sehingga<br>
                Anda membayar lebih<br>
                sedikit</h2>
            <div class="search-bar">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" placeholder="New ALPHARD 2.5GT A/T Premium">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <button type="submit" class="submit"><a>Cari<i class="fa-solid fa-arrow-right arrow"></i></a></button>
            </div>
        </div>
        <div class="form-check form-switch">
        </div>
    </body>

    </html>
@endsection
