<?php

use App\Livewire\BirdCountForm;
use App\Livewire\Bookmarks;
use App\Livewire\Counter;
use App\Livewire\Lazy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bird', BirdCountForm::class);
Route::get('/counter', Counter::class);
Route::get('/lazy', Lazy::class)->lazy();
Route::get('/bookmarks', Bookmarks::class);