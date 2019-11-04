<?php

Route::get('login', function () {
    return view('login');    
})->name('login');

/*
Route::middleware([])->group(function () {

    Route::prefix('admin')->group(function () {
        
        Route::namespace('Admin')->group(function () {
        
            Route::get('/dashboard', 'TesteController@teste')->name('admin.dashboard');
        
            Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');
            
            Route::get('/produtos', 'TesteController@teste')->name('admin.produtos');

            Route::get('/', 'TesteController@teste')->name('admin.home');

        });
        
    });
    
}); */

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    
        Route::get('/dashboard', 'TesteController@teste')->name('admin.dashboard');
        
        Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');
        
        Route::get('/produtos', 'TesteController@teste')->name('admin.produtos');

        Route::get('/', 'TesteController@teste')->name('admin.home');
    

});


Route::get('/', function () {
    return view('welcome');
});


Route::get('categorias/{flag}', function ($flag) {
    return "Produtos da categoria {$flag}";
});

Route::get('produtos/{idProduct?}', function ($idProduct = null) {
    return "Produtos {$idProduct}";
});