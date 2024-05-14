<div>

    <x-button @click="$wire.set('modalCustomerCreate', true)">
        {{ __('Create Customer') }}
    </x-button>

{{--    <x-button wire:click="set('modalCustomerCreate', true)">--}}
{{--        {{ __('Create Customer') }}--}}
{{--    </x-button>--}}


    <x-dialog-modal wire:model.live="modalCustomerCreate" submit="save">
        <x-slot name="title">
            Form customer
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">

                <div class="col-span-12">
                    <x-label for="form.name" value="{{ __('Name') }}" />
                    <x-input id="form.name" class=" mt-1 w-full" type="text"  wire:model="form.name"  autocomplete="form.name" />
                    <x-input-error for="form.name" class="mt-2" />
                </div>

                <div class="col-span-12">
                    <x-label for="form.email" value="{{ __('Email') }}" />
                    <x-input id="form.email" class=" mt-1 w-full" type="text"   wire:model="form.email" require autocomplete="form.email" />
                    <x-input-error for="form.email" class="mt-2" />
                </div>

                <div class="col-span-12">
                    <x-label for="form.address" value="{{ __('Address') }}" />
                    <x-input id="form.address" class=" mt-1 w-full" type="text" wire:model="form.address" require autocomplete="form.address" />
                    <x-input-error for="form.address" class="mt-2" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerCreate', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
