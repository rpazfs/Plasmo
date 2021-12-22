<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Berita') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Berita</a></div>
            <div class="breadcrumb-item"><a href="{{ route('berita') }}">Edit Berita</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-berita action="updateBerita" :beritaId="request()->beritaId" />
    </div>
</x-app-layout>