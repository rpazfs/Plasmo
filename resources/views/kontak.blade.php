<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="dicoding:email" content="raja.pasha.azfs@upi.edu">
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
                <h1>Kontak Kami</h1>
                <p>Tolong isi informasi anda dan kita bisa terhubung !</p>
            </article>
        </section>
        <section class="kontak">
            <article class="kontak pb-5 d-flex flex-column container">
                <h3>Say Hello!</h3>
                <div class="kontak-form mr-3 d-flex" style="width: 100%;">
                    <form class="submit-form" style="width: 80%;">
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
                    <div class="contacts" style="margin-left:3rem;">
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
                <div class="tertarik-content align-self-center" style="margin-left:3rem; padding-left:3rem;">
                    <div class="upper pb-3">
                        <h2 style="line-height: 0; color:#063726 !important;">Tertarik menjadi pendonor ?</h2>
                        <p style="line-height: 0;">Daftar dan ikuti semua langkahnya :)</p>
                    </div>
                    <a href="{{ route('register') }}"><button type="button" class="primary-btn-green">Daftar Sekarang</button></a>
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