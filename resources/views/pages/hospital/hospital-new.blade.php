<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Hospital Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Hospital</a></div>
            <div class="breadcrumb-item"><a href="{{ route('hospital') }}">Buat Hospital Baru</a></div>
        </div>
    </x-slot>

    <div class="content-settings d-flex flex-column" style="width: 100%;">
            <form style="width: 100%;" action="submit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Nama Rumah Sakit</label>
                    <input type="text" class="form-control" id="nama-rumah-sakit" name="name" placeholder="Masukkan Nama Rumah Sakit">
                </div>
                <div class="form-group">
                    <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Alamat Rumah Sakit</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Masukkan Alamat Rumah Sakit">
                </div>
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Hotline Rumah Sakit</label>
                    <input type="number" class="form-control" id="hotline" name="hotline" placeholder="Masukkan Hotline Rumah Sakit">
                </div>
                <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;">Buat Rumah Sakit</button>
            </form>
        </div>
</x-app-layout>