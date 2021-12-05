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
                <li class="nav-item active">
                    <a class="nav-link" href="/stok-plasma">Stok Plasma <span class="sr-only">(current)</span></a>
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
            <article class="hero text-center pt-5 pb-5 container">
                <h1>Stok Plasma</h1>
                <p>Stok plasma darah yang terdapat di daerah sekitar anda</p>
            </article>
        </section>
        <section class="daftar-rs">
            <article class="daftar-rs pb-5 d-flex flex-column container">
                <div class="daftar-upper mr-3 d-flex" style="width: 100%;">
                    <h3 class="mr-auto align-self-center" style="font-size: 24px !important;">Daftar Rumah Sakit</h3>
                    <div class="btn-group">
                        <button type="button" class="btn btn-tulisan">Tempat Stok Donor</button>
                        <button type="button" class="btn dropdown-action dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Rumah Sakit</a>
                          <a class="dropdown-item" href="#">UDD</a>
                          <a class="dropdown-item" href="#">Puskesmas</a>
                        </div>
                    </div>
                    <div class="btn-group ml-5">
                        <button type="button" class="btn btn-tulisan">Waktu</button>
                        <button type="button" class="btn dropdown-action dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Terbaru</a>
                          <a class="dropdown-item" href="#">Terlama</a>
                          <a class="dropdown-item" href="#">Semua</a>
                        </div>
                    </div>
                </div>
                <div class="content d-flex mt-5">
                    <article class="rumah-sakit-content mr-3">
                        <div class="upper d-flex">
                            <img src="{{asset('/images/rumah-sakit.png')}}" alt="rumah sakit" width="200px">
                            <div class="rumah-sakit-upper align-self-center ml-5">
                                <h3 class="mb-3"><b>Rumah Sakit Advent Bandung</b></h3>
                                <p style="line-height: 100%;">Lokasi :Jl. Cihampelas No. 161. Bandung </p>
                                <p style="line-height: 100%;">Hotline : 0222034386 - 9 </p>
                                <button><i class="fa fa-map mt-2">   Lihat Melalui Maps</i></button>
                            </div>
                        </div>
                        <div class="downer mt-3 d-flex flex-column">
                            <h3 style="font-size: 14px !important;">Stok Plasma Darah:</h3>
                            <div class="golongan-darah d-flex flex-wrap">
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah A+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah B+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah O+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah AB+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah A-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>                                
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah B-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>                                
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah O-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>                                
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah AB-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                            </div>
                            <div class="button mt-4 align-self-center">
                                <button type="button" class="primary-btn mr-3">Ajukan Permohonan</button>
                                <button type="button" class="primary-btn-blue-light">Donor Plasma</button>
                            </div>                            
                        </div>   
                    </article>
                    <article class="rumah-sakit-content">
                        <div class="upper d-flex">
                            <img src="{{asset('/images/rumah-sakit.png')}}" alt="rumah sakit" width="200px">
                            <div class="rumah-sakit-upper align-self-center ml-5">
                                <h3 class="mb-3"><b>Rumah Sakit Advent Bandung</b></h3>
                                <p style="line-height: 100%;">Lokasi :Jl. Cihampelas No. 161. Bandung </p>
                                <p style="line-height: 100%;">Hotline : 0222034386 - 9 </p>
                                <button><i class="fa fa-map mt-2">   Lihat Melalui Maps</i></button>
                            </div>
                        </div>
                        <div class="downer mt-3 d-flex flex-column">
                            <h3 style="font-size: 14px !important;">Stok Plasma Darah:</h3>
                            <div class="golongan-darah d-flex flex-wrap">
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah A+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah B+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah O+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah AB+</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah A-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>                                
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah B-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>                                
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah O-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>                                
                                <div class="gol">
                                    <h4 style="font-size: 14px !important;">Tipe Darah AB-</h4>
                                    <p style="line-height: 0; font-size: 12px !important;">Sisa Stok: 3</p>
                                </div>
                            </div>
                            <div class="button mt-4 align-self-center">
                                <button type="button" class="primary-btn mr-3">Ajukan Permohonan</button>
                                <button type="button" class="primary-btn-blue-light">Donor Plasma</button>
                            </div>                            
                        </div>   
                    </article>
                </div>
                <div class="daftar-downer mt-5 d-flex justify-content-between">
                    <div class="btn-group align-self-center">
                        <button type="button" class="btn btn-tulisan">Tunjukan</button>
                        <button type="button" class="btn dropdown-action dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">2 Rumah Sakit</a>
                          <a class="dropdown-item" href="#">4 Rumah Sakit</a>
                          <a class="dropdown-item" href="#">6 Rumah Sakit</a>
                        </div>
                    </div>
                    <nav aria-label="Page navigation align-self-center">
                            <ul class="pagination" style="margin-bottom: 0 !important;">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                    </nav>
                    <p class="align-self-center" style="font-size: 12px !important; margin-bottom: 0 !important;">Total Rumah Sakit : <span style="color: #122D74;">6</span></p>
                </div>
            </article>
        </section>
        <section class="kriteria pb-5 pt-5">
            <article class=" container kriteria background-tertarik d-flex" style="background-color:#2AACF5;">
                <div class="tertarik-image align-self-end ml-5">
                    <img src="{{asset('/images/tertarik.png')}}" width="80%" alt="">
                </div>
                <div class="tertarik-content align-self-center ml-5 pl-5">
                    <div class="upper pb-3">
                        <h2 style="line-height: 0; color:#0e3c57 !important;">Ingin mencari pendonor?</h2>
                        <p style="line-height: 0;">Daftar dan ikuti semua langkahnya :)</p>
                    </div>
                    <button type="button" class="primary-btn-blue">Daftar Sekarang</button>
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