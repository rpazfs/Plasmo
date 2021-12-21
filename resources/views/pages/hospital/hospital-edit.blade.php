<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Hospital') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Hospital</a></div>
            <div class="breadcrumb-item"><a href="{{ route('hospital') }}">Edit Hospital</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-hospital action="updateHospital" :hospitalId="request()->hospitalId" />
    </div>
</x-app-layout>