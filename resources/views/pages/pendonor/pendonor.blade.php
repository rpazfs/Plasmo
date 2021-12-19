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
        @include('components.navbar-pendonor')
    </header>

    <main>
        <section class="hero">
            <article class="hero text-center pt-5 pb-5 container">
                <h1>Pendaftaran Pendonor Plasma Darah</h1>
                <p>Isikan data diri Anda untuk mendaftar menjadi pendonor plasma darah.</p>
            </article>
        </section>
        <section class="daftar-rs pb-5">
            <article class="daftar-rs container">
                <div class="content-settings d-flex flex-column" style="width: 100%;">
                    <form style="width: 100%;">
                        <h4 style="font-family: 'Montserrat' !important; font-weight: bold !important;">Data Pendonor</h4>
                        <div class="form-group">
                            <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Nama Lengkap Pendonor</label>
                            <input type="text" class="form-control" id="nama-pendonor"  placeholder="Masukkan Nama Lengkap Pendonor">
                        </div>
                        <div class="form-group">
                            <label for="number" style="font-weight: bold; font-family: 'Montserrat';">No. Telepon (WA) Yang Dapat Dihubungi</label>
                            <input type="number" class="form-control" id="no-hp-pendonor"  placeholder="Masukkan Nomor Telepon Anda">
                            <p>Pastikan No. HP yang di masukan belum pernah dipakai untuk mendaftarkan pengajuan permohonan sebelumnya</p>
                        </div>
                        <div class="form-group">
                                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">NIK (Nomor Induk Kependudukan)</label>
                                <input type="number" class="form-control" id="nik"  placeholder="Masukkan NIK Anda">
                        </div>
                        <hr>
                        <div class="from-1 d-flex justify-content-between">
                            <div class="jenis-kelamin mr-3" style="width:50%;">
                                <label for="jenis-kelamin" style="font-weight: bold;font-family: 'Montserrat';">Jenis Kelamin</label>
                                <select class="custom-select">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group usia" style="width:50%;">
                                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Usia</label>
                                <input type="number" class="form-control" id="usia"  placeholder="Masukkan Usia Anda">
                            </div>
                        </div>                        
                        <div class="form-3 d-flex justify-content-between">
                            <div class="golongan-darah" style="width:24%;">
                                <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Golongan Darah</label>
                                <br>
                                <select class="custom-select">
                                    <option selected>Pilih Golongan Darah</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">O</option>
                                    <option value="4">AB</option>
                                </select>                          
                            </div>                            
                            <div class="rhesus" style="width:24%;">
                                <label for="rhesus" style="font-weight: bold;font-family: 'Montserrat';">Rhesus</label>
                                <select class="custom-select">
                                    <option selected>Pilih Rhesus</option>
                                    <option value="1">Positif</option>
                                    <option value="2">Negatif</option>
                                </select>
                            </div>            
                            <div class="form-group berat-badan" style="width:24%;">
                                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Berat Badan</label>
                                <input type="number" class="form-control" id="berat-badan"  placeholder="Masukkan Berat Badan Anda">
                            </div>
                            <div class="form-group tinggi-badan" style="width:24%;">
                                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Tinggi Badan</label>
                                <input type="number" class="form-control" id="tinggi-badan"  placeholder="Masukkan Tinggi Badan Anda">
                            </div>            
                        </div>
                        <div class="form-2 d-flex justify-content-between">
                            <div class="form-group" style="width:24%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi"  placeholder="Masukkan Provinsi Anda">
                            </div>
                            <div class="form-group" style="width:24%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Kota/Kabupaten</label>
                                <input type="text" class="form-control" id="kota"  placeholder="Masukkan Kota Anda">
                            </div>       
                            <div class="form-group kecamatan" style="width:24%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan"  placeholder="Masukkan Kecamatan Anda">
                            </div>
                            <div class="form-group kelurahan" style="width:24%;">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan"  placeholder="Masukkan Kelurahan Anda">
                            </div>            
                        </div>
                        <div class="form-group d-flex flex-column">
                                <label for="textarea" style="font-weight: bold; font-family: 'Montserrat';">Alamat Lengkap</label>
                                <textarea name="textarea" id="alamat" cols="30" rows="5" placeholder="Masukan Alamat Lengkap Anda"></textarea>
                        </div>
                        <hr>
                        <div class="form-4 d-flex mb-3">
                            <div class="donor-darah mr-3" style="width:50%;">
                                    <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Apakah sudah pernah berdonor darah biasa?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="sudah-donor-darah" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="sudah-donor-darah">Pernah</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="belum-donor-darah" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="belum-donor-darah">Tidak Pernah</label>
                                    </div>
                            </div>
                            <div class="darah-apheresis" style="width:50%;">
                                    <label for="radio" style="font-weight: bold;font-family: 'Montserrat';">Apakah sudah pernah berdonor darah Apheresis ?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="sudah-darah-apheresis" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="sudah-darah-apheresis">Pernah</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="belum-darah-apheresis" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="belum-darah-apheresis">Tidak Pernah</label>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group mr-3">
                                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Nama Rumah Sakit Anda dirawat?</label>
                                <input type="text" class="form-control" id="rs-dirawat"  placeholder="Masukan nama Rumah Sakit Anda dirawat saat covid-19">
                        </div>
                        <div class="form-5 d-flex">
                            <div class="form-group d-flex flex-column mr-3" style="width:70%;">
                                <label for="swab-positif" style="font-weight: bold;font-family: 'Montserrat';">Kapan tanggal pertama kali memiliki hasil swab PCR Positif ?</label>
                                <input class="input-date" type="date" id="swab-positif" name="swab-positif" min="2000-01-02">
                            </div>
                            <div class="file" style="width:30%;">
                                <label for="file" style="font-weight: bold;font-family: 'Montserrat';">Upload dokumen PCR Positif</label>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file-tpk">
                                <label class="custom-file-label" for="file-tpk">Unggah File</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-5 d-flex">
                            <div class="form-group d-flex flex-column mr-3" style="width:70%;">
                                <label for="swab-negatif" style="font-weight: bold;font-family: 'Montserrat';">Kapan Anda dinyatakan sembuh dari Covid-19?</label>
                                <input class="input-date" type="date" id="swab-negatif" name="swab-negatif" min="2000-01-02">
                            </div>
                            <div class="file" style="width:30%;">
                                <label for="file" style="font-weight: bold;font-family: 'Montserrat';">Upload dokumen PCR Negatif</label>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file-tpk">
                                <label class="custom-file-label" for="file-tpk">Unggah File</label>
                                </div>
                            </div>
                        </div>                        
                        <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;">Donor Plasma</button>
                    </form>
                </div>
            </article>
        </section>        
    </main>

    @include('components.footer-pendonor')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>