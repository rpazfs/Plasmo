<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Hospital') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Hospital</a></div>
            <div class="breadcrumb-item"><a href="{{ route('hospital') }}">Edit Hospital</a></div>
        </div>
    </x-slot>

    <div class="content-settings d-flex flex-column" style="width: 100%;">
        <form style="width: 100%;" action="submit" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="text" style="font-weight: bold;font-family: 'Montserrat';">Nama Rumah Sakit</label>
                <input type="text" class="form-control" id="nama-rumah-sakit" name="name" placeholder="Masukkan Nama Rumah Sakit" value = {{ $hospital->name }}>
            </div>
            <div class="form-group">
                <label for="text" style="font-weight: bold; font-family: 'Montserrat';">Alamat Rumah Sakit</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Masukkan Alamat Rumah Sakit" value = {{ $hospital->address }}>
            </div>
            <div class="form-group">
                <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Hotline Rumah Sakit</label>
                <input type="number" class="form-control" id="hotline" name="hotline" placeholder="Masukkan Hotline Rumah Sakit" value = {{ $hospital->hotline }}>
            </div>
            <div style="display:flex; flex-direction:row; justify-content: space-between;">
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma A+</label>
                    <input type="number" class="form-control" id="stok_plasma_a_positif" name="stok_plasma_a_positif" placeholder="Masukkan Stok Plasma A+" value = {{ $hospital->stok_plasma_a_positif }}>
                </div>
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma A-</label>
                    <input type="number" class="form-control" id="stok_plasma_a_negatif" name="stok_plasma_a_negatif" placeholder="Masukkan Stok Plasma A-" value = {{ $hospital->stok_plasma_a_negatif }}>
                </div>
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma B+</label>
                    <input type="number" class="form-control" id="stok_plasma_b_positif" name="stok_plasma_b_positif" placeholder="Masukkan Stok Plasma B+" value = {{ $hospital->stok_plasma_b_positif }}>
                </div>
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma B-</label>
                    <input type="number" class="form-control" id="stok_plasma_b_negatif" name="stok_plasma_b_negatif" placeholder="Masukkan Stok Plasma B-" value = {{ $hospital->stok_plasma_b_negatif }}>
                </div>
            </div> 
            <div style="display:flex; flex-direction:row; justify-content: space-between;">
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma AB+</label>
                    <input type="number" class="form-control" id="stok_plasma_ab_positif" name="stok_plasma_ab_positif" placeholder="Masukkan Stok Plasma AB+"value = {{ $hospital->stok_plasma_ab_positif }}>
                </div>
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma AB-</label>
                    <input type="number" class="form-control" id="stok_plasma_ab_negatif" name="stok_plasma_ab_negatif" placeholder="Masukkan Stok Plasma AB-" value = {{ $hospital->stok_plasma_ab_negatif }}>
                </div>
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma O+</label>
                    <input type="number" class="form-control" id="stok_plasma_o_positif" name="stok_plasma_o_positif" placeholder="Masukkan Stok Plasma O+" value = {{ $hospital->stok_plasma_o_positif }}>
                </div>
                <div class="form-group">
                    <label for="number" style="font-weight: bold; font-family: 'Montserrat';">Stok Plasma O-</label>
                    <input type="number" class="form-control" id="stok_plasma_o_negatif" name="stok_plasma_o_negatif" placeholder="Masukkan Stok Plasma O-" value = {{ $hospital->stok_plasma_o_negatif }}>
                </div>
            </div>                 
            <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;">Edit Rumah Sakit</button>
        </form>
    </div>
</x-app-layout>