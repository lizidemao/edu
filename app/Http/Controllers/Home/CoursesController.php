<?php

namespace App\Http\Controllers\home;

use App\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Replies;

class CoursesController extends Controller
{
    public function list($id){
        $res=DB::table("ctypes")->get();

        $data=DB::table('dec')->where('tid','=',$id)->get()->toArray();

        return view("/Home/Courses/index",compact("data",'res'));
    }

    public function index(){
            $res=DB::table("ctypes")->get();

            $data=DB::table('dec')->get()->toArray();
            return view("/Home/Courses/index",compact("res","data"));
    }
    public function reports(){
        return view("/Home/Courses/reports");
    }
    public function show(){
        return view("/Home/Courses/show");
    }
    


    //详情
    public function show2($id){
        $res = DB::table("train")->where("detail_id",$id)->get()->toArray()[0];

        $resa = DB::table("replies")
                ->where("course_id",$id)
                ->join("users","replies.uid","=","users.id")
                ->select("replies.*","users.name","users.u_photo")
                ->orderBy("updated_at","desc")
                ->paginate(3);

        return view("/Home/Courses/show2",compact("res","resa"));
    }


    //接收reply数据
    public function doshow($id,Request $Request){
        $posts = $Request->except("_token");
        $posts['course_id'] = DB::table("train")->get()->toArray()[$id-1]->detail_id;
        $posts['uid'] = session("aid")[0];
        Replies::create($posts);
        return back();
    }




}
