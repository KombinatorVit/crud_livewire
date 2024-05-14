<?php

namespace App\Livewire\Reward;


use App\Livewire\Forms\RewardForm;
use App\Models\Reward;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class RewardEdit extends Component
{
    public RewardForm $form;

    public $modalRewardEdit = false;

    #[On('reward-edit')]
    public function set_reward(Reward $id)
    {
        $this->form->setReward($id);
        $this->modalRewardEdit = true;
    }

    public function edit()
    {

        $this->validate();
        $update = $this->form->update();

        is_null($update) ? $this->dispatch('notify', title: 'success', message: 'Success')
            : $this->dispatch('notify', title: 'error', message: 'Failed');

        $this->dispatch('dispatch-reward-create-edit')->to(RewardTable::class);
    }

    #[Title('Reward')]
    public function render(): View
    {
        return view('livewire.reward.reward-edit', [
            'customers' => \App\Models\Customer::all(),]);
    }
}
