<div class="flex flex-col items-center justify-center p-4 bg-gray-100 rounded-md shadow-lg">

{{ $title}}
    <h2 x-text="$wire.title.length"></h2>


    <div class=" mt-4 text-gray-700 font-bold text-lg text-center">
        Author: {{$author}}
    </div>


    <button type="button" x-on:click="$wire.$refresh()">    Refresh</button>

    <form>
        <label for="title">Title:</label>

        <input type="text" id="title" wire:model.live="title">

        <button type="button" @click="$wire.set('title', '')">Clear</button>
    </form>




</div>



