<div class="">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  bg-white px-8 py-8">

            <h1 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                {{ __(' Services') }}
            </h1>

            <livewire:service.service-create/>
            <livewire:service.service-edit/>
            <livewire:service.service-delete/>
            <livewire:service.service-table/>

        </div>
    </div>
</div>
