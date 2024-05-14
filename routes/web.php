<?php

use App\Livewire\Counter;
use App\Livewire\CustomerIndex;
use App\Livewire\Service\ServiceIndex;
use App\Livewire\Reward\RewardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/customer', CustomerIndex::class)->name('customer.index');
    Route::get('/service', ServiceIndex::class)->name('service.index');
    Route::get('/reward',  RewardIndex::class)->name('reward.index');
    Route::get('/counter', Counter::class)->name('counter.index');
    Route::get('/posts', App\Livewire\Posts\IndexPost::class)->name('posts.index');

});
