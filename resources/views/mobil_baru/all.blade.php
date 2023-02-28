@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-lg-4">
            <div class="Filter">
                <h5 class="filter-title">Filter Pencarian.</h5>
                <form action="/mobil-baru/all" method="GET" class="d-inline">
                    <div class="input-group mb-3 search">
                        <input type="text" class="form-control" placeholder="Cari..." aria-label="Recipient's username"
                            aria-describedby="basic-addon2" name="search" value="{{ request('search') }}" />
                        <button class="btn search-icon" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="dropdown dropdown-filter">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kapasitas
                        </button>
                        {{-- <select class="form-select" name="id" id="id">
                            <option value="">Semua Kelas</option>
                            @foreach ($data_mobil as $mobil)
                            @if (request('id') == $mobil->id)
                                <option name="id" value="{{ $mobil->id }}" selected>{{ $mobil->transmisi }}
                                </option>
                            @else
                                <option name="id" value="{{ $mobil->id }}">{{ $mobil->transmisi }}</option>
                            @endif
                        @endforeach
                        </select> --}}
                    </div>
                    <div class="dropdown dropdown-filter">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-filter">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-8" style="margin-left: -25px
        ;">
            <div class="row">
                <div class="new-car">
                    <h1>Mobil Baru</h1>
                    <h4>30 Hasil</h4>
                    <div class="categories">
                        <div class="header">
                            <div class="row" style="margin-bottom: 20px;">
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
                                {{-- <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-1.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>a</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>a</h3>
                                    </div>
                                </div>
                            </div> --}}
                                @foreach ($data_mobil as $mobil)
                                    <div class="col-lg-4" style="margin-bottom: 40px;">
                                        <div class="card-car">
                                            <img class="image-car" src="{{ $mobil->gambar_display }}" alt="">
                                            <div class="desc-car">
                                                <h1>{{ $mobil->nama }}</h1>
                                                <h3>Harga mulai</h3>
                                                <h3> @currency($mobil->harga) </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="col-lg-4">
                                <div class="card-car">
                                    <img src="{{ asset('assets/img/mobil-3.png') }}" alt="">
                                    <div class="desc-car">
                                        <h1>New Rush Gt Sport</h1>
                                        <h3>Harga mulai</h3>
                                        <h3>Rp230.000.000</h3>
                                    </div>
                                </div>
                            </div> --}}
                            </div>
                            {{-- <div class="row">
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
                        </div> --}}
                        </div>
                        <div class="header">
                            <div class="row" style="margin-bottom: 20px
                            ;">
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
                                @foreach ($data_mobil as $mobil)
                                    <div class="col-lg-4" style="margin-bottom: 40px">
                                        <div class="card-car">
                                            <img class="image-car" src="{{ $mobil->gambar_display }}" alt="">
                                            <div class="desc-car">
                                                <h1>{{ $mobil->nama }}</h1>
                                                <h3>Harga mulai</h3>
                                                <h3> @currency($mobil->harga) </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="col-lg-4">
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
                            </div> --}}
                            </div>
                            {{-- <div class="row">
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
                        </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
