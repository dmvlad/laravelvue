<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

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