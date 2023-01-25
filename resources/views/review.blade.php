<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home/review.css') }}">
    <script src="https://kit.fontawesome.com/5e00427037.js" crossorigin="anonymous"></script>
    <title>review</title>
</head>

<body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
