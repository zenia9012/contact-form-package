<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Yevhenii\Contact\Http\Controllers'], function (){
	Route::get('contact-form', 'ContactController@index')->name('contact');
	Route::post('contact-form', 'ContactController@store')->name('contact.post');
});

