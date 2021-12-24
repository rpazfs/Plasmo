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

    <title>Plasmo</title>
  </head>
  <body>
    <header class="container">
        @include('components.navbar-home')
    </header>

    <main>
        <section class="hero">
            <article class="hero d-flex pt-5 pb-5 container hero-section">
                <div class="hero-content align-self-center" style="width: 50%;">
                    <h3>KITA HADAPI BERSAMA COVID</h3>
                    <h1 class="mt-4">Donorkan Plasma Darah Anda Untuk Membantu Sesama.</h1>
                    <p class="mt-2">Ayo bantu sesama dengan mendonorkan plasma darah anda. Banyak saudara kita yang membutuhkan plasma darah saat ini. Kita hadapi bersama Covid-19 !</p>
                    <a href="{{ route('register') }}"><button type="button" class="primary-btn mt-4">Daftar Sekarang</button></a>
                </div>
                <div class="hero-image">
                    <img src="{{asset('/images/hero-image.png')}}" class="mt-5" width="100%" alt="gambar hero">
                </div>
            </article>
        </section>
        <section class="container">
            <article class="why-donor pt-5 pb-5 d-flex flex-column">
                <h1 class="mb-5 text-center">Mengapa Harus Mendonor Plasma Darah ?</h1>
                <div class="why d-flex mb-5">
                    <div class="why-image">
                        <img src="{{asset('/images/why-image.png')}}" width="100%" alt="gambar orang bertanya">
                    </div>
                    <div class="why-content align-self-center ml-3" style="width: 60%;">
                        <p style="font-size: 18px;">
                            Sebagai antivirus, plasma konvalesen yang mengandung antibodi dapat mengikat tangan-tangan virus sehingga tidak dapat masuk ke dalam sel tubuh. Virus sendiri harus masuk ke dalam sel tubuh agar bisa tetap hidup, jika diselimuti antibodi maka virus tidak bisa masuk dan akhirnya mati.
                        </p>
                        <p style="font-size: 18px;">
                            Pada pasien yang sedang sakit dikeluarkan sitokin yang bisa menyebabkan peradangan. Jika sitokin dibiarkan bebas maka akan menyebabkan kerusakan jaringan. Plasma konvaselen berfungsi untuk mengikat sitokin tersebut, maka dari itu plasma ini juga berfungsi sebagai immunomodulatory.
                        </p>
                    </div>
                </div>
                <div class="button align-self-center">
                    <a href="{{ route('register') }}"><button type="button" class="primary-btn">Daftar Sekarang</button></a>
                </div>
            </article>
        </section>
        <section class="kriteria pb-5 pt-5">
            <article class=" container kriteria background-kriteria d-flex">
                <div class="kriteria-image align-self-end">
                    <img src="{{asset('/images/kriteria-image.png')}}" width="100%" alt="">
                </div>
                <div class="kriteria-content ml-3 pb-5 mt-3 pt-5">
                    <div class="upper pb-5">
                        <h1 style="line-height: 0;">Kriteria Untuk Pendonor</h1>
                        <p style="line-height: 0;">Sumber : https://plasmakonvalesen.covid19.go.id/</p>
                    </div>
                    <div class="downer pb-4 pt-3">
                        <ol style="padding-left: 15px; font-size: 18px;">
                            <li>Berusia 18 sampai 60 tahun.</li>
                            <li>Berat badan minimal 55 kg (sebab, pengambilan darah konvensional dengan kantong 450 ml).</li>
                            <li>Diutamakan pria, apabila perempuan belum pernah hamil.</li>
                            <li>Pernah terkonfirmasi COVID-19 dengan Surat keterangan sembuh dari dokter yang merawat.</li>
                            <li>Bebas keluhan minimal 14 hari.</li>
                            <li>Tidak menerima transfusi darah selama 6 bulan terakhir.</li>
                            <li>Lebih diutamakan yang pernah mendonorkan darah.</li>
                        </ol>
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