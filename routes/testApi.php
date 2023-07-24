<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestApi\TestController;

Route::get('', function() {
    return 'health check';
});

Route::group([
    'prefix' => 'users'
], function () {
    Route::get('', [TestController::class, 'getUserList'])
        ->name('testApi.getUserList');
    Route::get('{id}', [TestController::class, 'getUserOne'])
        ->name('testApi.getUserOne');
    Route::post('', [TestController::class, 'createUser'])
        ->name('testApi.createUser');
    Route::patch('{id}', [TestController::class, 'updateUser'])
        ->name('testApi.updateUser');

    Route::get('connection/database', [TestController::class, 'dbConnectionStatus'])
        ->name('testApi.dbConnectionStatus');
});
