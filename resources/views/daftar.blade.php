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
                <li class="nav-item">
                  <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
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
            <article class="hero pt-5 pb-5 d-flex container">
                <a style="width: 50%;" href="/daftar-pendonor">
                    <div class="pendonor d-flex flex-column mx-auto" >
                        <div class="icon-pendonor align-self-center">
                            <img src="{{asset('/images/icon-pendonor.png')}}" alt="icon pendonor">
                        </div>
                        <div class="pendonor-content text-center mt-5">
                            <h3>Daftar Sebagai Pendonor</h3>
                            <p>Dengan menjadi pendonor, anda dapat membantu sesama dan meringankan beban para pasien yang terdampak covid-19. Daftar dan bantu sesama.</p>                        
                        </div>
                    </div>
                </a>                
                <a style="width: 50%" href="/daftar-donor">
                    <div class="donor d-flex flex-column mx-auto">
                        <div class="icon-donor align-self-center">
                            <img src="{{asset('/images/icon-donor.png')}}" alt="icon donor">
                        </div>
                        <div class="donor-content text-center mt-5">
                            <h3>Daftar Sebagai Pencari Donor</h3>
                            <p>Anda dapat mengajukan permohonan donor plasma darah sehingga dapat membantu pemulihan anda menggunakan plasma darah.</p>                        
                        </div>
                    </div>
                </a>                
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
                    <li><a href="/">Home</a></li>
                    <li><a href="/tentang-kami">Tentang Kami</a></li>
                    <li><a href="/stok-plasma">Stok Plasma</a></li>
                    <li><a href="/kontak">Kontak</a></li>
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