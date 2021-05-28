<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post/{name}',[ // Route name with arguments
//     PostController::class,  // The controller
//     'index'                 // The method name in the Controller
// ]);

// Route::resource('post', PostController::class);

Route::get('/contact', [PostController::class, 'contact']);

Route::get(
    '/views/{id}/{name}/{password}',
    [PostController::class, 'show_post']
);
