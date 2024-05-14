<?php

namespace App\Livewire\Posts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexPost extends Component
{

    public $title = 'Post title...';

    public function render()
    {
        return view('livewire.posts.index-post')->with([
            'author' => Auth::user()->name,
        ]);
    }
}
