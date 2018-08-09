<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class LoginController extends Controller
{
    //
    public function login(){

    }
    public function register(Request $request){
        var_dump($request);
//        $data = $request->except("_token");
//        User::create($data);
//        return back();
    }
}
