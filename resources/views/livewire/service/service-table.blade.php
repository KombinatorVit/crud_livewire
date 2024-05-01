<div>


   <x-select  wire:model.live="pagination" class="text-sm mt-4">
        <option value="5" >5</option>
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </x-select>

    <table class="table-fixed w-full text-center mt-3">
        <thead>


        <tr>

            <th class="p-2 whitespace-nowrap border border-spacing-1">#</th>
            <th class="p-2 whitespace-nowrap border border-spacing-1">Action</th>
            <th @click="$wire.sortField('services_id')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="services_id" />
ID</th>
            <th @click="$wire.sortField('customers.name')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="customers.name" />
Customer
                </th>
            <th @click="$wire.sortField('cars.name')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="cars.name" />

                Car</th>
            <th @click="$wire.sortField('types.name')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="types.name" />

                Type</th>

        </tr>
        <tr>
            <td class="p-2 border border-spacing-1"></td>
            <td class="p-2 border border-spacing-1 text-xs" >

            </td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.id" class="w-full text-sm"/> </td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.customer" class="w-full text-sm"/> </td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.car" class="w-full text-sm"/> </td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.type" class="w-full text-sm"/> </td>
        </tr>

        </thead>

        <tbody>
        @isset($data)
            @foreach($data as $service)
                <tr>
                    <td class="p-2  border border-spacing-1 text-center">{{ $loop->iteration }}</td>
                    <td class="p-2  border border-spacing-1">
                        <x-button type="button" @click="$dispatch('service-edit', {
                       id : '{{$service->id}}'})">
                            Edit
                        </x-button>
                        <x-danger-button @click="$dispatch('service-delete', {id : '{{$service->id}}', name : '{{$service->name}}'})"> Delete</x-danger-button>
                    </td>
                    <td class="p-2  border border-spacing-1">{{ $service->id }}</td>
                    <td class="p-2  border border-spacing-1 text-center">{{ $service->customer->name }}</td>
                    <td class="p-2 border border-spacing-1">{{ $service->type->car->name }}</td>
                    <td class="p-2 border border-spacing-1">{{ $service->type->name }}</td>
                </tr>
            @endforeach
        @endisset
        </tbody>



    </table>


    <div class="mt-3">
        {{ $data->onEachSide(1)->links() }}
    </div>

</div>
