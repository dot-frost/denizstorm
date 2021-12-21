<?php

Route::group(['as' => 'client.'], function(){
    Route::view('/','pages.home')->name('home');
    Route::get('/order', \App\Http\Livewire\Pages\Order::class)->name('order');
    Route::get('/slider', \App\Http\Livewire\Components\Slider::class)->name('slider');
    Route::get('/factor', \App\Http\Controllers\FactorController::class)->name('factor');
    Route::post('/contact', \App\Http\Controllers\ContactController::class)->name('contact');
});


Route::get('/login', \App\Http\Livewire\Dashboard\Auth\Login::class)->name('login');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']],function(){
    Route::get('/', \App\Http\Livewire\Dashboard\Pages\Index::class)->name('index');
    // Categories
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function(){
        Route::get('/', \App\Http\Livewire\Dashboard\Pages\Category\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Dashboard\Pages\Category\Create::class)->name('create');
        Route::get('/{category}/Edit', \App\Http\Livewire\Dashboard\Pages\Category\Edit::class)->name('Edit');
    });
    // Devices
    Route::group(['prefix' => 'devices', 'as' => 'devices.'], function(){
        Route::get('/', \App\Http\Livewire\Dashboard\Pages\Device\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Dashboard\Pages\Device\Create::class)->name('create');
        Route::get('/{device}/Edit', \App\Http\Livewire\Dashboard\Pages\Device\Edit::class)->name('Edit');
        Route::get('/{device}/support', \App\Http\Livewire\Dashboard\Pages\Device\Support::class)->name('support');
    });
    // Orders
    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function(){
        Route::get('/', \App\Http\Livewire\Dashboard\Pages\Order\Index::class)->name('index');
        Route::get('/{order}/show', \App\Http\Livewire\Dashboard\Pages\Order\Show::class)->name('show');
    });

    // Contacs
    Route::group(['prefix' => 'contacts', 'as' => 'contacts.'], function(){
        Route::get('/', \App\Http\Livewire\Dashboard\Pages\Contact\Index::class)->name('index');
        Route::get('/{contact}/show', \App\Http\Livewire\Dashboard\Pages\Contact\Show::class)->name('show');
    });

    // Settings
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function(){
        Route::get('/order-from', \App\Http\Livewire\Dashboard\Pages\Settings\OrderForm::class)->name('order-form');
    });

    Route::get('/profile', \App\Http\Livewire\Dashboard\Pages\Profile::class )->name('profile');
});

