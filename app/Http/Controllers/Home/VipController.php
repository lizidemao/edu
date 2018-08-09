<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipController extends Controller
{
    //
    public function index(){
    	return view("/Home/Vip/index");
    }
}
