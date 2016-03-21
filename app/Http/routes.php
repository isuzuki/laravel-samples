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
        Route::get('discographies/{discography_id}', [
            'as' => 'api.discographies.get', 'uses' => 'DiscographyController@get',
        ])->where('discography_id', '(\d)+');

        /*
        |--------------------------------------------------------------------------
        | Regions Api Routes
        |--------------------------------------------------------------------------
        |
        */
        Route::get('regions', [
            'as' => 'api.regions.all', 'uses' => 'RegionController@all',
        ]);
        Route::get('regions/{region_id}/prefectures', [
            'as' => 'api.regions.prefectures', 'uses' => 'RegionController@prefectures',
        ])->where('region_id', '(\d)+');
        Route::get('regions/{region_id}/cities', [
            'as' => 'api.regions.cities', 'uses' => 'RegionController@cities',
        ])->where('region_id', '(\d)+');

        /*
        |--------------------------------------------------------------------------
        | Regions Api Routes
        |--------------------------------------------------------------------------
        |
        */
        Route::get('prefectures', [
            'as' => 'api.prefectures.all', 'uses' => 'PrefectureController@all',
        ]);
        Route::get('prefectures/{prefecture_id}/cities', [
            'as' => 'api.prefectures.cities', 'uses' => 'PrefectureController@cities',
        ])->where('prefecture_id', '(\d)+');
    });
});
