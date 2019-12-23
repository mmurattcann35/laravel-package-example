<?php

Route::group(["namespace" => "Mmurattcann35\Contact\Http\Controllers"], function (){

    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send')->name('contact');

});
