<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Faq Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Faq</a></div>
            <div class="breadcrumb-item"><a href="{{ route('faq') }}">Buat Faq Baru</a></div>
        </div>
    </x-slot>

    <div class="content-settings d-flex flex-column" style="width: 100%;">
            <form style="width: 100%;" action="submit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Pertanyaan FAQ</label>
                    <input type="text" class="form-control" id="judul-faq" name="pertanyaan" placeholder="Masukkan pertanyaan FAQ">
                </div>
                <div class="form-group">
                    <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Jawaban FAQ</label>
                    <input type="text" class="form-control" id="isi-faq" name="jawaban" placeholder="Masukkan jawaban FAQ">
                </div>                   
                <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;">Buat FAQ</button>
            </form>
        </div>
</x-app-layout>