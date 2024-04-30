<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;

class CustomerCreate extends Component
{

    public CustomerForm $form;

    public $modalCustomerCreate = false;

    public function save()
    {

        $this->validate();
        $checkForm = $this->form->store();

        is_null($checkForm) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-customer-create-save')->to(CustomerTable::class);


    }


    public function render()
    {
        return view('livewire.customer-create');
    }
}
