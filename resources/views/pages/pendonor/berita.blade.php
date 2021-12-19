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
        @include('components.navbar-login')
    </header>

    <main>
        <section class="daftar-rs pb-5 pt-5">
            <article class="daftar-rs d-flex flex-column container">
                <div class="daftar-upper mr-3 d-flex" style="width: 100%;">
                    <h3 class="mr-auto align-self-center" style="font-size: 24px !important;">Berita dan Informasi</h3>                    
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
                <div class="content d-flex mt-5 flex-column">
                    <article class="rumah-sakit-content mb-4">
                        <div class="upper d-flex">
                            <img src="{{asset('/images/rumah-sakit.png')}}" alt="rumah sakit" width="200px">
                            <div class="rumah-sakit-upper align-self-center ml-5">
                                <h3 style="font-size: 28px !important;"><b>Judul Berita</b></h3>
                                <p style="line-height: 100%;">24 jam yang lalu</p>      
                                <div class="isi mt-4 mb-3">
                                    <p style="margin-bottom: 0 !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, quo ullam aliquam dolor officiis animi quia enim alias inventore est reprehenderit suscipit, provident deleniti velit pariatur deserunt mollitia, dolore nemo.</p>
                                </div>     
                                <a href="#" style="color: #122D74 !important; font-weight: bold; margin-top: 10px;">Baca lebih lanjut</a>                     
                            </div>                            
                        </div>
                    </article>
                    <article class="rumah-sakit-content mb-4">
                        <div class="upper d-flex">
                            <img src="{{asset('/images/rumah-sakit.png')}}" alt="rumah sakit" width="200px">
                            <div class="rumah-sakit-upper align-self-center ml-5">
                                <h3 style="font-size: 28px !important;"><b>Judul Berita</b></h3>
                                <p style="line-height: 100%;">24 jam yang lalu</p>      
                                <div class="isi mt-4 mb-3">
                                    <p style="margin-bottom: 0 !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, quo ullam aliquam dolor officiis animi quia enim alias inventore est reprehenderit suscipit, provident deleniti velit pariatur deserunt mollitia, dolore nemo.</p>
                                </div>     
                                <a href="#" style="color: #122D74 !important; font-weight: bold; margin-top: 10px;">Baca lebih lanjut</a>                     
                            </div>                            
                        </div>
                    </article>
                    <article class="rumah-sakit-content mb-4">
                        <div class="upper d-flex">
                            <img src="{{asset('/images/rumah-sakit.png')}}" alt="rumah sakit" width="200px">
                            <div class="rumah-sakit-upper align-self-center ml-5">
                                <h3 style="font-size: 28px !important;"><b>Judul Berita</b></h3>
                                <p style="line-height: 100%;">24 jam yang lalu</p>      
                                <div class="isi mt-4 mb-3">
                                    <p style="margin-bottom: 0 !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, quo ullam aliquam dolor officiis animi quia enim alias inventore est reprehenderit suscipit, provident deleniti velit pariatur deserunt mollitia, dolore nemo.</p>
                                </div>     
                                <a href="#" style="color: #122D74 !important; font-weight: bold; margin-top: 10px;">Baca lebih lanjut</a>                     
                            </div>                            
                        </div>
                    </article>
                    <article class="rumah-sakit-content mb-4">
                        <div class="upper d-flex">
                            <img src="{{asset('/images/rumah-sakit.png')}}" alt="rumah sakit" width="200px">
                            <div class="rumah-sakit-upper align-self-center ml-5">
                                <h3 style="font-size: 28px !important;"><b>Judul Berita</b></h3>
                                <p style="line-height: 100%;">24 jam yang lalu</p>      
                                <div class="isi mt-4 mb-3">
                                    <p style="margin-bottom: 0 !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, quo ullam aliquam dolor officiis animi quia enim alias inventore est reprehenderit suscipit, provident deleniti velit pariatur deserunt mollitia, dolore nemo.</p>
                                </div>     
                                <a href="#" style="color: #122D74 !important; font-weight: bold; margin-top: 10px;">Baca lebih lanjut</a>                     
                            </div>                            
                        </div>
                    </article>
                    <article class="rumah-sakit-content mb-4">
                        <div class="upper d-flex">
                            <img src="{{asset('/images/rumah-sakit.png')}}" alt="rumah sakit" width="200px">
                            <div class="rumah-sakit-upper align-self-center ml-5">
                                <h3 style="font-size: 28px !important;"><b>Judul Berita</b></h3>
                                <p style="line-height: 100%;">24 jam yang lalu</p>      
                                <div class="isi mt-4 mb-3">
                                    <p style="margin-bottom: 0 !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, quo ullam aliquam dolor officiis animi quia enim alias inventore est reprehenderit suscipit, provident deleniti velit pariatur deserunt mollitia, dolore nemo.</p>
                                </div>     
                                <a href="#" style="color: #122D74 !important; font-weight: bold; margin-top: 10px;">Baca lebih lanjut</a>                     
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
                          <a class="dropdown-item" href="#">5 Berita & Informasi</a>
                          <a class="dropdown-item" href="#">10 Berita & Informasi</a>
                          <a class="dropdown-item" href="#">15 Berita & Informasi</a>
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
                    <p class="align-self-center" style="font-size: 12px !important; margin-bottom: 0 !important;">Total Berita & Informasi : <span style="color: #122D74;">15</span></p>
                </div>
            </article>
        </section>        
    </main>

    @include('components.footer-login')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>