<?php

namespace App\Livewire\Reward;


use App\Livewire\Forms\RewardForm;
use Livewire\Component;

class RewardCreate extends Component
{

    public RewardForm $form;

    public $modalRewardCreate = false;

    public function save()
    {

        $this->validate();
        $checkForm = $this->form->store();

        is_null($checkForm) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-reward-create-save')->to(RewardTable::class);


    }




    public function render()
    {
        return view('livewire.reward.reward-create', [
            'customers' => \App\Models\Customer::all(),
        ]);
    }
}
