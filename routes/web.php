<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
require_once('../app/Http/Controllers/PersonController.php');
Route::get('person', function () {

    $person= new PersonController();
    return $person->name();
});