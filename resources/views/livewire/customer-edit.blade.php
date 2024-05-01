<div>


    <x-dialog-modal wire:model.live="modalCustomerEdit" submit="edit">
        <x-slot name="title">
            Form edit customer
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">

                <div class="col-span-12">
                    <x-label for="form.name" value="{{ __('Name') }}"/>
                    <x-input id="form.name" class=" mt-1 w-full" type="text" wire:model="form.name"
                             autocomplete="form.name"/>
                    <x-input-error for="form.name" class="mt-2"/>
                </div>

                <div class="col-span-12">
                    <x-label for="form.email" value="{{ __('Email') }}"/>
                    <x-input id="form.email" class=" mt-1 w-full" type="text" wire:model="form.email" require
                             autocomplete="form.email"/>
                    <x-input-error for="form.email" class="mt-2"/>
                </div>

                <div class="col-span-12">
                    <x-label for="form.address" value="{{ __('Address') }}"/>
                    <x-input id="form.address" class=" mt-1 w-full" type="text" wire:model="form.address" require
                             autocomplete="form.address"/>
                    <x-input-error for="form.address" class="mt-2"/>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerEdit', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3">
                {{ __('Update') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
