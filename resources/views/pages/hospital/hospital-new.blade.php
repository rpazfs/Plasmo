<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Hospital Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Hospital</a></div>
            <div class="breadcrumb-item"><a href="{{ route('hospital') }}">Buat Hospital Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-hospital action="createHospital" />
    </div>
</x-app-layout>
