<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/terms', 'BossGuideController@terms');

//Boss guides routes
Route::get('/boss_guide/{name}/{id}', 'BossGuideController@getSingle');
Route::get('/boss_guides', 'BossGuideController@index');

//Runescape API routes
//Runescape API user stats routes
Route::get('/HiScores', 'RunescapeAPIController@HiScores');
Route::post('/HiScores', 'RunescapeAPIController@HiScores');

Route::get('/player_tracker/{action}', 'RuneScapeAPIController@player_tracker_index');
Route::post('/start_player_tracker/{action}', 'RuneScapeAPIController@player_tracker_index');
Route::get('/update_player_tracker/{action}', 'RuneScapeAPIController@player_tracker_index');
Route::get('/reset_player_tracker/{action}', 'RuneScapeAPIController@player_tracker_index');
Route::get('/playerinfo/{name}', 'RuneScapeAPIController@playerdata');

//Clan routes
Route::get('your_clan', 'ClanController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
