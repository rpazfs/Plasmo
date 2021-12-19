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
      @include('components.navbar-home')
    </header>

    <main>
        <section class="hero">
            <article class="hero pt-5 pb-5 d-flex container">
                <div class="form" style="width: 50%;">
                    <h1>Masuk</h1>
                    <p>Cari stok plasma dan pendonor sesuai kebutuhanmu</p>
                    <button class="btn-sign mb-3" style="width: 100%;"><i class="fa fa-google mr-3"></i> Masuk Dengan Google</button>
                    <p style="text-align: center !important;">atau masuk dengan</p>
                    <form style="width: 100%;">
                        <div class="form-group">
                            <label for="email" style="font-weight: bold; color: #122D74; font-family: 'Montserrat';">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-weight: bold; color: #122D74; font-family: 'Montserrat';">Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password Anda" id="password">
                        </div>
                        <div class="form-group justify-content-between d-flex mb-5">
                            <input class="form-check-input" type="checkbox" style="margin-left: 0; margin-top: 6px;" value="" id="remember">
                            <label class="form-check-label" style="margin-left: 20px;" for="remember">
                                Remember me
                            </label>
                            <a href="#" style="color: #122D74 !important; font-weight: bold;">Lupa password ?</a>
                        </div>
                        <button type="submit" class="primary-btn mb-2" style="width: 100%;" >Masuk</button>
                        <p>Belum punya akun ? <a href="daftar.html" style="color: #122D74 !important; font-weight: bold;">Daftar disini</a></p>
                    </form>
                </div>
                <div class="masuk-image">
                    <img src="{{asset('/images/masuk.png')}}" width="100%" alt="gambar">
                </div>
            </article>
        </section>
    </main>

    <footer class="container">
        <p class="text-center mt-3">Copyrights © 2021 by <span style="color: #122D74; font-weight: bold;">Plasmo</span></p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>