<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PathsController extends Controller
{
    //路径
     public function index(){

     	return view("/Home/Paths/index");
     }

     //详情
     public function show(){

     	return view("/Home/Paths/show");
     }

}