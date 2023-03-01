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
                        <button class="btn search-icon" type="submit" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="dropdown dropdown-filter">
                        <select class="form-select" name="mesin_id" id="mesin_id">
                            <option value="">Kapasitas mesin</option>
                            @foreach ($data_mesin as $mesin)
                                @if (request('mesin_id') == $mesin->id)
                                    <option name="id" value="{{ $mesin->id }}" selected>{{ $mesin->cc }}
                                    </option>
                                @else
                                    <option name="mesin_id" value="{{ $mesin->id }}">{{ $mesin->cc }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-8" style="margin-left: -25px
        ;">
            <div class="row">
                <div class="new-car">
                    <h1>Mobil Baru</h1>
                    <h4>{{ count($data_mobil) }} Hasil</h4>
                    @if (count($data_mobil) > 0)
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
                                </div>
                                <div class="header">
                                    <div class="row" style="margin-bottom: 20px;">
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
                                        @foreach ($data_mobil->reverse() as $mobil)
                                            <div class="col-lg-4" style="margin-bottom: 40px">
                                                <div class="card-car">
                                                    <img class="image-car" src="{{ $mobil->gambar_display }}"
                                                        alt="">
                                                    <div class="desc-car">
                                                        <h1>{{ $mobil->nama }}</h1>
                                                        <h3>Harga mulai</h3>
                                                        <h3> @currency($mobil->harga) </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
