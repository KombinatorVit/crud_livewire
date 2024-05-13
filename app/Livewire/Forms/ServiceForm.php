<?php

namespace App\Livewire\Forms;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Type;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ServiceForm extends Form
{
    public ?Service $service;

    public $id;


    #[Validate('required', as: 'Customer')]
    public $customer;

    #[Validate('required', as: 'Car')]
    public $car;


    #[Validate('', as: 'Type')]
    public $type;

    public function setService(Service $service): void
    {
        $this->service = $service;

        $this->id = $service->id;
//        dd($service);

        $this->customer = $service->customer->id;
        $this->car = $service->type->id;
        $this->type = $service->type->car->id;
    }

    public function setCustomer(): array
    {
        $setCustomer = [];
        $customer = Customer::select('id', 'name')->get();

        foreach ($customer as $ind => $c) {
            $setCustomer[$ind] = ['id' => $c->id, 'name' => $c->name];
        }

        return $setCustomer;
    }

    public function setCar(): array
    {
        $setCar = [];
        $cars = Car::select('id', 'name')->get();

        foreach ($cars as $ind => $c) {
            $setCar[$ind] = ['id' => $c->id, 'name' => $c->name];
        }

        return $setCar;
    }

    public function setType(): array
    {
        $setType = [];
        $types = Type::select('id', 'name')->where('car_id', $this->car)->get();

        foreach ($types as $ind => $c) {
            $setType[$ind] = ['id' => $c->id, 'name' => $c->name];
        }

        return $setType;
    }


    public function store(): void
    {
        Service::create([
            'customer_id' => $this->customer,
            'type_id' => $this->type
        ]);

        $this->reset();

    }


    public function update(): void
    {
        $this->service->where('id', $this->id)
            ->update([
            'customer_id' => $this->customer,
            'type_id' => $this->type
        ]);
    }
}
