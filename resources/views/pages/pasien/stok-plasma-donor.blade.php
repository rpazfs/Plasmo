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
            <a class="navbar-brand" href="/dashboard"><img src="{{asset('/images/logo.png')}}" alt="logo Plasmo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/stok-plasma-donor">Stok Plasma <span class="sr-only">(current)</span></a>
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
                        <a href="/dashboard"><button class="dropdown-item" type="button">Dashboard</button>  </a>                    
                        <a href="/user-profile"><button class="dropdown-item" type="button">Pengaturan Akun</button></a>
                        <button class="dropdown-item" type="button">Notifikasi</button>
                        <button class="dropdown-item" type="button">Keluar</button>
                    </div>
                </div>
            </div>
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
                    <article class="rumah-sakit-content mr-3 d-flex flex-column">
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
                            <a class="mt-4 align-self-center" href="/permohonan">
                                <button type="button" class="primary-btn">Ajukan Permohonan</button>
                            </a>                                                          
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
                            <a class="mt-4 align-self-center" href="/permohonan">
                                <button type="button" class="primary-btn">Ajukan Permohonan</button>
                            </a>                                  
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
        <section class="hero">
            <article class="hero text-center pt-5 pb-5 container">
                <h1>Daftar Pendonor</h1>
                <p>Daftar pendonor yang terdapat di daerah sekitar anda</p>
            </article>
        </section>
        <section class="daftar-rs">
            <article class="daftar-rs pb-5 d-flex flex-column container">
                <div class="daftar-upper mr-3 d-flex" style="width: 100%;">
                    <h3 class="mr-auto align-self-center" style="font-size: 24px !important;">Daftar Pendonor</h3>
                    <div class="btn-group">
                        <button type="button" class="btn btn-tulisan">Golongan Darah</button>
                        <button type="button" class="btn dropdown-action dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Semua</a>
                          <a class="dropdown-item" href="#">A</a>
                          <a class="dropdown-item" href="#">B</a>
                          <a class="dropdown-item" href="#">O</a>
                          <a class="dropdown-item" href="#">AB</a>
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
                <div class="content-pendonor mt-5" style="background-color: white;">
                    <div class="table px-3" style="background-color: white;">
                        <table class="table">
                            <thead>
                              <tr style="color: #121F44; font-family: 'Heebo';">
                                <th scope="col">No</th>
                                <th scope="col">Nama Pendonor</th>
                                <th scope="col">Golongan Darah</th>
                                <th scope="col">Email</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Kontak</th>
                              </tr>
                            </thead>
                            <tbody style="font-family: 'Montserrat';">
                              <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img class="gambar-table mr-2" src="{{asset('/images/ico-raja.png')}}" alt="gambar user" >
                                    Raja Pasha Agastya
                                </td>
                                <td>O+</td>
                                <td>raja.pasha.rp@gmail.com</td>
                                <td>12-4-2021</td>
                                <td class="d-flex">
                                    <a href="#">
                                        <div class="icon-telepon align-self-center mr-3" style="background-color: #31BA45; padding: 5px 10px;">
                                            <i class="fa fa-phone" style="color: white;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-email align-self-center mr-3" style="background-color: #2A7DF5; padding: 5px 9px;">
                                            <i class="fa fa-envelope" style="color: white;"></i>
                                        </div>
                                    </a>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>
                                    <img class="gambar-table mr-2" src="{{asset('/images/ico-raja.png')}}" alt="gambar user">
                                    Raja Pasha Agastya
                                </td>
                                <td>O+</td>
                                <td>raja.pasha.rp@gmail.com</td>
                                <td>12-4-2021</td>
                                <td class="d-flex">
                                    <a href="#">
                                        <div class="icon-telepon align-self-center mr-3" style="background-color: #31BA45; padding: 5px 10px;">
                                            <i class="fa fa-phone" style="color: white;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-email align-self-center mr-3" style="background-color: #2A7DF5; padding: 5px 9px;">
                                            <i class="fa fa-envelope" style="color: white;"></i>
                                        </div>
                                    </a>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>
                                    <img class="gambar-table mr-2" src="{{asset('/images/ico-raja.png')}}" alt="gambar user">
                                    Raja Pasha Agastya
                                </td>
                                <td>O+</td>
                                <td>raja.pasha.rp@gmail.com</td>
                                <td>12-4-2021</td>
                                <td class="d-flex">
                                    <a href="#">
                                        <div class="icon-telepon align-self-center mr-3" style="background-color: #31BA45; padding: 5px 10px;">
                                            <i class="fa fa-phone" style="color: white;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-email align-self-center mr-3" style="background-color: #2A7DF5; padding: 5px 9px;">
                                            <i class="fa fa-envelope" style="color: white;"></i>
                                        </div>
                                    </a>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>
                                    <img class="gambar-table mr-2" src="{{asset('/images/ico-raja.png')}}" alt="gambar user">
                                    Raja Pasha Agastya
                                </td>
                                <td>O+</td>
                                <td>raja.pasha.rp@gmail.com</td>
                                <td>12-4-2021</td>
                                <td class="d-flex">
                                    <a href="#">
                                        <div class="icon-telepon align-self-center mr-3" style="background-color: #31BA45; padding: 5px 10px;">
                                            <i class="fa fa-phone" style="color: white;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-email align-self-center mr-3" style="background-color: #2A7DF5; padding: 5px 9px;">
                                            <i class="fa fa-envelope" style="color: white;"></i>
                                        </div>
                                    </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>                    
                </div>
                <div class="daftar-downer mt-5 d-flex justify-content-between">
                    <div class="btn-group align-self-center">
                        <button type="button" class="btn btn-tulisan">Tunjukan</button>
                        <button type="button" class="btn dropdown-action dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">2 Pendonor</a>
                          <a class="dropdown-item" href="#">4 Pendonor</a>
                          <a class="dropdown-item" href="#">6 Pendonor</a>
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
                    <p class="align-self-center" style="font-size: 12px !important; margin-bottom: 0 !important;">Total Pendonor : <span style="color: #122D74;">12</span></p>
                </div>
            </article>
        </section>
    </main>

    @include('components.footer-pasien')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>