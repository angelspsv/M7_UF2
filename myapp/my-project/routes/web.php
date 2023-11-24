<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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
    return view('welcome');
});

//controller
Route::prefix('angel') -> group(function(){
    //crida la vista signin o d'inici de sessió
    Route::get('/signin', [SignController::class, 'signin']->name('signin')); 

    //crida la vista signup o de registre de nou usuari
    Route::get('/signup', [SignController::class, 'signup']->name('signup')); 
});

Route::middleware(['admin_db'])->group(function(){
    Route::get('/centres', [AdminController::class, 'centres']->name('centres'));

});

?>