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
                  <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/stok-plasma-donor">Stok Plasma</a>
                </li>
                <li class="nav-item ">
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
        <section class="daftar-rs pb-5 pt-5">
            <article class="daftar-rs d-flex container">
                <div class="daftar-upper d-flex flex-column" style="width: 30%;">
                    <h3 class="mr-auto align-self-center" style="font-size: 24px !important;">Pengaturan Akun</h3>                    
                    <div class="list-group mt-3">
                        <a href="/user-profile" class="list-group-item list-group-item-action setting ">
                          User Profile
                        </a>
                        <a href="/change-password" class="list-group-item list-group-item-action setting active-setting active">Ganti Password</a>
                        <a href="/change-email" class="list-group-item list-group-item-action setting">Ganti Email</a>
                      </div>
                </div>
                <div class="content-settings d-flex flex-column" style="width: 100%;">
                    <form style="width: 100%;">
                        <div class="form-group">
                            <label for="password" style="font-weight: bold; color: #122D74; font-family: 'Montserrat';">Password Lama</label>
                            <input type="password" class="form-control" id="password-lama"  placeholder="Masukkan Password Lama Anda">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password" style="font-weight: bold; color: #122D74; font-family: 'Montserrat';">Password Baru</label>
                            <input type="password" class="form-control" id="password-baru"  placeholder="Masukkan Password baru Anda">
                            <p style="font-size: 12px !important;">kami menyarankan Anda untuk membuat password yang kuat dan unik untuk menghindari banyak akun yang disusupi dari satu kata sandi yang dicuri</p>
                        </div>
                        <div class="form-group">
                            <label for="password" style="font-weight: bold; color: #122D74; font-family: 'Montserrat';">Re-Enter Password</label>
                            <input type="password" class="form-control" id="password-enter"  placeholder="Masukkan kembali password baru Anda">
                        </div>
                        <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;" >Simpan Perubahan</button>
                    </form>
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