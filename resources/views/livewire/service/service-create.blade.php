<div>

    <x-button @click="$wire.set('modalServiceCreate', true)">
        {{ __('Create Service') }}
    </x-button>


    <x-dialog-modal wire:model.live="modalServiceCreate" submit="save">
        <x-slot name="title">
            Form service
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">

                <div class="col-span-12">
                    <x-label for="customer-create" value="{{ __('Customer') }}"/>
                    <x-tom
                        x-init="$el.customer = new Tom($el,
                        {
                        sortField: {
		                field: 'name',
                        direction: 'asc',

                        },
                        valueField: 'id',
	                    labelField: 'name',
	                     searchField: 'name',
                        }
                        );"
                        @set-customer-create.window="$el.customer.addOption($event.detail.data)"
                        @set-reset.window="$el.customer.clear()"
                        id="customer-create" class=" mt-1 w-full"
                        wire:model="form.customer"
                        autocomplete="customer-create">
                        <option></option>

                    </x-tom>
                    <x-input-error for="form.customer" class="mt-2"/>
                </div>

                <div class="col-span-12">
                    <x-label for="car-create" value="{{ __('Car') }}"/>
                    <x-tom
                        x-init="$el.car = new Tom($el,
                        {
                     sortField: {
		                field: 'name',
                        direction: 'asc',

                        },
                        valueField: 'id',
	                    labelField: 'name',
	                     searchField: 'name',
                        }
                        );"
                        @set-car-create.window="$el.car.addOption($event.detail.data)"
                        @set-reset.window="$el.car.clear()"
                        id="car-create" class=" mt-1 w-full"
                        wire:change="carChange"
                        wire:model="form.car"
                        autocomplete="car-create">
                        <option></option>

                    </x-tom>
                    <x-input-error for="form.car" class="mt-2"/>
                </div>


                <div class="col-span-12">
                    <x-label for="type-create" value="{{ __('Type') }}"/>
                    <x-tom
                        x-init="$el.types = new Tom($el,
                        {
                     sortField: {
		                field: 'name',
                        direction: 'asc',

                        },
                        valueField: 'id',
	                    labelField: 'name',
	                     searchField: 'name',
                        }
                        );"
                        @set-type-create.window="
                        $el.types.clear();
                        $el.types.clearOptions();
                        $el.types.addOption($event.detail.data)
                        "
                        @set-reset.window="
                        $el.types.clear();
                        $el.types.clearOptions();
                        "
                        id="type-create" class=" mt-1 w-full"
                        wire:model="form.type"
                        autocomplete="type-create">
                        <option></option>

                    </x-tom>
                    <x-input-error for="form.type" class="mt-2"/>
                </div>


            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalServiceCreate', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
