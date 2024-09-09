<?php

use App\Http\Controllers\Admin\DepartmentControler;
use App\Http\Controllers\Admin\EmployeeControler;
use App\Http\Controllers\Admin\HomeControler as AdminHomeControler;
use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeControler::class);

Route::prefix('/admin')->name('admin')->group(function() {
    Route::get('/', AdminHomeControler::class)->name('.home');

    Route::controller(EmployeeControler::class)->prefix('/employee')->name('.employee')->group(function() {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::get('/show/{id}', 'show')->where('id', '[0-9]+')->name('.show');
        Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('.edit');
    });

    Route::controller(DepartmentControler::class)->prefix('/department')->name('.department')->group(function() {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::get('/show/{name}', 'show')->where('name', '[A-Za-z0-9]+')->name('.show');
        Route::get('/edit/{name}', 'edit')->where('name', '[A-Za-z0-9]+')->name('.edit');
    });
});