<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        // $blogs=[
        //     [
        //         'title' =>'Title one',
        //         'body' =>'This is a body text',
        //         'status' =>1
        //     ],
        //     [
        //         'title' =>'Title two',
        //         'body' =>'This is a body text',
        //         'status' =>0
        //     ],
        //     [
        //         'title' =>'Title three',
        //         'body' =>'This is a body text',
        //         'status' =>1
        //     ],
        //     [
        //         'title' =>'Title four',
        //         'body' =>'This is a body text',
        //         'status' =>0
        //     ],
        // ];
        return DB::table("posts")->find(7);
        return view('home',compact('blogs'));
    }
}