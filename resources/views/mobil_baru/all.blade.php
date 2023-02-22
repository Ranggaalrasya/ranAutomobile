@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
            <div class="new-car">
                <h1>Mobil Baru</h1>
                <h4>30 Hasil</h4>
                <div class="categories">
                    <div class="header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tipe">
                                    <h1>SUV</h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="btn-group dropdown-tipe">
                                    <button type="button" class="btn btn-dropdown">Urutkan sesuai</button>
                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Harga</a></li>
                                        <li><a class="dropdown-item" href="#">Spesifikasi</a></li>
                                        <li><a class="dropdown-item" href="#">Best Seller</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cars">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-1.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-2.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-3.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-3.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-1.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-2.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tipe">
                                    <h1>MPV</h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="btn-group dropdown-tipe">
                                    <button type="button" class="btn btn-dropdown">Urutkan sesuai</button>
                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Harga</a></li>
                                        <li><a class="dropdown-item" href="#">Spesifikasi</a></li>
                                        <li><a class="dropdown-item" href="#">Best Seller</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cars">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-1.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-2.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-3.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-3.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-1.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-2.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
