<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCountry;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createCountry', CreateCountry::class);