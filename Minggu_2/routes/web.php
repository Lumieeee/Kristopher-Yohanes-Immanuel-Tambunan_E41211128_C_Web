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

Route::get('/login', function () {
    return view('login');
});
// Route::get('/user', [UserController::class, 'index']);

Route::get('user1/{id}', function ($id){
    return 'User '.$id;
});
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId){
    return ['Post : '.$postId,
    'Comment : '.$commentId
    ]; 
});
Route::get('user2/{name?}', function ($name = null){
    return $name;
});
Route::get('user3/{name?}', function ($name = 'John'){
    return $name;
});
Route::get('user4/{name}', function ($name){

})->where('name', '[A-Za-z]+');
Route::get('user5/{id}', function($id){

})->where('id', '[0-9]+');
Route::get('user6/{id}/{name}', function ($id, $name){

})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('search/{search}', function($search){
    return $search;
})->where('search', '.*');
Route::get('/pengguna', function($id = 'indra'){
    $url = route('users', ['id' => $id]);
    return redirect()->route('users', ['id' => $id]);
})->where('id', '.*');
// Route::get($url = 'user/{id}/profile', function ($id, $url){
//     return 'Berhasil Generate URL';
// })->name('profile');
// $url = route('profile', ['id' => 1]);
// $url = route('profile');
// return redirect()->route('profile');

Route::middleware(['first','second'])->group(function(){
    Route::get('/', function(){

    });
    Route::get('user/profile', function(){

    });
});
