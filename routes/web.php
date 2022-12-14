<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
// Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

Route::match(['get', 'post'], '/',                          ['as' => 'home',                      'uses' => 'frontend\HomeController@index']);
Route::match(['get', 'post'], 'authorized/google',          ['as' => 'authorized/google',         'uses' => 'LoginWithGoogleController@redirectToGoogle']);
Route::match(['get', 'post'], 'authorized/google/callback', ['as' => 'authorized/google/callback','uses' => 'LoginWithGoogleController@handleGoogleCallback']);
Route::match(['get', 'post'], 'category/{city}',            ['as' => 'category',                  'uses' => 'frontend\CategoryController@index']);


Route::match(['get', 'post'], 'post-ad',                    ['as' => 'post-ad',                   'uses' => 'frontend\PostController@postAd']);
Route::match(['get', 'post'], 'free-ad-choose-location',    ['as' => 'free-ad-choose-location',   'uses' => 'frontend\PostController@freeAdChooseLocation']);
Route::match(['get', 'post'], 'post-ad-ajaxAction',         ['as' => 'post-ad-ajaxAction',        'uses' => 'frontend\PostController@ajaxAction']);





