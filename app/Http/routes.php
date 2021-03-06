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
    | Pjax Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'item'], function () {
        Route::get('', [
            'as' => 'item.index', 'uses' => 'ItemController@index',
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Pjax Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'pjax'], function () {
        Route::get('index', [
            'as' => 'pjax.index', 'uses' => 'PjaxController@index',
        ]);
        Route::get('about', [
            'as' => 'pjax.about', 'uses' => 'PjaxController@about',
        ]);
        Route::get('hello', [
            'as' => 'pjax.hello', 'uses' => 'PjaxController@hello',
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | P(Post)R(Redirect)G(Get) Pattern Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'prg'], function () {
        Route::get('input', [
            'as' => 'prg.input', 'uses' => 'PrgController@input',
        ]);
        Route::post('submit', [
            'as' => 'prg.submit', 'uses' => 'PrgController@submit',
        ]);
        Route::get('complete', [
            'as' => 'prg.complete', 'uses' => 'PrgController@complete',
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Polymorphic Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'polymorphic'], function () {
        Route::get('staff', [
            'as' => 'polymorphic.staff', 'uses' => 'PolymorphicController@staff',
        ]);
        Route::get('order', [
            'as' => 'polymorphic.order', 'uses' => 'PolymorphicController@order',
        ]);
        Route::get('photo', [
            'as' => 'polymorphic.photo', 'uses' => 'PolymorphicController@photo',
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Store Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'store'], function () {
        Route::get('register', [
            'as' => 'store.register', 'uses' => 'StoreController@register',
        ]);
        Route::get('update/{id}', [
            'as' => 'store.update', 'uses' => 'StoreController@update',
        ])->where('id', '(\d)+');
    });

    /*
    |--------------------------------------------------------------------------
    | Region Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'region'], function () {
        Route::get('prefecture-n1', [
            'as' => 'region.prefecture.n1', 'uses' => 'RegionController@prefectureN1',
        ]);
        Route::get('prefecture-eager', [
            'as' => 'region.prefecture.eager', 'uses' => 'RegionController@prefectureEager',
        ]);
        Route::get('prefecture-item', [
            'as' => 'region.prefecture.item', 'uses' => 'RegionController@prefectureItem',
        ]);
        Route::get('city-n1', [
            'as' => 'region.city.n1', 'uses' => 'RegionController@cityN1',
        ]);
        Route::get('city-eager', [
            'as' => 'region.city.eager', 'uses' => 'RegionController@cityEager',
        ]);
    });


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
        | Prefectures Api Routes
        |--------------------------------------------------------------------------
        |
        */
        Route::get('prefectures', [
            'as' => 'api.prefectures.all', 'uses' => 'PrefectureController@all',
        ]);
        Route::get('prefectures/{prefecture_id}/cities', [
            'as' => 'api.prefectures.cities', 'uses' => 'PrefectureController@cities',
        ])->where('prefecture_id', '(\d)+');

        /*
        |--------------------------------------------------------------------------
        | Cities Api Routes
        |--------------------------------------------------------------------------
        |
        */
        Route::get('cities/{city_id}', [
            'as' => 'api.cities.get', 'uses' => 'CityController@get',
        ])->where('city_id', '(\d)+');
    });
});
