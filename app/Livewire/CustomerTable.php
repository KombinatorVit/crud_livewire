<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;

class CustomerTable extends Component
{

    #[On('dispatch-customer-create-save')]
    public function render()
    {
        return view('livewire.customer-table', [
            'customers' => Customer::get(),
        ]);
    }
}
