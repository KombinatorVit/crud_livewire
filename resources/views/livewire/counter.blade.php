<div>
    <div class="mb-6">


        @if(session()->has('error') && $alert)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                <strong class="font-bold">Error:</strong>

                <span>{{ session('error') }}</span>

                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" viewBox="0 0 20 20"
                         wire:click="closeAlert()" wire:click.outside="closeAlert()">
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                    </svg>
                </span>
            </div>

        @endif
    </div>

    <div class="flex flex-col items-center justify-center p-4 bg-gray-100 rounded-md shadow-lg">


        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $count }}</h1>

        <div class="flex space-x-4">
            <button
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"
                wire:click="increment">
                +
            </button>

            <button
                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                wire:click="decrement">
                -
            </button>


        </div>
    </div>




</div>
