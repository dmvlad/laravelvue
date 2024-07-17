<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
*/

Route::get('/testdb', function () {
    try {
        DB::connection()->getPdo();
        echo "Connected successfully to: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Could not connect to the database. Please check your configuration. error:" . $e );
    }
    die();
});

Route::get('/', function () {
    return view('welcome');
});


Route::resources([
	'posts' => PostController::class,
	'categories' => CategoryController::class,
	'comments' => CommentController::class,
	'profiles' => ProfileController::class,
	'roles' => RoleController::class,
	'tags' => TagController::class,
	'users' => UserController::class,
]);





/*
 *
// posts
Route::get('posts/store', [Postcontroller::class, 'store']);
Route::get('posts/index', [Postcontroller::class, 'index']);
Route::get(
	'posts/{post}/show',
	[Postcontroller::class, 'show']
)->where('post', '[0-9]+');
Route::get(
	'posts/{post}/update',
	[Postcontroller::class, 'update']
)->where('post', '[0-9]+');
Route::get(
	'posts/{post}/destroy',
	[Postcontroller::class, 'destroy']
)->where('post', '[0-9]+');

// users
Route::get('users/store', [UserController::class, 'store']);
Route::get('users/index', [UserController::class, 'index']);
Route::get(
	'users/{user}/show',
	[UserController::class, 'show']
)->where('user', '[0-9]+');
Route::get(
	'users/{user}/update',
	[UserController::class, 'update']
)->where('user', '[0-9]+');
Route::get(
	'users/{user}/destroy',
	[UserController::class, 'destroy']
)->where('user', '[0-9]+');


// tags
Route::get('tags/store', [TagController::class, 'store']);
Route::get('tags/index', [TagController::class, 'index']);
Route::get(
	'tags/{tag}/show',
	[TagController::class, 'show']
)->where('tag', '[0-9]+');
Route::get(
	'tags/{tag}/update',
	[TagController::class, 'update']
)->where('tag', '[0-9]+');
Route::get(
	'tags/{tag}/destroy',
	[TagController::class, 'destroy']
)->where('tag', '[0-9]+');



// categories
Route::get('categories/store', [CategoryController::class, 'store']);
Route::get('categories/index', [CategoryController::class, 'index']);
Route::get(
	'categories/{category}/show',
	[CategoryController::class, 'show']
)->where('category', '[0-9]+');
Route::get(
	'categories/{category}/update',
	[CategoryController::class, 'update']
)->where('category', '[0-9]+');
Route::get(
	'categories/{category}/destroy',
	[CategoryController::class, 'destroy']
)->where('category', '[0-9]+');


*/