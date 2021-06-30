
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index')->name('home');

Route::get('/characters', 'PageController@characters')->name('characters');

Route::get('/comics', 'PageController@comics')->name('comics');

Route::get('/movies', 'PageController@movies')->name('movies');

Route::get('/tv', 'PageController@tv')->name('tv');

Route::get('/games', 'PageController@games')->name('games');

Route::get('/collectibles', 'PageController@collectibles')->name('collectibles');

Route::get('/videos', 'PageController@videos')->name('videos');

Route::get('/fans', 'PageController@fans')->name('fans');

Route::get('/news', 'PageController@news')->name('news');

Route::get('/shop', 'PageController@shop')->name('shop');


