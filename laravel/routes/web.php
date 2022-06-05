<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/urun/detay/{selflink}',[App\Http\Controllers\front\araba\indexController::class, 'index'])->name('araba.detay');
Route::get('/',[App\Http\Controllers\front\indexController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/basket/add/{id}', [App\Http\Controllers\front\basket\indexController::class, 'add'])->name('basket.add');
Route::get('/basket',[App\Http\Controllers\front\basket\indexController::class, 'index'])->name('basket.index');
Route::get('/basket/remove/{id}', [App\Http\Controllers\front\basket\indexController::class, 'remove'])->name('basket.remove');
Route::get('/basket/flush', [App\Http\Controllers\front\basket\indexController::class, 'flush'])->name('basket.flush');
Route::get('/basket/complete', [App\Http\Controllers\front\basket\indexController::class, 'complete'])->name('basket.complete')->middleware(['auth']);
Route::post('/basket/complete', [App\Http\Controllers\front\basket\indexController::class, 'completeStore'])->name('basket.completeStore')->middleware(['auth']);
Route::get('/kategori/{selflink}',[App\Http\Controllers\front\cat\indexController::class, 'index'])->name('cat');
Route::get('/search',[App\Http\Controllers\front\search\indexController::class, 'index'])->name('search');




Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\admin\indexController::class, 'index'])->name('index');


    Route::group(['namespace' => 'satici', 'prefix' => 'satici', 'as' => 'satici.'], function () {
        Route::get('/', [App\Http\Controllers\admin\satici\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\satici\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\satici\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\satici\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\satici\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\satici\indexController::class, 'delete'])->name('delete');


    });

    Route::group(['namespace' => 'marka', 'prefix' => 'marka', 'as' => 'marka.'], function () {
        Route::get('/', [App\Http\Controllers\admin\marka\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\marka\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\marka\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\marka\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\marka\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\marka\indexController::class, 'delete'])->name('delete');


    });

    Route::group(['namespace' => 'araba', 'prefix' => 'araba', 'as' => 'araba.'], function () {
        Route::get('/', [App\Http\Controllers\admin\araba\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\araba\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\araba\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\araba\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\araba\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\araba\indexController::class, 'delete'])->name('delete');

    });

    Route::group(['namespace' => 'kategori', 'prefix' => 'kategori', 'as' => 'kategori.'], function () {
        Route::get('/', [App\Http\Controllers\admin\kategori\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\kategori\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\kategori\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\kategori\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\kategori\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\kategori\indexController::class, 'delete'])->name('delete');


    });
    Route::group(['namespace' => 'slider', 'prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::get('/', [App\Http\Controllers\admin\slider\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\slider\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\slider\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\slider\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\slider\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\slider\indexController::class, 'delete'])->name('delete');


    });
    Route::group(['namespace' => 'order', 'prefix' => 'order', 'as' => 'order.'], function () {
        Route::get('/', [App\Http\Controllers\admin\order\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\order\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\order\indexController::class, 'store'])->name('create.post');
        Route::get('/detail/{id}', [App\Http\Controllers\admin\order\indexController::class, 'detail'])->name('detail');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\order\indexController::class, 'delete'])->name('delete');


    });

});


