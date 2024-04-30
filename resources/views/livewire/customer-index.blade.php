<div>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <h1>
            Test
        </h1>

                <x-button @click="$dispatch('notify', { title: 'sending notification'})">

                    Click me
                </x-button>

                <div x-data="{ open: false }"
                x-show="open"
                     @notify.window="Toastify({
                     text: 'This is a toast',
                     duration: 3000,
                          newWindow: true,
                          close: true,
                         gravity: 'top',
                         position: 'left',
                         stopOnFocus: true,
                         style: {
                         background: 'linear-gradient(to right, #00b09b, #96c93d)',
                         },
                         }).showToast();"
                         >

                </div>

    </div>
</div>
</div>
