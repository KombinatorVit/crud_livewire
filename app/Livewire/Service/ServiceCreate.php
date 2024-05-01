<?php

namespace App\Livewire\Service;

use App\Livewire\Forms\ServiceForm;
use Livewire\Component;

class ServiceCreate extends Component
{

    public ServiceForm $form;

    public $modalServiceCreate = false;

    public function save()
    {

        $this->validate();
        $checkForm = $this->form->store();

        is_null($checkForm) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-service-create-save')->to(ServiceTable::class);


    }




    public function render()
    {
        return view('livewire.service.service-create');
    }
}
