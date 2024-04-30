<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// require_once('../app/Http/Controllers/PersonController.php');
// Route::get('person', function () {

//     $person= new PersonController();
//     return $person->name();
// });

// Route::get('contact', function () {
//     return "<h1>Contact</h1>";
// });
// Route::get('contact/{id}', function ($id) {
//     return $id;
// });
// // Route::get('home', function () {
// //     return "<a href='/contact'>About</a>";
// // });
// Route::get('about', function () {
//     return view('about');
// });
// Route::get('/home',[HomeController::class,'index'] );
// Route::post('/upload-file',[ImageController::class,'handleImage'] )->name('upload-file');
// Route::get('/success',function () {
//     return'<h1>Successfully upload</h1>';

// })->name('success');
// Route::get('/download',[ImageController::class,'download'])->name('download');
// Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
Route::get('/posts/{id}/restore',[PostController::class, 'restore'])->name('posts.restore');
Route::delete('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force-delete');
Route::resource('posts',PostController::class);

Route::get('/sample',[SampleController::class,'index']);