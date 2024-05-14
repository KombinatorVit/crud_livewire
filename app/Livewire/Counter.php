<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 1;
    public $alert = false;



    public function increment()
    {
        $this->count++;
    }

    public function closeAlert()
    {
        $this->alert = false;
    }
    public function decrement()
    {
        if($this->count > 0) {
            $this->count--;
        } else{
             session()->flash('error', 'Cannot be less than 0');
             $this->alert = true;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
