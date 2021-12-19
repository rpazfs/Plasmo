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
        @include('components.navbar-pasien')
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
                        <div class="from-1 d-flex justify-content-between">
                            <div class="jenis-kelamin mr-3" style="width:50%;">
                                <label for="rhesus" style="font-weight: bold;font-family: 'Montserrat';">Jenis Kelamin</label>
                                <select class="custom-select">
                                    <option selected>Pilih Jenis Kelamin Pasien</option>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group usia" style="width:50%;">
                                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Usia Pasien</label>
                                <input type="number" class="form-control" id="usia"  placeholder="Masukkan Usia Pasien">
                            </div>
                        </div>
                        <div class="form-2 d-flex justify-content-between mb-3">
                            <div class="golongan-darah mr-3" style="width:50%;">
                                <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Golongan Darah</label>
                                <br>
                                <select class="custom-select">
                                    <option selected>Pilih Golongan Darah Pasien</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">O</option>
                                    <option value="4">AB</option>
                                </select>                          
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

    @include('components.footer-pasien')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>