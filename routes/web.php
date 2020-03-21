<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => ['has.team', 'auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('missing-team')->uses('MissingTeamController')->name('teams.missing');
});
