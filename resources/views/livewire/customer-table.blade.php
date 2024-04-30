<div>


    <x-select  wire:model.live="pagination" class="text-sm mt-4 ">

        <option value="5">5</option>
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
            <th @click="$wire.sortField('id')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="id" />
ID</th>
            <th @click="$wire.sortField('name')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="name" />

                Name</th>
            <th @click="$wire.sortField('email')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="email" />

                Email</th>
            <th @click="$wire.sortField('address')" class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="address" />

                Address</th>

        </tr>
        <tr>
            <td class="p-2 border border-spacing-1"></td>
            <td class="p-2 border border-spacing-1"></td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.id" class="w-full text-sm"/> </td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.name" class="w-full text-sm"/> </td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.email" class="w-full text-sm"/> </td>
            <td class="p-2 border border-spacing-1"> <x-input type="search" wire:model.live="form.address" class="w-full text-sm"/> </td>
        </tr>

        </thead>

        <tbody>
        @isset($customers)
            @foreach($customers as $customer)
                <tr>
                    <td class="p-2  border border-spacing-1 text-center">{{ $loop->iteration }}</td>
                    <td class="p-2  border border-spacing-1">
                    </td>
                    <td class="p-2  border border-spacing-1">{{ $customer->id }}</td>
                    <td class="p-2  border border-spacing-1 text-center">{{ $customer->name }}</td>
                    <td class="p-2 border border-spacing-1">{{ $customer->email }}</td>
                    <td class="p-2 border border-spacing-1">{{ $customer->address }}</td>
                </tr>
            @endforeach
        @endisset
        </tbody>



    </table>


    <div class="mt-3">
        {{ $customers->onEachSide(1)->links() }}
    </div>

</div>
