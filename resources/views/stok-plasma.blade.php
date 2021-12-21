<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Plasmo</title>
  </head>
  <body>
    <header class="container">
        @include('components.navbar-home')
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
                <div class="content card-rs d-flex mt-5">
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
                                <a href="{{ route('register') }}"><button type="button" class="primary-btn mr-3">Ajukan Permohonan</button></a>
                                <a href="{{ route('register') }}"><button type="button" class="primary-btn-blue-light">Donor Plasma</button></a>
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
                                <a href="{{ route('register') }}"><button type="button" class="primary-btn mr-3">Ajukan Permohonan</button></a>
                                <a href="{{ route('register') }}"><button type="button" class="primary-btn-blue-light">Donor Plasma</button></a>
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
                <div class="tertarik-content align-self-center" style="margin-left:3rem; padding-left:3rem;">
                    <div class="upper pb-3">
                        <h2 style="line-height: 0; color:#0e3c57 !important;">Ingin mencari pendonor?</h2>
                        <p style="line-height: 0;">Daftar dan ikuti semua langkahnya :)</p>
                    </div>
                    <a href="{{ route('register') }}"><button type="button" class="primary-btn-blue">Daftar Sekarang</button></a>
                </div>
            </article>
        </section>
    </main>

    @include('components.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>