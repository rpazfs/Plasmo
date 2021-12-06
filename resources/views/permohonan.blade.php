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
        <section class="hero">
            <article class="hero text-center pt-5 pb-5 container">
                <h1>Pengajuan Permohonan Donor Plasma Darah</h1>
                <p>Isikan data diri pasien dan wali dengan tepat, sehingga tidak akan menghalangi jalannya proses administrasi. Terima Kasih.</p>
            </article>
        </section>
        <section class="daftar-rs pb-5">
            <article class="daftar-rs container">
                <div class="content-settings d-flex flex-column" style="width: 100%;">
                    <form style="width: 100%;">
                        <h4 style="font-family: 'Montserrat' !important; font-weight: bold !important;">Data Wali</h4>
                        <div class="form-group">
                            <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Nama Pemohon</label>
                            <input type="text" class="form-control" id="nama-wali"  placeholder="Masukkan Nama Lengkap Pemohon">
                        </div>
                        <div class="form-group">
                            <label for="text" style="font-weight: bold; font-family: 'Montserrat';">No. Telepon (WA) Yang Dapat Dihubungi</label>
                            <input type="text" class="form-control" id="no-hp-wali"  placeholder="Masukkan Nomor Telepon Anda">
                            <p>Pastikan No. HP yang di masukan belum pernah dipakai untuk mendaftarkan pengajuan permohonan sebelumnya</p>
                        </div>
                        <h4 style="font-family: 'Montserrat' !important; font-weight: bold !important;">Data Pasien</h4>
                        <div class="form-group">
                            <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama-wali"  placeholder="Masukkan Nama Lengkap Pasien">
                        </div>
                        <div class="from-1 d-flex justify-content-between mb-3">
                            <div class="jenis-kelamin mr-3" style="width:50%;">
                                <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Jenis Kelamin</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="pria" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="pria">Pria</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="wanita" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="wanita">Wanita</label>
                                </div>
                            </div>
                            <div class="golongan-darah" style="width:50%;">
                                <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Golongan Darah</label>
                                <br>                                
                                <div class="custom-control custom-radio custom-control-inline mr-5">
                                    <input type="radio" id="gol-a-plus" name="gol-a-plus" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-a-plus">A+</label>
                                </div>                                
                                <div class="custom-control custom-radio custom-control-inline mr-5">
                                    <input type="radio" id="gol-b-plus" name="gol-b-plus" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-b-plus">B+</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mr-5">
                                    <input type="radio" id="gol-o-plus" name="gol-o-plus" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-o-plus">O+</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="gol-ab-plus" name="gol-ab-plus" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-ab-plus">AB+</label>
                                </div>
                                <br>
                                <div class="custom-control custom-radio custom-control-inline mr-5">
                                    <input type="radio" id="gol-a-min" name="gol-a-min" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-a-min">A-</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mr-5 ml-1">
                                    <input type="radio" id="gol-b-min" name="gol-b-min" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-b-min">B-</label>
                                </div>                                
                                <div class="custom-control custom-radio custom-control-inline mr-5 ml-1">
                                    <input type="radio" id="gol-o-min" name="gol-o-min" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-o-min">O-</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline ml-1">
                                    <input type="radio" id="gol-ab-min" name="gol-ab-min" class="custom-control-input">
                                    <label class="custom-control-label" for="gol-ab-min">AB-</label>
                                </div>                               
                            </div>
                        </div>
                        <div class="form-2 d-flex justify-content-between">
                            <div class="form-group usia mr-3" style="width:50%;">
                                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Usia</label>
                                <input type="number" class="form-control" id="usia"  placeholder="Masukkan Usia Anda">
                            </div>
                            <div class="rhesus" style="width:50%;">
                                <label for="rhesus" style="font-weight: bold;font-family: 'Montserrat';">Rhesus Pasien</label>
                                <select class="custom-select">
                                    <option selected>Pilih Rhesus Pasien</option>
                                    <option value="1">Positif</option>
                                    <option value="2">Negatif</option>
                                </select>
                            </div>                        
                        </div>
                        <div class="form-3 d-flex">
                            <div class="form-group mr-3" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Rumah Sakit Dirawat</label>
                                <input type="text" class="form-control" id="rs-dirawat"  placeholder="Masukkan Nama Rumah Sakit">
                            </div>
                            <div class="form-group" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Kamar di Rumah Sakit</label>
                                <input type="text" class="form-control" id="kamar-rs"  placeholder="Masukkan Nama Kamar Pasien">
                            </div>
                        </div>
                        <div class="form-4 d-flex">
                            <div class="form-group mr-3" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi"  placeholder="Masukkan Provinsi Pasien Berada">
                            </div>
                            <div class="form-group" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Kota/Kabupaten</label>
                                <input type="text" class="form-control" id="kota"  placeholder="Masukkan Kota/Kabupaten Pasien Berada">
                            </div>
                        </div>
                        <br>
                        <h4 style="font-family: 'Montserrat' !important; font-weight: bold !important;">Isi salah satu atau keduanya untuk Surat Permohonan Terapi Plasma Konvaselen (TPK)</h4>
                        <div class="form-5 d-flex">
                            <div class="file mr-3" style="width:30%;">
                                <label for="file" style="font-weight: bold;font-family: 'Montserrat';">Upload Surat Permohonan TPK</label>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file-tpk">
                                <label class="custom-file-label" for="file-tpk">Unggah File</label>
                                </div>
                            </div>                            
                            <div class="form-group" style="width:70%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Link Surat Permohonan TPK</label>
                                <input type="text" class="form-control" id="link"  placeholder="Masukkan Link Surat TPK">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Jumlah Plasma Yang Dibutuhkan</label>
                            <input type="number" class="form-control" id="plasma"  placeholder="Masukan jumlah plasma yang pasien butuhkan">
                        </div>
                        <div class="vaksin" style="width:50%;">
                                <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Apakah pasien sudah melakukan vaksinasi covid-19 ?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="sudah-vaksin" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="sudah-vaksin">Sudah</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="belum-vaksin" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="belum-vaksin">Belum</label>
                                </div>
                        </div>
                        <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;" >Ajukan Permohonan</button>
                    </form>
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