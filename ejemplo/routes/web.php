<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Country;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/country', Country::class);