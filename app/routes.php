<?php

Route::get('/1/', 'ExamController@showIntro');
Route::get('/1/start', 'ExamController@start1');
Route::get('/2/start', 'ExamController@start2');
Route::post('/1/save', array('as' => 'examSaveItems', 'uses' => 'ExamController@save'));    

// protected routes
Route::group(['before' => 'auth'], function(){
    Route::get('changepw', 'UserController@showChangePw');
    Route::post('changepw', array('as' => 'changepw', 'uses' => 'UserController@changePw'));    
});


