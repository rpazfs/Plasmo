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
                <li class="nav-item active">
                  <a class="nav-link" href="/kontak">Kontak <span class="sr-only">(current)</span></a>
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
            <article class="hero text-center pt-5 pb-5 container">
                <h1>Kontak Kami</h1>
                <p>Tolong isi informasi anda dan kita bisa terhubung !</p>
            </article>
        </section>
        <section class="kontak">
            <article class="kontak pb-5 d-flex flex-column container">
                <h3>Say Hello!</h3>
                <div class="kontak-form mr-3 d-flex" style="width: 100%;">
                    <form style="width: 80%;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukan nama Anda">
                          </div>
                        <div class="form-group">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email Anda">
                          <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email anda dengan siapapun.</small>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Masukan Pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="primary-btn">Kirim Pesan</button>
                    </form>
                    <div class="contacts ml-5">
                        <div class="alamat-kontak d-flex">
                            <div class="icon-alamat align-self-center mr-3">
                                <i class="fa fa-map"></i>
                            </div>
                            <div class="alamat-kami">
                                <h4 style="color: #063726 !important;">
                                    Alamat
                                </h4>
                                <p style="line-height: 150% !important; margin-bottom: 0 !important;">
                                    Jln. Raya Lembang, No 12. Kabupaten Bandung Barat, Kecamatan Lembang. Provinsi Jawa Barat, Indonesia. 40391.
                                </p>
                            </div>
                        </div>
                        <div class="email d-flex mt-3">
                            <div class="icon-email align-self-center mr-3">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="email-kami">
                                <h4>
                                    Email
                                </h4>
                                <p style="line-height: 150% !important; margin-bottom: 0 !important;">
                                    plasmo.support@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="telepon d-flex mt-3">
                            <div class="icon-telepon align-self-center mr-3">
                                <i class="	fa fa-phone"></i>
                            </div>
                            <div class="telepon-kami">
                                <h4 style="color: #121F44 !important;">
                                    Telepon
                                </h4>
                                <p style="line-height: 150% !important; margin-bottom: 0 !important;">
                                    +62 - 89507358715
                                </p>
                            </div>
                        </div>
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