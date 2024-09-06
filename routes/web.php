<?php

use App\Livewire\CardsComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', CardsComponent::class)->name('home');
