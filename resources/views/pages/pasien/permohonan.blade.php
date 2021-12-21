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
        @include('components.navbar-login')
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
                    <form style="width: 100%;" action="submit" method="POST">
                    @csrf
                        <h4 style="font-family: 'Montserrat' !important; font-weight: bold !important;">Data Wali</h4>
                        <div class="form-group">
                            <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Nama Pemohon</label>
                            <input type="text" class="form-control" id="nama-wali" name="nama_pemohon"  placeholder="Masukkan Nama Lengkap Pemohon">
                        </div>
                        <div class="form-group">
                            <label for="text" style="font-weight: bold; font-family: 'Montserrat';">No. Telepon (WA) Yang Dapat Dihubungi</label>
                            <input type="text" class="form-control" id="no-hp-wali" name="hotline"  placeholder="Masukkan Nomor Telepon Anda">
                            <p>Pastikan No. HP yang di masukan belum pernah dipakai untuk mendaftarkan pengajuan permohonan sebelumnya</p>
                        </div>
                        <h4 style="font-family: 'Montserrat' !important; font-weight: bold !important;">Data Pasien</h4>
                        <div class="form-group">
                            <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama-wali" name="nama_pasien" placeholder="Masukkan Nama Lengkap Pasien">
                        </div>
                        <div class="from-1 d-flex justify-content-between">
                            <div class="jenis-kelamin mr-3" style="width:50%;">
                                <label for="rhesus" style="font-weight: bold;font-family: 'Montserrat';">Jenis Kelamin</label>
                                <select class="custom-select" name="gender">
                                    <option selected>Pilih Jenis Kelamin Pasien</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group usia" style="width:50%;">
                                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Usia Pasien</label>
                                <input type="number" class="form-control" id="usia" name="age" placeholder="Masukkan Usia Pasien">
                            </div>
                        </div>
                        <div class="form-2 d-flex justify-content-between mb-3">
                            <div class="golongan-darah mr-3" style="width:50%;">
                                <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Golongan Darah</label>
                                <br>
                                <select class="custom-select" name="blood_type">
                                    <option selected>Pilih Golongan Darah Pasien</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                    <option value="AB">AB</option>
                                </select>                          
                            </div>                            
                            <div class="rhesus" style="width:50%;">
                                <label for="rhesus" style="font-weight: bold;font-family: 'Montserrat';">Rhesus Pasien</label>
                                <select class="custom-select" name="rhesus">
                                    <option selected>Pilih Rhesus Pasien</option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Negatif</option>
                                </select>
                            </div>                        
                        </div>
                        <div class="form-3 d-flex">
                            <div class="form-group mr-3" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Rumah Sakit Dirawat</label>
                                <input type="text" class="form-control" id="rs-dirawat" name="hospital"  placeholder="Masukkan Nama Rumah Sakit">
                            </div>
                            <div class="form-group" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Kamar di Rumah Sakit</label>
                                <input type="text" class="form-control" id="kamar-rs" name="hospital_room"  placeholder="Masukkan Nama Kamar Pasien">
                            </div>
                        </div>
                        <div class="form-4 d-flex">
                            <div class="form-group mr-3" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="province"  placeholder="Masukkan Provinsi Pasien Berada">
                            </div>
                            <div class="form-group" style="width:50%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Kota/Kabupaten</label>
                                <input type="text" class="form-control" id="kota" name="city"  placeholder="Masukkan Kota/Kabupaten Pasien Berada">
                            </div>
                        </div>
                        <br>
                        <h4 style="font-family: 'Montserrat' !important; font-weight: bold !important;">Isi salah satu atau keduanya untuk Surat Permohonan Terapi Plasma Konvaselen (TPK)</h4>
                        <div class="form-5 d-flex">
                            <div class="file mr-3" style="width:30%;">
                                <label for="file" style="font-weight: bold;font-family: 'Montserrat';">Upload Surat Permohonan TPK</label>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" name="File_TPK" id="file-tpk">
                                <label class="custom-file-label" for="file-tpk">Unggah File</label>
                                </div>
                            </div>                            
                            <div class="form-group" style="width:70%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Link Surat Permohonan TPK</label>
                                <input type="text" class="form-control" id="link" name="Link_TPK"  placeholder="Masukkan Link Surat TPK">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Jumlah Plasma Yang Dibutuhkan</label>
                            <input type="number" class="form-control" id="plasma" name="jumlah_plasma"  placeholder="Masukan jumlah plasma yang pasien butuhkan">
                        </div>
                        <div class="golongan-darah mr-3" style="width:100%;">
                                <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Vaksin</label>
                                <br>
                                <select class="custom-select" name="vaccinated">
                                    <option selected>Sudah di Vaksin ?</option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Belum">Belum</option>
                                </select>                          
                        </div>   
                        <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;" >Ajukan Permohonan</button>
                    </form>
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