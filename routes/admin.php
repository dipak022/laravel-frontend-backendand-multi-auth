<?php

Route::group(['prefix'=>'admin', 'middleware'=>['auth:admin']], function(){
//Route::group(['middleware' => ['auth:admin'],'prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    
});