<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class IndexController extends Controller
{
    //首页
    public function index(){

        return view("/Home/Index/index");
    }
    //用户注册
    public function register(Request $request){

        $data = $request->except("_token");
        $data['password']=md5($request['email']);

          $v=User::create($data);
        if($v){
            echo "<script>alert('注册成功')</script>";
            return view("/Home/Index/index");
        }

    }
    public function login(Request $request){

        $data = $request->except("_token");
        $email=$data["email"];
        $password=$data["password"];

        $res=DB::table('users')->where('email','=',$email)->get();

        $res1=DB::table('users')->where('password','=',$password)->get();

        if(!empty($res) && !empty($res1)){
            $request->session()->push('aid',$res[0]->id);
            return redirect("/");
        }else{
            return "<script>alert('登录失败')</script>";
        }
    }
    public function doLogin(Request $request){
        $value = $request->session()->pull('aid','default');
        return back();
    }

}
