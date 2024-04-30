<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class CustomerIndex extends Component
{


    #[Title('Customers')]
    public function render() : View
    {
        return view('livewire.customer-index');
    }
}
