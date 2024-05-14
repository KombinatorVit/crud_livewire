<div>

    <x-button @click="$wire.set('modalRewardCreate', true)">
        {{ __('Create Reward') }}
    </x-button>


    <x-dialog-modal wire:model.live="modalRewardCreate" submit="save">
        <x-slot name="title">
            Form create reward
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">

                <div class="col-span-12">
                    <x-label for="form.customer" value="{{ __('Customer') }}"/>
                    <x-select id="form.customer" class=" mt-1 w-full" type="text" wire:model="form.customer"
                              autocomplete="form.customer">
                        <option></option>

                        @isset(    $customers)
                            @foreach($customers as $customer)

                                <option value="{{$customer->id}}"> {{$customer->name}}</option>
                            @endforeach

                        @endisset
                    </x-select>
                    <x-input-error for="form.customer" class="mt-2"/>
                </div>

                <div class="col-span-12">
                    <x-label for="form.month" value="{{ __('Month') }}"/>
                    <x-select id="form.month" class=" mt-1 w-full" type="text" wire:model="form.month"
                              autocomplete="form.month">
                        <option></option>

                        @for($i=1; $i<=12; $i++)

                            <option value="{{$i}}"> {{$i}}</option>

                        @endfor
                    </x-select>
                    <x-input-error for="form.month" class="mt-2"/>
                </div>

                <div class="col-span-12">
                    <x-label for="form.year" value="{{ __('Year') }}"/>
                    <x-select id="form.year" class=" mt-1 w-full" type="text" wire:model="form.year"
                              autocomplete="form.year">
                        <option></option>

                        @for($i=2021; $i<=date( 'Y'); $i++)

                            <option value="{{$i}}"> {{$i}}</option>

                        @endfor
                    </x-select>
                    <x-input-error for="form.year" class="mt-2"/>
                </div>

                <div class="col-span-12">
                    <x-label for="form.name" value="{{ __('Reward') }}"/>
                    <x-input id="form.name" class=" mt-1 w-full" type="text" wire:model="form.name"
                             autocomplete="form.name"/>
                    <x-input-error for="form.name" class="mt-2"/>
                </div>

            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalRewardCreate', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
