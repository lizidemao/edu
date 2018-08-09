<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    //路径
     public function index(){
        $types=DB::table("types")->get();
        $posts=DB::table('posts')
            ->join('users','posts.user_id','=','users.id')
            ->select("posts.*","users.name","users.vip","users.u_photo")
            ->orderBy("updated_at","desc")
            ->paginate(10);
       // $posts=array_merge($posts0['data'],$posts1['data']);

     	return view("/Home/Questions/index",compact("posts","types"));
     }
     public function list($id){
         $types=DB::table("types")->get();
         $posts=DB::table('posts')
             ->where('type_id','=',$id)
             ->join('users','posts.user_id','=','users.id')
             ->select("posts.*","users.name","users.vip","users.u_photo")
             ->orderBy("updated_at","desc")
             ->paginate(10);
         return view("/Home/Questions/index",compact("posts","types"));
     }

     //详情
     public function show($id){

         $posts=DB::table('posts')
             ->join('users','posts.user_id','=','users.id')
             ->join('types','posts.type_id','=','types.id')
             ->select("posts.*","users.name as u_name","types.name as t_name","users.u_photo")
             ->where("posts.id",$id)
             ->get()->toArray()[0];



     	return view("/Home/Questions/show",compact("posts"));
     }



    //发帖
    public function write(){
        $types = Type::all(); //所有的栏目
        return view("/Home/Questions/write", compact("types"));
    }
    //执行发帖
    public function save(Request $request){

             //验证
             $this->validate(request(),[
                 'title'=>"required|string|min:3|max:25",
                 'body'=>"required|string|min:6",
             ]);
             // 逻辑

             $data = $request->except("_token","_csrf_token");
             $data["user_id"]=session("aid")[0];


             // 保存
             Post::create($data);
             return back();


    }



}