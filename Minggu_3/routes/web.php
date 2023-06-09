<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\ManagementUserController;
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

Route::get('home', function(){
    return view("home");
});

// Route::get('user', [ManagementUserController::class, 'index']);

Route::resource('home', ManagementUserController::class);

