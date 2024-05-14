<div>
    <x-dialog-modal wire:model.live="modalRewardDelete" submit="edit">
        <x-slot name="title">
            Form delete reward
        </x-slot>

        <x-slot name="content">
            Delete {{$id}} - {{$name}}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalRewardDelete', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" @click="$wire.delete({{$id}})" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>

</div>
