<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//首页
Route::get('/',"Home\IndexController@index");

//用户注册
Route::post("/register","Home\IndexController@register");
//用户登录
Route::post("/login","Home\IndexController@login");

Route::get("/doLogin","Home\IndexController@doLogin");


//路径
Route::get('/paths',"Home\PathsController@index");
Route::get('/paths/show',"Home\PathsController@show");

//讨论
Route::get('/question',"Home\QuestionsController@index");
Route::get('/question/list/{id}',"Home\QuestionsController@list");
Route::get('/question/show/{id}',"Home\QuestionsController@show");
//发布帖子
Route::get('/question/write',"Home\QuestionsController@write");
//执行发布帖子
Route::post('/question/p_save', "Home\QuestionsController@save")->name('p_save');


//训练营
Route::get('/bootcamp',"Home\BootcampController@index");

//全部课程
Route::get('/courses',"Home\CoursesController@index");
Route::get('/courses/reports',"Home\CoursesController@reports");
Route::get('/courses/show',"Home\CoursesController@show");
Route::get('/list/{id}',"Home\CoursesController@list");
Route::get('/courses/show2/{id}',"Home\CoursesController@show2");
Route::post('/doshow/{id}',"Home\CoursesController@doshow");

//开发者
Route::get('/developer',"Home\DeveloperController@index");

//教育
Route::get('/edu',"Home\EduController@index");

//老师合作
Route::get('/labs',"Home\LabsController@index");

//个人中心
Route::get('/person/questions',"Home\PersonController@questions");
Route::get('/person/reports',"Home\PersonController@reports");
Route::get('/person/reports_show',"Home\PersonController@reports_show");
Route::get('/person/study',"Home\PersonController@study");

//实验楼 做实验学编程  隐私条款
Route::get('/privacy',"Home\PrivacyController@index");

//vip
Route::get('/vip',"Home\VipController@index");



