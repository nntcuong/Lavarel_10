<?php

namespace App\Http\Controllers;

use App\Services\SimpleService;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request,SimpleService $simpleService){
        $simpleService->log('this is a test log');
        return $request->all();
    }
}
