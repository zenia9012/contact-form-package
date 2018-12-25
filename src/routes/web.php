<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Yevhenii\Contact\Http\Controllers'], function (){
	Route::post('contact-form', 'ContactController@store')->name('contact.post');
});

