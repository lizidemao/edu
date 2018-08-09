<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BootcampController extends Controller
{
    //加载页面
    public function index(){
        $trains = DB::table("train")->get()->toArray();
//        dd($trains);die;
    	return view("/Home/Bootcamp/index",compact("trains"));
    }

}
