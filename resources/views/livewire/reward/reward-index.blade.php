<div class="">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Rewards') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  bg-white px-8 py-8">

            <h1 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                {{ __(' Rewards') }}
            </h1>


            <livewire:reward.reward-create/>
            <livewire:reward.reward-table/>
            <livewire:reward.reward-edit/>
            <livewire:reward.reward-delete/>

        </div>
    </div>
</div>
