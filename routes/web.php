<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

Route::group([
    'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'],
    'prefix' => 'dashboard'
], function () {
    // Dashboard Home
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // CATEGORY CRUD
    Route::prefix('category')->group(function () {
        Route::get('/', App\Livewire\Dashboard\Category\Index::class)->name("d-category-index");
        Route::get('create', App\Livewire\Dashboard\Category\Save::class)->name("d-category-create");
        Route::get('edit/{id}', App\Livewire\Dashboard\Category\Save::class)->name("d-category-edit");
    });

    // POST CRUD
    Route::prefix('post')->group(function () {
        Route::get('/', App\Livewire\Dashboard\Post\Index::class)->name("d-post-index");
        Route::get('create', App\Livewire\Dashboard\Post\Save::class)->name("d-post-create");
        Route::get('edit/{id}', App\Livewire\Dashboard\Post\Save::class)->name("d-post-edit");
    });

    // TAG CRUD
    Route::prefix('tag')->group(function () {
        Route::get('/', App\Livewire\Dashboard\Tag\Index::class)->name("d-tag-index");
        Route::get('create', App\Livewire\Dashboard\Tag\Save::class)->name("d-tag-create");
        Route::get('edit/{id}', App\Livewire\Dashboard\Tag\Save::class)->name("d-tag-edit");
    });
});
