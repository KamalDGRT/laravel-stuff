<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

// Route::get('/delete', function () {
//     $deleted = DB::delete('DELETE FROM post WHERE id = ?', ['1']);
//     return $deleted;
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT Object Relational Model (ORM)
|--------------------------------------------------------------------------
*/

// Reading data using Eloquent
// Route::get('/read', function () {
//     // This is saving all the records in the post variable.
//     $posts = Post::all();

//     // Lets loop through it
//     $message = '';
//     foreach($posts as $post) {
//         $message .= $post->title;
//         $message .= '<br><br>';
//     }
//     return $message;
// });

// Fetching one record at a time
// Route::get('/find', function () {
//     $post = Post::find(2); // 2 is the id
//     return $post->title;
// });

// Finding record with some constraints and chaining
// Route::get('/findwhere', function () {
//     $post = Post::where('id', 2)->orderBy('id', 'DESC')->take(1)->get();
//     return $post;
// });

// Some more ways of retrieving record
// Route::get('/findmore', function () {
//     $post = Post::findOrFail(2); // 1
//     $posts = Post::where('users_count', '<', 50)->findOrFail(2); // 2
//     return $post;
// });


// Inserting & saving data using Eloquent

// Route::get('/basicinsert', function () {
//     $post = new Post;
//     $post->title = "CodeIgniter";
//     $post->content = "CodeIgniter is yet another PHP framework.";
//     $post->save();
//     // save() will insert the record and can also be used to update record.
// });

// Route::get('/basicinsert2', function () {
//     // To use the save() method for updating, you need to first find the record.
//     $post = Post::find(3);
//     $post->title = 'CodeIgniter PHP';
//     $post->save();
//     // save() will insert the record and can also be used to update record.
// });


// Creating and configuring mass assignment operation

// Route::get('/create', function () {
//     Post::create([
//         'title' => 'CakePHP',
//         'content' => 'It is also a PHP Framework.'
//     ]);
// });

// Updating with Eloquent

// Route::get('/update', function () {
//     Post::where('id', 2)
//         ->where('is_admin', 0)
//         ->update([
//             'title' => 'Just Laravel',
//             'content' => 'Yet another PHP after all'
//         ]);
// });
