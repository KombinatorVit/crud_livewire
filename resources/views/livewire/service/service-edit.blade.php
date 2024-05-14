<div>


    <x-dialog-modal wire:model.live="modalServiceEdit" submit="edit">
        <x-slot name="title">
            Form edit service
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">


                <div class="col-span-12">
                    <x-label for="customer-edit" value="{{ __('Customer') }}"/>
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
                        @set-customer-edit.window="
                        $el.customer.addOption($event.detail.data)
                        $el.customer.addItem($event.detail.id)
                        "
                        id="customer-edit" class=" mt-1 w-full"
                        wire:model="form.customer"
                        autocomplete="customer-edit">
                        <option></option>

                    </x-tom>
                    <x-input-error for="form.customer" class="mt-2"/>
                </div>

                <div class="col-span-12">
                    <x-label for="car-edit" value="{{ __('Car') }}"/>
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
                        @set-car-edit.window="$el.car.addOption($event.detail.data)
                                                $el.car.addItem($event.detail.id)
                        "
                        id="car-edit" class=" mt-1 w-full"
                        wire:change="carChange"
                        wire:model="form.car"
                        autocomplete="car-edit">
                        <option></option>

                    </x-tom>
                    <x-input-error for="form.car" class="mt-2"/>
                </div>


                <div class="col-span-12">
                    <x-label for="type-edit" value="{{ __('Type') }}"/>
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
                        @set-type-edit.window="
                        $el.types.clear();
                        $el.types.clearOptions();
                        $el.types.addOption($event.detail.data)
                        $el.types.addItem($event.detail.id)
                        "
                        id="type-edit" class=" mt-1 w-full"
                        wire:model="form.type"
                        autocomplete="type-edit">
                        <option></option>

                    </x-tom>
                    <x-input-error for="form.type" class="mt-2"/>
                </div>


            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalServiceEdit', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3">
                {{ __('Update') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
