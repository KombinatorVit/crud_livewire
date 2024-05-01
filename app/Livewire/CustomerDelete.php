<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class CustomerDelete extends Component
{
    #[Locked]
    public $id;
    #[Locked]
    public $name;

    public $modalCustomerDelete = false;

    #[On('customer-delete')]
    public function set_customer($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->modalCustomerDelete = true;
    }

    public function delete( $id)
    {
       $del =  Customer::destroy($this->id);

       ($del) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-customer-create-delete')->to(CustomerTable::class);

        $this->modalCustomerDelete = false;
    }



    public function render()
    {
        return view('livewire.customer-delete');
    }
}
