<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::group(['middleware' => ['has.team', 'auth']], function () {
    Route::get('home', 'HomeController@index')->name('home');

    Route::get('messages', 'MessagesController@index')->name('messages.index');
    Route::get('messages/create', 'MessagesController@create')->name('messages.create');
    Route::get('messages/{uuid}', 'MessagesController@show')->name('messages.show');

    Route::get('notifications/allread', 'NotificationsController@markAllAsRead')->name('notifications.allread');

    // Add some blank default Views
    Route::get('documents', function() {
       return view('documents.index');
    })->name('documents.index');

    Route::get('integrations', function() {
        return view('integrations.index');
    })->name('integrations.index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('missing-team')->uses('MissingTeamController')->name('teams.missing');
});
