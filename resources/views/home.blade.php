@extends('layouts.main')
@section('container')
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
    <div class="card-section">
        <div class="grid-section">
            <div class="tagline1">Sedan</div>
            <div class="grid-item">
                <div class="card-item">
                    <img class="card-img" src="assets/img/pngegg 1.png" alt="sedan"></img>
                    <div class="card-content">
                        <div class="card-header">New Corolla Atlas</div>
                        <ul>
                            <li>Dual Zone AC</li>
                            <li>Jok Kulit</li>
                            <li>Stereo</li>
                        </ul>
                        <button class="card-btn"><a href=""></a>Rp120.000.000</button>
                    </div>
                </div>
            </div>
            <div class="tagline2">Sedan</div>
            <div class="grid-item">
                <div class="card-item">
                    <img class="card-img" src="assets/img/Calya 1.png" alt="MPV"></img>
                    <div class="card-content">
                        <div class="card-header">New Calya 2022</div>
                        <ul>
                            <li>Dual SRS Airbag</li>
                            <li>Jok Kulit</li>
                            <li>Stereo</li>
                        </ul>
                        <button class="card-btn"><a href=""></a>Rp200.000.000</button>
                    </div>
                </div>
            </div>
            <div class="tagline3">Sedan</div>
            <div class="grid-item">
                <div class="card-item">
                    <img class="card-img" src="assets/img/aplhard.png" alt="sedan"></img>
                    <div class="card-content">
                        <div class="card-header">Toyota aplhard</div>
                        <ul>
                            <li>Monitor LCD</li>
                            <li>Power Seat</li>
                            <li>Sunroof</li>
                        </ul>
                        <button class="card-btn"><a href=""></a>Rp1.100.000.000</button>
                    </div>
                </div>
            </div>
            <div class="tagline4">Sedan</div>
            <div class="grid-item">
                <div class="card-item">
                    <img class="card-img" src="assets/img/zenix.png" alt="sedan"></img>
                    <div class="card-content">
                        <div class="card-header">Toyota Zenix</div>
                        <ul>
                            <li>Monitor LCD</li>
                            <li>Power Seat</li>
                            <li>Sunroof</li>
                        </ul>
                        <button class="card-btn"><a href=""></a>Rp500.000.000</button>
                    </div>
                </div>
            </div>
            <div class="tagline5">Sedan</div>
            <div class="grid-item">
                <div class="card-item">
                    <img class="card-img" src="assets/img/fortuner.png" alt="sedan"></img>
                    <div class="card-content">
                        <div class="card-header">Toyota Fortuner</div>
                        <ul>
                            <li>Monitor LCD</li>
                            <li>Power Seat</li>
                            <li>Sunroof</li>
                        </ul>
                        <button class="card-btn"><a href=""></a>Rp614.000.000</button>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="merk-mobil" style="margin-left: 20px">
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
    <div class="container review-section">
        <div class="title">
            <p>Review Pengunjung</p>
            <h3>Apa yang orang bilang tentang kami</h3>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active indicator" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" class="indicator"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" class="indicator"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="review-container">
                        <img src="{{ asset('assets/img/home_review_img1.png') }}" alt="" class="review-img">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique laboriosam laborum at
                                sed
                                nesciunt, consequuntur quos inventore quisquam! Eum assumenda esse eveniet corporis
                                iusto, magnam
                                accusamus rem labore sunt fugiat. Lorem ipsum dolor sit amet uidem consequuntur officiis
                                animi,
                                atque corporis incidunt laborum. Dolores, quisquam?</p>
                            <h4>USER 1</h4>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="review-container">
                        <img src="{{ asset('assets/img/home_review_img1.png') }}" alt="" class="review-img">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique laboriosam laborum at
                                sed
                                nesciunt, consequuntur quos inventore quisquam! Eum assumenda esse eveniet corporis
                                iusto, magnam
                                accusamus rem labore sunt fugiat. Lorem ipsum dolor sit amet uidem consequuntur officiis
                                animi,
                                atque corporis incidunt laborum. Dolores, quisquam?</p>
                            <h4>USER 2</h4>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="review-container">
                        <img src="{{ asset('assets/img/home_review_img1.png') }}" alt="" class="review-img">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique laboriosam laborum at
                                sed
                                nesciunt, consequuntur quos inventore quisquam! Eum assumenda esse eveniet corporis
                                iusto, magnam
                                accusamus rem labore sunt fugiat. Lorem ipsum dolor sit amet uidem consequuntur officiis
                                animi,
                                atque corporis incidunt laborum. Dolores, quisquam?</p>
                            <h4>USER 3</h4>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev preview" type="button"
                data-bs-target="#carouselExampleIndicators"data-bs-slide="prev">
                <i class="fa-solid fa-arrow-left-long preview-button"></i>
            </button>
            <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <i class="fa-solid fa-arrow-right-long next-button"></i>
            </button>
        </div>
    </div>
@endsection
