<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Berita Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Berita</a></div>
            <div class="breadcrumb-item"><a href="{{ route('berita') }}">Buat Berita Baru</a></div>
        </div>
    </x-slot>

    <div class="content-settings d-flex flex-column" style="width: 100%;">
            <form style="width: 100%;" action="submit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Judul Berita</label>
                    <input type="text" class="form-control" id="judul-berita" name="judul_berita" placeholder="Masukkan judul berita">
                </div>
                <div class="form-group">
                    <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Isi Berita</label>
                    <input type="text" class="form-control" id="isi-berita" name="isi_berita" placeholder="Masukkan isi berita">
                </div>                   
                <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;">Buat Rumah Sakit</button>
            </form>
        </div>
</x-app-layout>