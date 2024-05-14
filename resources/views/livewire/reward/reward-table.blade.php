<div>


    <x-select wire:model.live="pagination" class="text-sm mt-4">
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

            <th @click="$wire.sortField('customers.name')"
                class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="customers.name"/>
                Customer Name
            </th>

            <th @click="$wire.sortField('rewards.month')"
                class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="rewards.month"/>
                Month
            </th>

            <th @click="$wire.sortField('rewards.year')"
                class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="rewards.year"/>

                Year
            </th>
            <th @click="$wire.sortField('rewards.name')"
                class="p-2 whitespace-nowrap border border-spacing-1 cursor-pointer">
                <x-sort :$sortDirection :$sortBy field="rewards.name"/>

                Reward Name
            </th>


        </tr>
        <tr>
            <td class="p-2 border border-spacing-1"></td>
            <td class="p-2 border border-spacing-1 text-xs">

            </td>

            <td class="p-2 border border-spacing-1">
                <x-input type="search" wire:model.live="customer_name" class="w-full text-sm"/>
            </td>
            <td class="p-2 border border-spacing-1">
                <x-input type="search" wire:model.live="form.month" class="w-full text-sm"/>
            </td>
            <td class="p-2 border border-spacing-1">
                <x-input type="search" wire:model.live="form.year" class="w-full text-sm"/>
            </td>
            <td class="p-2 border border-spacing-1">
                <x-input type="search" wire:model.live="form.name" class="w-full text-sm"/>
            </td>
        </tr>

        </thead>

        <tbody>
        @isset($rewards)
            @foreach($rewards as $reward)
                <tr>
                    <td class="p-2  border border-spacing-1 text-center">{{ $loop->iteration }}</td>
                    <td class="p-2  border border-spacing-1">
                        <x-button type="button" @click="$dispatch('reward-edit', {
                       id : '{{$reward->id}}'})">
                            Edit
                        </x-button>
                        <x-danger-button
                            @click="$dispatch('reward-delete', {id : '{{$reward->id}}', name : '{{$reward->name}}'})">
                            Delete
                        </x-danger-button>
                    </td>
                    <td class="p-2  border border-spacing-1 text-center">{{ $reward->customer_name }}</td>
                        <td class="p-2  border border-spacing-1 text-center">{{ $reward->month }}</td>
                    <td class="p-2  border border-spacing-1 text-center">{{ $reward->year }}</td>
                    <td class="p-2  border border-spacing-1 text-center">{{ $reward->reward_name }}</td>

                </tr>
            @endforeach
        @endisset
        </tbody>


    </table>


    <div class="mt-3">
        {{ $rewards->onEachSide(1)->links() }}
    </div>

</div>
