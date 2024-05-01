<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CustomerForm extends Form
{
    public ?Customer $customer;

    public $id;

    #[Validate('required|min:3')]
    public $name;


    #[Validate('required|min:3')]
    public $email;


    #[Validate('required|min:3')]
    public $address;


    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->address = $customer->address;
    }

    public function store()
    {

        Customer::create($this->except(['customer']));

        $this->reset();


    }

    public function update()
    {

        $this->customer->update($this->except(['customer']));

    }
}
