<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    /*
    |--------------------------------------------------------------------------
    | Api Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'api', 'namespace' => 'Apis'], function () {
        /*
        |--------------------------------------------------------------------------
        | Artists Api Routes
        |--------------------------------------------------------------------------
        |
        */
        Route::get('artists', [
            'as' => 'api.artist.all', 'uses' => 'ArtistController@all',
        ]);
        Route::get('artists/{artist_id}/discographies', [
            'as' => 'api.artist.discographies', 'uses' => 'ArtistController@discographies',
        ])->where('artist_id', '(\d)+');
        Route::get('artists/{artist_id}/musics', [
            'as' => 'api.artist.musics', 'uses' => 'ArtistController@musics',
        ])->where('artist_id', '(\d)+');

        /*
        |--------------------------------------------------------------------------
        | Discographies Api Routes
        |--------------------------------------------------------------------------
        |
        */
        Route::get('discographies', [
            'as' => 'api.discographies.all', 'uses' => 'DiscographyController@all',
        ]);
    });
});
