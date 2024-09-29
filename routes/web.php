<?php

use Illuminate\Support\Facades\Route;

Route::get('/', action: function () {
    return redirect('dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/list/{idName}', function ($idName) {
        $parts = explode('-', $idName);
        $id = array_shift($parts);
    
        return view('task',  compact('id'));
    })->name('task.show');
});
