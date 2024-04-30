<?php
namespace App\Services;
use Illuminate\Http\Request;

class SimpleService{
    public function log(string $string){
    logger($string);
    }
}