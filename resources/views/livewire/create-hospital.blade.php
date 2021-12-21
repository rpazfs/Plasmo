<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Hospital') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data hospital baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="name" value="{{ __('Nama') }}" />
                <small>Nama Lengkap Hospital</small>
                <x-jet-input id="name" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="hospital.name" />
                <x-jet-input-error for="hospital.name" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="hospital.address" />
                <x-jet-input-error for="hospital.address" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="hotline" value="{{ __('Hotline') }}" />
                <x-jet-input id="hotline" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="hospital.hotline" />
                <x-jet-input-error for="hospital.hotline" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
