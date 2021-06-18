<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post/{name}',[ // Route name with arguments
//     PostController::class,  // The controller
//     'index'                 // The method name in the Controller
// ]);

// Route::resource('post', PostController::class);

// Route::get('/contact', [PostController::class, 'contact']);

// Route::get(
//     '/views/{id}/{name}/{password}',
//     [PostController::class, 'show_post']
// );


/*
|--------------------------------------------------------------------------
| Database Raw SQL Routes
|--------------------------------------------------------------------------
*/


// Route::get('/insert', function () {
//     DB::insert('insert into post (title, content) values (?, ?)',
//         ['Yii2', 'Yii2 is one of the top 5 PHP Framework!']);
// });


// Route::get('/read', function () {
//     $results = DB::select('select * from post where id = ?', [1]);
//     foreach ($results as $post) {
//         return $post->title;
//     }
// });

// Route::get('/update', function () {
//     $updated = DB::update('UPDATE post SET title="Yii2Awesome" WHERE id = ?', [1]);
//     return $updated;
// });

Route::get('/delete', function () {
    $deleted = DB::delete('DELETE FROM post WHERE id = ?', ['1']);
    return $deleted;
});
