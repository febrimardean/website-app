<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Login'
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

// Route::resource('/dashboard/department', function() {
//     return view('dashboard.departments.index');
// });

// Department
Route::resource('/dashboard/department', DepartmentController::class)->middleware('auth');


// User
Route::resource('/dashboard/users', UserController::class)->middleware('super.user');

Route::get('/dashboard/division', function() {
    return view('dashboard.divisions.index');
});

Route::get('/dashboard/position', function() {
    return view('dashboard.positions.index');
});
Route::get('/dashboard/employee', function() {
    return view('dashboard.employees.index');
});


Route::get('/dashboard/posts', function() {
    return view('dashboard.posts.index');
});
Route::get('/dashboard/categories', function() {
    return view('dashboard.categories.index');
});

