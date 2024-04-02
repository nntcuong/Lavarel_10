<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// require_once('../app/Http/Controllers/PersonController.php');
// Route::get('person', function () {

//     $person= new PersonController();
//     return $person->name();
// });

Route::get('contact', function () {
    return "<h1>Contact</h1>";
});
Route::get('contact/{id}', function ($id) {
    return $id;
});
// Route::get('home', function () {
//     return "<a href='/contact'>About</a>";
// });
Route::get('about', function () {
    return view('about');
});
Route::get('/home', function () {
    $blogs=[
        [
            'title' =>'Title one',
            'body' =>'This is a body text',
            'status' =>1
        ],
        [
            'title' =>'Title two',
            'body' =>'This is a body text',
            'status' =>0
        ],
        [
            'title' =>'Title three',
            'body' =>'This is a body text',
            'status' =>1
        ],
        [
            'title' =>'Title four',
            'body' =>'This is a body text',
            'status' =>0
        ],
    ];
    return view('home',compact('blogs'));
});