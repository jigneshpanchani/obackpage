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

// Route::match(['get', 'post'], 'category/{city}',            ['as' => 'category',                  'uses' => 'frontend\CategoryController@index']);

Route::match(['get', 'post'], 'post-ad',                    ['as' => 'post-ad',                   'uses' => 'frontend\PostController@postAd']);
Route::match(['get', 'post'], 'free-ad-post',               ['as' => 'free-ad-post',              'uses' => 'frontend\PostController@freeAdPost']);
Route::match(['get', 'post'], 'free-ad-preview/{id}',       ['as' => 'free-ad-preview',           'uses' => 'frontend\PostController@freeAdPreview']);
Route::match(['get', 'post'], 'post-adds-ajax',             ['as' => 'post-adds-ajax',            'uses' => 'frontend\PostController@postAdds']);
Route::match(['get', 'post'], 'local-ad-post',              ['as' => 'local-ad-post',             'uses' => 'frontend\PostController@localAdPost']);
Route::match(['get', 'post'], 'local-ad-preview/{id}',      ['as' => 'local-ad-preview',          'uses' => 'frontend\PostController@localAdPreview']);
Route::match(['get', 'post'], 'multiple-ad-post',           ['as' => 'multiple-ad-post',          'uses' => 'frontend\PostController@multipleAdPost']);
Route::match(['get', 'post'], 'multiple-ad-preview/{id}',   ['as' => 'multiple-ad-preview',       'uses' => 'frontend\PostController@multipleAdPreview']);
Route::match(['get', 'post'], 'view-post/{cityId}/{subcategoryId}',    ['as' => 'view-post',      'uses' => 'frontend\PostController@viewPost']);
Route::match(['get', 'post'], 'posts-details/{cityId}/{subcategoryId}/{postId}',    ['as' => 'posts-details',      'uses' => 'frontend\PostController@postsDetails']);

Route::match(['get', 'post'], 'manage-ads',                 ['as' => 'manage-ads',                'uses' => 'frontend\AccountController@manageAds']);
Route::match(['get', 'post'], 'transaction',                ['as' => 'transaction',               'uses' => 'frontend\AccountController@transaction']);
Route::match(['get', 'post'], 'add-credit',                 ['as' => 'add-credit',                'uses' => 'frontend\AccountController@addCredit']);




//footerpages
Route::match(['get', 'post'], 'about-us',                      ['as' => 'about-us',                     'uses' => 'frontend\InfoController@aboutus']);
Route::match(['get', 'post'], 'contact',                       ['as' => 'contact',                      'uses' => 'frontend\InfoController@contact']);
Route::match(['get', 'post'], 'privacy-policy',                ['as' => 'privacy-policy',               'uses' => 'frontend\InfoController@privacyPolicy']);
Route::match(['get', 'post'], 'terms-of-use',                  ['as' => 'terms-of-use',                 'uses' => 'frontend\InfoController@termsOfUse']);
Route::match(['get', 'post'], 'blog',                          ['as' => 'blog',                         'uses' => 'frontend\InfoController@blog']);
Route::match(['get', 'post'], 'alternative-to-backpage',       ['as' => 'alternative-to-backpage',      'uses' => 'frontend\InfoController@alternativeToBackpage']);
Route::match(['get', 'post'], 'website-similar-to-backpage',   ['as' => 'website-similar-to-backpage',  'uses' => 'frontend\InfoController@websiteSimilarToBackpage']);
Route::match(['get', 'post'], 'best-sites-like-backpage',      ['as' => 'best-sites-like-backpage',     'uses' => 'frontend\InfoController@bestSitesLikeBackpage']);
Route::match(['get', 'post'], 'backpage-replacement',          ['as' => 'backpage-replacement',         'uses' => 'frontend\InfoController@backpageReplacement']);


//backend
Route::match(['get', 'post'], 'admin-dashboard',            ['as' => 'admin-dashboard',           'uses' => 'backend\DashboardController@index']);
Route::match(['get', 'post'], 'admin-user',                 ['as' => 'admin-user',                'uses' => 'backend\DashboardController@userData']);
Route::match(['get', 'post'], 'admin-country',              ['as' => 'admin-country',             'uses' => 'backend\DashboardController@countryData']);
Route::match(['get', 'post'], 'admin-state',                ['as' => 'admin-state',               'uses' => 'backend\DashboardController@stateData']);
Route::match(['get', 'post'], 'admin-city',                 ['as' => 'admin-city',                'uses' => 'backend\DashboardController@cityData']);
Route::match(['get', 'post'], 'admin-category',             ['as' => 'admin-category',            'uses' => 'backend\DashboardController@categoryData']);
Route::match(['get', 'post'], 'admin-sub-category',         ['as' => 'admin-sub-category',        'uses' => 'backend\DashboardController@subCategoryData']);
Route::match(['get', 'post'], 'admin-post',                 ['as' => 'admin-post',                'uses' => 'backend\DashboardController@postData']);






