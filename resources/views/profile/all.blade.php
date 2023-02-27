@extends('layouts.main')
@section('container')

    <head>
        <link rel="stylesheet" href="{{ asset('css/profile/profile.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/5e00427037.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg header">
            <d class="container-fluid">
                <a class="navbar-brand header-title" href="#">Halaman Saya</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="header-link" aria-current="page" href="#">Kotak Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="header-link" href="#">Whislist</a>
                    </li>
                    <li class="nav-item">
                        <a class="header-link" href="#">Layanan</a>
                    </li>
                </ul>
                </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container profile-card">
                        @auth
                            <img class="profile-img" src="https://tsoimageprod.azureedge.net/static-content/prod/360degview/FORTUNER_GR/exterior_360/Fortuner_White/fortuner_super-white-1_optimized.png"
                                alt="user-profile-image">
                            <div class="profile-item">
                                <h1 class="profile-name">{{ auth()->user()->name }}</h1>
                                <p class="profile-desc">Anggota Member RanAutoMobile {{ auth()->user()->created_at }}</p>
                            </div>
                            
                        @endauth

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2" class="info-title">
                                        <p>Contact Information</p>
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>No Telp</td>
                                <td>08123456789</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>Jl.Pegangsaan</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>user@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>00-00-00</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>Male</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>



        <div class="container-lg benefit">
            <h1 class="benefit-title">Keuntungan Anggota</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="benefit-card">
                            <div class="benefit-item">
                                <img src="{{ asset('assets/img/profile_carousel_img_2.png') }}" alt="">
                                <p class="benefit-description">Garansi Selama Setahun</p>
                            </div>
                            <div class="benefit-item">
                                <img src="{{ asset('assets/img/profile_carousel_img_2.png') }}" alt="">
                                <p class="benefit-description">Perawatan Gratis Selama Setahun</p>
                            </div>
                            <div class="benefit-item">
                                <img src="{{ asset('assets/img/profile_carousel_img_2.png') }}" alt="">
                                <p class="benefit-description">Tukar Tambah Mobil Anda</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="benefit-card">
                            <div class="benefit-item">
                                <img src="{{ asset('assets/img/profile_carousel_img_2.png') }}" alt="">
                                <p class="benefit-description">Garansi Selama Setahun</p>
                            </div>
                            <div class="benefit-item">
                                <img src="{{ asset('assets/img/profile_carousel_img_2.png') }}" alt="">
                                <p class="benefit-description">Perawatan Gratis Selama Setahun</p>
                            </div>
                            <div class="benefit-item">
                                <img src="{{ asset('assets/img/profile_carousel_img_2.png') }}" alt="">
                                <p class="benefit-description">Tukar Tambah Mobil Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>
@endsection
