<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test0', function () {
    return 'welcome from test0';
});

Route::get('/test1', function () {
    return view('test1');
});

Route::get('/test/test2', function () {
    return view('test2');
})->name('test2');

Route::get('/test3/{id}', function ($x) {
    return "welcome from test $x";
});

Route::get('/test4/{id}', function ($id) {
    return "welcome from test $id";
});

Route::get('/test4/{id}/{name}', function ($id, $name) {
    return "welcome, $name! from test $id";
});

Route::get('/test5/{id?}', function ($id = NULL) {
    return "welcome from $id";
});

Route::get('/tst6/{id?}', function ($id = NULL) {
    return "welcome from $id";
})->where('id','[0-9]+')->name('test6');

Route::get('/t7/{id}/{name?}', function ($id, $name="user") {
    return "welcome $name! from $id";
})->where(['id'=>'[0-9]+', 'name'=>'[A-Za-z]+'])->name('test7');

Route::prefix('/tests/test/')->group(function () {
    Route::get('/', function () {
        return "welcome from test";
    });
    
    Route::get('/t1/{id}', function ($id) {
        return "welcome from test $id";
    })->where('id', '[0-9]+')->name('test8');
    
    Route::get('/t2/{id}/{name?}', function ($id, $name="admin") {
        return "welcome $name! from admin $id";
    })->where(['id'=>'[0-9]+', 'name'=>'[A-Za-z]+'])->name('admin.test.test8');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return "welcome from admin";
    })->name('home');
    
    Route::prefix('/test')->name('test.')->group(function () {
        Route::get('/', function () {
            return "welcome from admin test";
        })->name('home');

        Route::name('test9.')->group(function() {
            Route::get('/t1/{id}', function ($id) {
                return "welcome from admin test $id";
            })->where('id', '[0-9]+')->name('id');
            
            Route::get('/t2/{id}/{name}', function ($id, $name) {
                return "welcome $name! from admin test $id";
            })->where(['id'=>'[0-9]+', 'name'=>'[A-Za-z]+'])->name('id_name');
        });
    });
});