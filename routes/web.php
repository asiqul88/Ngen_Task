<?php

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

   //Client Routes

Route::get('/dashboard', function () {
    return view('client.dashboard');
})->middleware(['client'])->name('dashboard');

 
require __DIR__.'/client_auth.php';


    //Admin Routes

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');
 

require __DIR__.'/auth.php';



Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');

});