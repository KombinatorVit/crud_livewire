<?php

namespace App\Livewire\Service;


use App\Livewire\Forms\ServiceForm;
use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Component;

class ServiceEdit extends Component
{
    public ServiceForm $form;

    public $modalServiceEdit = false;

    #[On('service-edit')]
    public function set_service(Service $id)
    {
        $this->form->setService($id);
        $this->modalServiceEdit = true;
    }

    public function edit()
    {

        $this->validate();
        $update = $this->form->update();

        is_null($update) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-service-create-edit')->to(ServiceTable::class);
    }

    public function render()
    {
        return view('livewire.service.service-edit');
    }
}
