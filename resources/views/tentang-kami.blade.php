<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Plasmo</title>
  </head>
  <body>
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
            <a class="navbar-brand" href="#"><img src="{{asset('/images/logo.png')}}" alt="logo Plasmo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/tentang-kami">Tentang Kami <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/stok-plasma">Stok Plasma</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/kontak">Kontak</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <a href="/masuk"><button type="button" class="outline-primary-btn mr-3">Masuk</button></a>
                <a href="/daftar"><button type="button" class="primary-btn">Daftar</button></a>
            </form>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <article class="hero d-flex pt-5 pb-5 container">
                <div class="tentang-image mr-5">
                    <img src="{{asset('/images/tentang-kami.png')}}" width="80%" alt="gambar hero">
                </div>
                <div class="hero-content align-self-center ml-5" style="width: 80%;">
                    <h1 class="mt-4">Tentang Plasmo</h1>
                    <p class="mt-2">Plasmo adalah sebuah platform yang dikhususkan untuk membantu para pasien terdampak Covid-19 yang membutuhkan Plasma Darah. Platform ini dibuat sebagai bentuk partisipasi kami dalam membantu melawan Covid-19. Kegunaan dari platform kami diantaranya dapat menemukan pendonor plasma darah untuk pasien terdampak covid-19 dan akan bermanfaat bagi pasien yang kesulitan untuk menemukan pendonor. Hal tersebut dapat dicapai dengan menggunakan platform Plasmo yang dapat membantu mempertemukan pendonor dan pasien yang membutuhkan donor plasma darah. Harapannya dengan munculnya aplikasi ini bisa meningkatkan kepedulian masyarakat dalam sama-sama melawan pandemi COVID-19 ini. </p>
                </div>
            </article>
        </section>
        <section class="container">
            <article class="team pt-5 pb-5 d-flex">
                <div class="team-content align-self-center mr-3" style="width: 50%;">
                    <h2 class="mb-2">Team Kami</h2>
                    <p class="mt-2">Kami adalah UI/UX Designer, Front-End Web Developer, dan Back-End Web Developer. Misi kami kali ini adalah untuk membantu sesama terutama masyarakat disekitar kami. Harapan utama dari dibentuknya Plasmo ini agar semua orang yang terdampak covid-19 dan membutuhkan plasma darah untuk terapi dapat menemukannya dengan mudah. Kolaborasi kami antara designer dan developer sangat ciamik sehingga dapat menghasilkan produk yang luar biasa seperti ini. Jika Anda penasaran tentang kami, Anda dapat menekan tombol untuk menghubungi kami dan melihat portofolio kami.</p>
                </div>
                <div class="card figo" style="width: 16rem; margin-right: 30px;">
                    <img src="{{asset('/images/icon-figo.png')}}" width="40%" style="margin: auto; padding-top: 45px;" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3>Figo Perdana Putra</h3>
                        <p class="card-text">Developer</p>
                    </div>
                    <div class="icons d-flex justify-content-center pb-5">
                        <a><i class="fa fa-linkedin-square"></i></a>
                        <a><i class="fa fa-github"></i></a>
                        <a><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card raja" style="width: 16rem;">
                    <img src="{{asset('/images/ico-raja.png')}}" width="40%" style="margin: auto; padding-top: 45px;" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3>Raja Pasha A.Z.F.S.</h3>
                        <p class="card-text">UI Designer | Developer</p>
                    </div>
                    <div class="icons d-flex justify-content-center pb-5">
                        <a href="https://www.linkedin.com/in/raja-pasha-agastya-zukhruf-firdausi-sulaksana-b31250190/" ><i class="fa fa-linkedin-square"></i></a>
                        <a href="https://github.com/rpazfs"><i class="fa fa-github"></i></a>
                        <a href="https://www.instagram.com/rpazfs/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </article>
        </section>
        <section class="kriteria pb-5 pt-5">
            <article class=" container kriteria background-tertarik d-flex">
                <div class="tertarik-image align-self-end ml-5">
                    <img src="{{asset('/images/tertarik.png')}}" width="80%" alt="">
                </div>
                <div class="tertarik-content align-self-center ml-5 pl-5">
                    <div class="upper pb-3">
                        <h2 style="line-height: 0; color:#063726 !important;">Tertarik menjadi pendonor ?</h2>
                        <p style="line-height: 0;">Daftar dan ikuti semua langkahnya :)</p>
                    </div>
                    <button type="button" class="primary-btn-green">Daftar Sekarang</button>
                </div>
            </article>
        </section>
    </main>

    <footer class="container">
        <div class="footer d-flex pt-5">
            <div class="footer-logo" style="width: 100%;" >
                <img src="{{asset('/images/footer-logo.png')}}" alt="logo plasmo">
                <p>Kita hadapi bersama Covid-19</p>
            </div>
            <div class="footer-nav" style="width: 100%;">
                <h4>Navigasi</h4>
                <ul class="nav-bar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="tentang-kami.html">Tentang Kami</a></li>
                    <li><a href="stok-plasma.html">Stok Plasma</a></li>
                    <li><a href="kontak.html">Kontak</a></li>
                </ul>
            </div>
            <div class="more" style="width: 100%;">
                <h4>More</h4>
                <ul class="nav-bar">
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#FAQ">FAQ</a></li>
                </ul>
            </div>
            <div class="alamat" style="width: 100%;">
                <h4>Alamat</h4>
                <p>
                    Jln. Raya Lembang, No 12.
                    Kabupaten Bandung Barat, Kecamatan Lembang.
                    Provinsi Jawa Barat, Indonesia. 40391.
                </p>
            </div>
        </div>
        <p class="text-center mt-5">Copyrights © 2021 by <span style="color: #122D74; font-weight: bold;">Plasmo</span></p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>