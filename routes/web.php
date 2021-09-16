<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('homepage');
// Route::get('/home', 'HomeController@index');

// metodo resource di Laravel che genera tutte le rotte necessari per le crud 
Route::resource('posts', 'PostController');
