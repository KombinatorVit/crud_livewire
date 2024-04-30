<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use App\Traits\WithSorting;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerTable extends Component
{
    use WithPagination;
    use WithSorting;

    public CustomerForm $form;

    public $pagination = 5;
    public $sortBy = 'customers.id';
    public $sortDirection = 'desc';

    #[On('dispatch-customer-create-save')]
    public function render()
    {
        return view('livewire.customer-table', [
            'customers' => Customer::where('id', 'like', '%' . $this->form->id . '%')->
            where('name', 'like', '%' . $this->form->name . '%')->
            where('email', 'like', '%' . $this->form->email . '%')->
            where('address', 'like', '%' . $this->form->address . '%')->
            orderBy($this->sortBy, $this->sortDirection)->paginate($this->pagination),
        ]);
    }
}
