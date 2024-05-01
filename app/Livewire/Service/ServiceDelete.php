<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class ServiceDelete extends Component
{
    #[Locked]
    public $id;
    #[Locked]
    public $name;

    public $modalServiceDelete = false;

    #[On('service-delete')]
    public function set_service($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->modalServiceDelete = true;
    }

    public function delete( $id)
    {
       $del =  Service::destroy($this->id);

       ($del) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-service-create-delete')->to(ServiceTable::class);

        $this->modalServiceDelete = false;
    }



    public function render()
    {
        return view('livewire.service.service-delete');
    }
}
