<?php

Route::get('/', 'ExamController@showIntro');
Route::get('/exam1', 'ExamController@start1');
Route::get('/exam2', 'ExamController@start2');
Route::post('/save', array('as' => 'examSaveItems', 'uses' => 'ExamController@save'));    

// protected routes
Route::group(['before' => 'auth'], function(){
    Route::get('changepw', 'UserController@showChangePw');
    Route::post('changepw', array('as' => 'changepw', 'uses' => 'UserController@changePw'));    
});


