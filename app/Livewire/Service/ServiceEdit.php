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

        $this->dispatch('set-customer-edit', id: $this->form->customer, data: $this->form->setCustomer());
        $this->dispatch('set-car-edit', id: $this->form->car, data: $this->form->setCar());
        $this->dispatch('set-type-edit', id: $this->form->type, data: $this->form->setType());


        $this->modalServiceEdit = true;
    }


    public function carChange()
    {
        $this->dispatch('set-type-edit', id: $this->form->type, data: $this->form->setType());

        $this->resetErrorBag();
    }

    public function edit()
    {

        $this->validate();


        try {

            $this->form->update();
            $this->dispatch('notify', title: 'success', message: 'Success');
            $this->dispatch('dispatch-service-create-edit')->to(ServiceTable::class);


        } catch (\Exception $e) {
            $this->dispatch('notify', title: 'error', message: 'Failed');
        }


    }

    public function render()
    {
        return view('livewire.service.service-edit');
    }
}
