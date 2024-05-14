<?php

namespace App\Livewire\Reward;

use App\Models\Reward;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class RewardDelete extends Component
{

    #[Locked]
    public $id;
    #[Locked]
    public $name;

    public $modalRewardDelete = false;

    #[On('reward-delete')]
    public function set_reward($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->modalRewardDelete = true;
    }

    public function delete( $id)
    {
        $del =  Reward::destroy($this->id);

        ($del) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-reward-create-delete')->to(RewardTable::class);

        $this->modalRewardDelete = false;
    }



    public function render() : View
    {
        return view('livewire.reward.reward-delete');
    }
}
