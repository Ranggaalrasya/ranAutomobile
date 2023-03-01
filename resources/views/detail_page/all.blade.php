@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="container-choice">
                    <div class="container-transmition">
                        <h4>Pilih Transimisi</h4>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="choice-auto">
                                    <h5>Auto</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="choice-manual">
                                    <h5>Manual</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-tipe mt-4">
                        <h4>Pilih Tipe</h4>
                        <div class="tipe-mobil">
                            <p>All New KIJANG INNOVA ZENIX 2.0 Q HV CVT TSS</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="container-color mt-4">
                        <h4>Pilih Warna</h4>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="color-mobil">
                                    <div class="color-mobil-1"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="color-mobil">
                                    <div class="color-mobil-2"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="color-mobil">
                                    <div class="color-mobil-3"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="color-mobil">
                                    <div class="color-mobil-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-transmition mt-4">
                        <h4>Warna Premium</h4>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="choice-auto">
                                    <h5>Premium</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="choice-manual">
                                    <h5>Tidak</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">Tes</div>
            <div class="col-lg-2">
                <div class="container-pesan">
                    <h4 class="text-center">Pesan Sekarang</h4>
                    <p class="text-center">Dapatkan harga terbaik melalui diskusi bersama kami.</p>
                    <div class="btn-via">
                        <i class="fa-brands fa-whatsapp"></i>
                        <p>Via Whatsapp</p>
                    </div>
                    <p class="text-center pt-3">Atau</p>
                    <h4 class="text-center">Via Pesan</h4>
                    <p class="text-center">Isi detail informasi anda dan dapatkan penawaran terbaik dari kami.</p>
                    <form action="">
                        <div class="mb-2">
                            <label for="name" style="font-weight: 700" class="form-label">Nama</label>
                            <input type="text" placeholder="Masukan nama lengkap anda" class="form-control"
                                id="name" aria-describedby="name">
                        </div>
                        <div class="mb-2">
                            <label for="number" style="font-weight: 700" class="form-label">Nomor Whatsapp</label>
                            <input type="number" placeholder="Masukan nomor Whatsapp kamu" class="form-control"
                                id="number" aria-describedby="number">
                        </div>
                        <div class="mb-4">
                            <label for="kota" style="font-weight: 700" class="form-label">Kota</label>
                            <input type="text" placeholder="Kota kamu" class="form-control" id="kota"
                                aria-describedby="kota">
                        </div>
                    </form>
                    <p class="text-center">Kapan anda rencana untuk membeli?</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1"
                                    style="font-size: 12px; font-weight: 600">
                                    Bulan ini
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault2"
                                    style="font-size: 12px; font-weight: 600">
                                    Beberapa bulan
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label"
                                    for="flexRadioDefault3"style="font-size: 12px; font-weight: 600">
                                    Belum tau
                                </label>
                            </div>
                        </div>
                        <button class="btn-kirim" type="submit">
                            <h3>KIRIM</h3>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
