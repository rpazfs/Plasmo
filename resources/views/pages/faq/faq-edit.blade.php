<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Faq') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Faq</a></div>
            <div class="breadcrumb-item"><a href="{{ route('faq') }}">Edit Faq</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-faq action="updateFaq" :FaqId="request()->faqId" />
    </div>
</x-app-layout>