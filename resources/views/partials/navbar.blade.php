<nav class="navbar navbar-expand-lg" style="background-color:white;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="..\assets\img\black_logo.png" height="83" alt="">
        </a>
        <div class="collapse navbar-collapse" style="margin-left: 50px;" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="font-size:19px; font-family: Montserrat; font-weight: 600;"
                        aria-current="page" href="/mobil-baru/all">Mobil Baru</a>
                </li>
                <li class="nav-item" style="margin-left:30px;">
                    <a class="nav-link active" style="font-size:19px; font-family: Montserrat; font-weight: 600;"
                        aria-current="page" href="#">Mobil Second</a>
                </li>
                <li class="nav-item" style="margin-left:30px;">
                    <a class="nav-link active" style="font-size:19px; font-family: Montserrat; font-weight: 600;"
                        aria-current="page" href="#">Contact</a>
                </li>
            </ul>
            @auth
                <li class="nav-item dropdown">
                    <a href="#" class="nav-lin dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a class="dropdown-item" href="/dashboard/index"> <i
                                    class="bi bi-box-arrow-right"></i>Dashboard</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/login/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="bi bi-box-arrow-right"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <button class="btn"
                    style="background: #FFFFFF;
        border: 1px solid #20BFB6;
        border-radius: 4px; margin-right: 20px; height:35px; width:98px;"
                    type="submit">
                    <a href="/login/index" style="text-decoration: none; color: #20BFB6">
                        <p style="font-size:16px; font-family:Montserrat; font-weight: 600; color: #20BFB6;">Masuk</p>
                    </a>
                </button>
                <button class="btn"
                    style="background: #20BFB6;
        border-radius: 4px; margin-right:20px; height:35px; width:98px;"
                    type="submit">
                    <a href="/register/index" style="text-decoration: none; color: #FFF">
                        <p style="font-size:16px; font-family:Montserrat; font-weight: 600;">Daftar</p>
                    </a>

                </button>
            @endauth

        </div>
    </div>
</nav>
