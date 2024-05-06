<?php

namespace App\Livewire\Reward;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class RewardIndex extends Component
{


    #[Title('Customers')]
    public function render() : View
    {
        return view('livewire.customer-index');
    }
}
