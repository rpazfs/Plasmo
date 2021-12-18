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
                <li class="nav-item active">
                  <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/stok-plasma-donor">Stok Plasma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita & Informasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/faq">FAQ</a>
                </li>
              </ul>
              <div class="form-inline my-2 my-lg-0">                
                <div class="user-image mr-2">
                    <a href="/dashboard"><img src="{{asset('/images/user.png')}}" alt="gambar user"></a>                    
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" style="color: #122D74; background-color: white; border: 0;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="dashboard"><button class="dropdown-item" type="button">Dashboard</button>  </a>                    
                        <a href="user-profile"><button class="dropdown-item" type="button">Pengaturan Akun</button></a>
                        <a href="#"><button class="dropdown-item" type="button">Notifikasi</button></a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();">
                                Keluar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <article class="hero pt-5 pb-5 container">
                <h1>Halo, Raja Pasha</h1>
                <p style="width: 50%;">Anda dapat mengajukan permohonan plasma darah untuk perawatan Anda melalui laman stok plasma.</p>
            </article>
        </section>
        <section class="daftar-rs">
            <article class="daftar-rs pb-5 d-flex flex-column container">                
                <div class="content d-flex">
                    <article class="rumah-sakit-content mr-3"  style="width: 100%;">
                        <h3>Kegiatan Terbaru Anda</h3>
                        <hr>
                        <p>Kegiatan Anda dalam 24 jam terakhir</p>
                        <div class="semua-kegiatan mb-4">
                            <div class="kegiatan d-flex justify-content-between mb-3">
                                <div class="content-kegiatan">
                                    <h4 style="color: black !important; font-size: 16px !important; line-height: 100% !important;">Telah Diselesaikan</h4>
                                    <p style="line-height: 100% !important; font-size: 14px !important; margin-top: 15px; margin-bottom: 0 !important;">Pendaftaran menjadi pendonor plasma darah</p>
                                </div>
                                <div class="detail-kegiatan align-self-center">
                                    <a href="#"><h4 style="font-size: 14px !important; line-height: 0 !important;">Lihat Detail</h4></a>
                                </div>
                            </div>
                            <div class="kegiatan d-flex justify-content-between mb-3">
                                <div class="content-kegiatan">
                                    <h4 style="color: black !important; font-size: 16px !important; line-height: 100% !important;">Telah Diselesaikan</h4>
                                    <p style="line-height: 100% !important; font-size: 14px !important; margin-top: 15px; margin-bottom: 0 !important;">Pendaftaran menjadi pendonor plasma darah</p>
                                </div>
                                <div class="detail-kegiatan align-self-center">
                                    <a href="#"><h4 style="font-size: 14px !important; line-height: 0 !important;">Lihat Detail</h4></a>
                                </div>
                            </div>
                            <a href="#" class="text-center"><h4 style="font-size: 16px !important;">Selengkapnya</h4></a>
                        </div>
                        
                        <a href="/faq">
                            <div class="downer action-faq mt-3 d-flex">
                                <div class="icon-faq mr-3">
                                    <i style="font-size: 36px; color: #000;" class="fa fa-question-circle"></i>
                                </div>
                                <div class="faq">
                                    <h3 style="line-height: 100%; color: #000 !important;">FAQ</h3>
                                    <p style="line-height: 150%; margin-bottom: 0 !important;">Anda dapat melihat semua pertanyaan yang sering ditanyakan pada laman ini.</p>
                                </div>                            
                            </div>   
                        </a>                        
                    </article>
                    <article class="rumah-sakit-content" style="width: 100%;">
                        <h3>Kegiatan Terbaru Anda</h3>
                        <hr>
                        <p>Berikut stok plasma di daerah sekitar anda :</p>
                        <div class="downer mt-3 d-flex flex-column">
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
                            <div class="button mt-4 align-self-center" style="margin-bottom: 10px;">
                                <a href="/stok-plasma-donor">
                                    <button type="button" class="primary-btn mr-3 mx-auto">Lihat Semua Stok</button>
                                </a>
                            </div>
                            <a href="/berita">
                                <div class="downer action-faq mt-3 d-flex" style="background-color: rgba(42,125,245,0.3);">
                                    <div class="icon-faq mr-3" style="background-color: #2A7DF5;">
                                        <i style="font-size: 36px; color: #000;" class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="faq">
                                        <h3 style="line-height: 100%; color: #000 !important;">Berita dan Informasi</h3>
                                        <p style="line-height: 150%; margin-bottom: 0 !important;">Anda dapat melihat semua berita dan informasi terbaru yang kami miliki melalui laman ini.</p>
                                    </div>                            
                                </div>   
                            </a>                                   
                        </div>   
                    </article>
                </div>               
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
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/stok-plasma-donor">Stok Plasma</a></li>
                    <li><a href="/berita">Berita & Informasi</a></li>
                    <li><a href="/faq">FAQ</a></li>
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