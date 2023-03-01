<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/user/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @include('partials.navbar')

    <div class="container-bg-login">
        <div class="login-container-up">
            <div class="back-session">
                <div class="icon">
                    <img src="{{ asset('assets/icons/back-button.png') }}" alt="">
                </div>
                <h3>Kembali</h3>
            </div>
            <div class="form">
                <h3>Masuk Untuk Order Online</h3>
                {{-- make form for login and password --}}
                <form method="POST" action="/login/auth">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn-login">Masuk</button>
                </form>
            </div>
        </div>
        <div class="login-container-down">
            <p>atau</p>
            <div class="login-third-party">
                <div class="icon">
                    <img src="{{ asset('assets/icons/google.png') }}" alt="">
                </div>
                <h3>Masuk dengan akun Google</h3>
            </div>
            <div class="login-third-party">
                <div class="icon">
                    <img src="{{ asset('assets/icons/facebook.png') }}" alt="">
                </div>
                <h3>Masuk dengan akun Facebook</h3>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>
