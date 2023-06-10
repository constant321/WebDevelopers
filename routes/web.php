<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\AdminController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/project', [ProjectsController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/Adlogin', [AdminController::class, 'index']);
Route::post('/Adlogin', [AdminController::class, 'login']);
//Route::post('/LoggedIn', [AdminController::class, 'Admin'])
//Route::get('/AdPanel', [AdminController::class, 'autenticated']);
Route::get('/Admin', [AdminController::class, 'Admin']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::post('/edit/{id}', [AdminController::class, 'EditSubmit']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::get('/addProject', [AdminController::class, 'project']);
Route::get('/addBlog', [AdminController::class, 'blog']);
Route::resource('/blogs', BlogController::class);
