@extends('layouts.main')
@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/home/hero.css') }}">
        <link rel="stylesheet" href="css/home/merk.css">
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

        <div class="merk">
            <h2 class="judul">Pilih Merk</h2>
            <p class="desc">Pilih salah satu merek berikut ini untuk mendapat info mobil yang lebih lengkap</p>
            <div class="container-merk-mobil">
                <div class="container-merk-row">
                    <div class="merk-mobil">
                        <img src="assets/img/HYUNDAI.png" alt="">
                        <p>HYUNDAI</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/JEEP.png" alt="">
                        <p>JEEP</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/DAIHATSU.png" alt="">
                        <p>DAIHATSU</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/AUDI.png" alt="">
                        <p>AUDI</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/MITSUBISHI.png" alt="">
                        <p>MITSUBISHI</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/SUZUKI.png" alt="">
                        <p>SUZUKI</p>
                    </div>
                </div>
                <div class="container-merk-row" style="margin-right: 20px">
                    <div class="merk-mobil">
                        <img src="assets/img/VW.png" alt="">
                        <p>VW</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/NISSAN.png" alt="">
                        <p>NISSAN</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/MG.png" alt="">
                        <p>MG</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/MAZDA.png" alt="">
                        <p>MAZDA</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/RENAULT.png" alt="">
                        <p>RENAULT</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/MERCY.png" alt="">
                        <p>MERCEDEZ</p>
                    </div>
                </div>
                <div class="container-merk-row">
                    <div class="merk-mobil">
                        <img src="assets/img/BMW.png" width="128px" alt="">
                        <p>BMW</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/FUSO.png" alt="">
                        <p>FUSO</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/CHEVY.png" alt="">
                        <p>CHEVROLET</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/KIA.png" alt="">
                        <p>KIA</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/LEXUS.png" alt="">
                        <p>LEXUS</p>
                    </div>
                    <div class="merk-mobil">
                        <img src="assets/img/MINI.png" alt="">
                        <p>MINI COOPER</p>
                    </div>
                </div>
            </div>


        </div>
    </body>

    </html>
@endsection
