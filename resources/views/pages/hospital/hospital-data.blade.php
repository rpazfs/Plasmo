<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Hospital') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Hospital</a></div>
            <div class="breadcrumb-item"><a href="{{ route('hospital') }}">Data Hospital</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.hospital name="hospital" :model="$hospital" />
    </div>
</x-app-layout>
