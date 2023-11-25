<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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


Route::get('/hello', function () {
    return 'Hello world';
});

Route::get('/belajar', function () {
    echo '<h1>Hello world</h1>';
    echo '<p>Sedang belajar laravel</p>';    
});

Route::get('/siswa/rpl/nanda', function () {
    echo '<h2 style="text-align:center;"><ul>Welcome to Laravel,Nanda</ul></h2>';   
});


Route::resource('/post', \App\Http\Controllers\PostController::class);
Route::resource('/blog', \App\Http\Controllers\BlogController::class);

Route::get('/', [\App\Http\Controllers\BlogController::class, 'home']);
Route::get('/search', [\App\Http\Controllers\BlogController::class, 'search']);

Route::group(['middleware' => 'guest'], function () {

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register'); 
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'registerPost'])->name('register'); 
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login'); 
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginPost'])->name('login');
    
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']); 
        Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
        
         });