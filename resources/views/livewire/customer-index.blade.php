<div class="">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  bg-white px-8 py-8">

            <h1 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                {{ __(' Customers') }}
            </h1>


            <livewire:customer-create/>
            <livewire:customer-edit/>
            <livewire:customer-delete/>
            <livewire:customer-table/>

        </div>
    </div>
</div>
