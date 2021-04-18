<?php
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('social')->group(function(){
    Route::get('/','SocialController@index')->name('social.index');
    Route::get('/forum/{forum_name}','SocialController@forum')->name('social.forum');
});
