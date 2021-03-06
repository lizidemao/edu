@extends("/Home/layout/index")

@section('title', '讨论区 - 实验楼')
<!-- 替换区块占位的sidebar内容 -->
@section('content')

<div class="container layout layout-margin-top">


    <div class="row">
        <div class="col-md-9 layout-body">

            <div class="content">

                <ul class="nav nav-tabs question-types" role="tablist" id="myTabs">
                    <li role="presentation" class="active">
                        <a href="#all" aria-controls="all" role="tab" toggle="tab">全部</a>
                    </li>
                    <li role="presentation" >
                        <a href="#course" aria-controls="course" role="tab" toggle="tab">课程问答</a>
                    </li>

                    <li role="presentation" >
                        <a href="#discussion" aria-controls="discussion" role="tab" toggle="tab">交流讨论</a>
                    </li>

                    <li role="presentation" >
                        <a href="#sharing" aria-controls="sharing" role="tab" toggle="tab">技术分享</a>
                    </li>

                    <li role="presentation" >
                        <a href="#labreport" aria-controls="labreport" role="tab" toggle="tab">实验报告</a>
                    </li>

                    <li role="presentation" >
                        <a href="#notice" aria-controls="notice" role="tab" toggle="tab">站内公告</a>
                    </li>

                    <div class="question-sort">
                        <a class="active" href="#newest" >最新</a></li>
                        /
                        <a  href="#hot" >最热</a></li>
                        /
                        <a  href="#unanswered" >未回复</a></li>
                    </div>

                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="all">

                        <ul class="row question-items">

                            @forelse ($posts as $post)

                                <li class="question-item" >
                                    <div class="col-md-10">
                                        <div class="col-sm-2 question-item-author">

                                            <div class="user-avatar ">
                                                <a class="avatar" href="../user/13/study.html" target="_blank">
                                                    <img src="Home/img/{{$post->u_photo}}?imageView2/1/w/100/h/100">
                                                </a>
                                                @if($post->vip==1)
                                                    <a class="member-icon" href="/vip" target="_blank">
                                                        <img src="&#10;            /home/img/vip-icon.png&#10;          ">
                                                    </a>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-sm-10">
                                            <h4>

                                                <a class="question-item-title" href="/question/show/{{$post->id}}" target="_blank"> {{$post->title}}</a>

                                            </h4>
                                            <div class="question-item-summary">

                                                <div class="user-username ">

                                                    <a class="avatar" href="../user/13/study.html" target="_blank">

                                                        {{$post->name}}
                                                    </a>
                                                    <span class="user-level">L14</span>
                                                </div>

                                                <span class="question-item-date">{{$post->updated_at}}</span>

                                                最后回复 <span class="question-item-date">



                                            <div class="user-username ">
                                                <a class="username" href="/user/256544" target="_blank">

                                                        芃逆明


                                                </a>
                                                <span class="user-level">L38</span>
                                            </div>
                                         </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 question-item-rank">
                                        <div class="question-item-answered">
                                            <div>89</div>
                                            <div>回复</div>
                                        </div>
                                        <div class="question-item-views">
                                            <div>2409</div>
                                            <div>查看</div>
                                        </div>
                                    </div>
                                </li>

                            @empty
                                <p>还没有文章呢</p>
                            @endforelse


                        </ul>

                        <nav class="pagination-container">
                            <ul class="pagination question_page">

                                {{ $posts->links() }}

                            </ul>
                        </nav>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="course">

                        <ul class="row question-items">


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="../user/13/study.html" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarc51ce410c124a10e0db5e4b97fc2af39.png?v=1439957390221&amp;imageView2/1/w/200/h/200">
                                            </a>

                                            <a class="member-icon" href="/vip" target="_blank">

                                                <img src="
            /home/img/vip-icon.png
          ">

                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>



                                            <a class="question-item-title" href="/question/show" target="_blank"> 实验楼会员服务FAQ</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="avatar" href="../user/13/study.html" target="_blank">

                                                    石头山


                                                </a>
                                                <span class="user-level">L195</span>
                                            </div>


                                            <span class="question-item-date">2天前</span>

                                            最后回复 <span class="question-item-date">



    <div class="user-username ">
        <a class="username" href="/user/1" target="_blank">

                shiyanlouadmin


        </a>
        <span class="user-level">L14</span>
    </div>
 </span>




                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="question-item-answered">
                                        <div>112</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>6359</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="../user/13/study.html" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarNTY0MzE5MjcwNTg4.png?v=1472709990977&amp;imageView2/1/w/200/h/200">
                                            </a>

                                            <a class="member-icon" href="/vip" target="_blank">

                                                <img src="
            /home/img/vip-icon.png
          ">

                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/question/show" target="_blank"> &#34;模型（一）&#34; 实验报告</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="avatar" href="../user/13/study.html" target="_blank">

                                                    Unchained_Coder


                                                </a>
                                                <span class="user-level">L52</span>
                                            </div>


                                            <span class="question-item-date">5分钟前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/30" target="_blank">Python Django Web框架</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>0</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="../user/13/study.html" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarJV27JZZLJ9T2.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8706" target="_blank"> &#34;用户及文件权限管理&#34; 实验报告</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="avatar" href="../user/13/study.html" target="_blank">

                                                    ww10075


                                                </a>
                                                <span class="user-level">L1</span>
                                            </div>


                                            <span class="question-item-date">5分钟前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/1" target="_blank">Linux 基础入门（新版）</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>1</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <nav class="pagination-container">
                            <ul class="pagination question_page">



                            </ul>
                        </nav>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="discussion">

                        <ul class="row question-items">

                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/261949" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarPCGEKEPZUUFS.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8704" target="_blank"> &#34;高级功能入门&#34; 实验报告</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/261949" target="_blank">

                                                    样与星飞


                                                </a>
                                                <span class="user-level">L5</span>
                                            </div>


                                            <span class="question-item-date">7分钟前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/2" target="_blank">Vim编辑器</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>0</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/206590" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarCVAFAFTXQFBJ.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                            <a class="member-icon" href="/vip" target="_blank">

                                                <img src="
            /home/img/vip-icon.png
          ">

                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8703" target="_blank"> fatal: could not create work tree dir &#39;project&#39;.: Permission denied</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/206590" target="_blank">

                                                    我的心灵之神


                                                </a>
                                                <span class="user-level">L11</span>
                                            </div>


                                            <span class="question-item-date">22分钟前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/616" target="_blank">Linux系统安装git服务器</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>3</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>



                        </ul>

                        <nav class="pagination-container">
                            <ul class="pagination question_page">



                            </ul>
                        </nav>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="sharing">

                        <ul class="row question-items">

                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/327377" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatar9QJ2K4C7RVGZ.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/6756" target="_blank"> 无法创建目录权限不够</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/327377" target="_blank">

                                                    暗号


                                                </a>
                                                <span class="user-level">L2</span>
                                            </div>


                                            <span class="question-item-date">34分钟前</span>

                                            最后回复 <span class="question-item-date">



    <div class="user-username ">
        <a class="username" href="/user/50213" target="_blank">

                vector7


        </a>
        <span class="user-level">L14</span>
    </div>
 </span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/68" target="_blank">Linux命令实例练习</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="question-item-answered">
                                        <div>2</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>45</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/189278" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarWEDEXPRVZAPK.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8692" target="_blank"> 模块后缀名错误</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/189278" target="_blank">

                                                    摩涅莫西涅


                                                </a>
                                                <span class="user-level">L2</span>
                                            </div>


                                            <span class="question-item-date">46分钟前</span>

                                            最后回复 <span class="question-item-date">



    <div class="user-username ">
        <a class="username" href="/user/189278" target="_blank">

                摩涅莫西涅


        </a>
        <span class="user-level">L2</span>
    </div>
 </span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/713" target="_blank">跟我一起来玩转Makefile</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="question-item-answered">
                                        <div>2</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>13</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/348062" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatar348062.png?v=1483703222865&amp;imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8702" target="_blank"> &#34;选择程序设计&#34; 实验报告</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/348062" target="_blank">

                                                    生无可恋的咸鱼


                                                </a>
                                                <span class="user-level">L7</span>
                                            </div>


                                            <span class="question-item-date">47分钟前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/57" target="_blank">C语言入门教程</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>1</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/179072" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatar179072.png?v=1483782678305&amp;imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8701" target="_blank"> &#34;Hello，ShiYanLou!&#34; 实验报告</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/179072" target="_blank">

                                                    实验流


                                                </a>
                                                <span class="user-level">L1</span>
                                            </div>


                                            <span class="question-item-date">47分钟前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/63" target="_blank">新手指南之玩转实验楼</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>4</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                        </ul>

                        <nav class="pagination-container">
                            <ul class="pagination question_page">



                            </ul>
                        </nav>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="labreport">

                        <ul class="row question-items">

                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/326464" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatar839MP62DELVT.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8700" target="_blank"> &#34;视图和URL配置&#34; 实验报告</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/326464" target="_blank">

                                                    dako


                                                </a>
                                                <span class="user-level">L8</span>
                                            </div>


                                            <span class="question-item-date">1小时前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/30" target="_blank">Python Django Web框架</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>1</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/350016" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatar76CZNW2H5XGL.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8699" target="_blank"> Xfce终端，怎样检查代码错误？</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/350016" target="_blank">

                                                    LOU1263142231


                                                </a>
                                                <span class="user-level">L5</span>
                                            </div>


                                            <span class="question-item-date">1小时前</span>

                                            最后回复 <span class="question-item-date">



    <div class="user-username ">
        <a class="username" href="/user/184444" target="_blank">

                狂草


        </a>
        <span class="user-level">L11</span>
    </div>
 </span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/1" target="_blank">Linux 基础入门（新版）</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="question-item-answered">
                                        <div>1</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>8</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                        </ul>

                        <nav class="pagination-container">
                            <ul class="pagination question_page">



                            </ul>
                        </nav>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="notice">

                        <ul class="row question-items">

                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/332679" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatar332679.png?v=1483454464246&amp;imageView2/1/w/200/h/200">
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8698" target="_blank"> &#34;进阶篇 - SQL 语句语法详解&#34; 实验报告</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/332679" target="_blank">

                                                    凌岸_ing


                                                </a>
                                                <span class="user-level">L25</span>
                                            </div>


                                            <span class="question-item-date">1小时前</span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/9" target="_blank">MySQL 基础课程</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="">
                                        <div>0</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>1</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/256544" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarVY4JVKBCU7YX.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                            <a class="member-icon" href="/vip" target="_blank">

                                                <img src="
            /home/img/vip-icon.png
          ">

                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/8697" target="_blank"> python数据库配置问题，求各路大神指导！</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/256544" target="_blank">

                                                    芃逆明


                                                </a>
                                                <span class="user-level">L38</span>
                                            </div>


                                            <span class="question-item-date">1小时前</span>

                                            最后回复 <span class="question-item-date">



    <div class="user-username ">
        <a class="username" href="/user/256544" target="_blank">

                芃逆明


        </a>
        <span class="user-level">L38</span>
    </div>
 </span>


                                            <span class="question-item-course">
                来自
                <a href="/questions/courses/30" target="_blank">Python Django Web框架</a>
            </span>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="question-item-answered">
                                        <div>1</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>6</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                            <li class="question-item">
                                <div class="col-md-10">
                                    <div class="col-sm-2 question-item-author">




                                        <div class="user-avatar ">
                                            <a class="avatar" href="/user/147396" target="_blank">
                                                <img src="https://dn-simplecloud.shiyanlou.com/gravatarG8Q6KS3J8T7L.jpg?imageView2/1/w/200/h/200">
                                            </a>

                                            <a class="member-icon" href="/vip" target="_blank">

                                                <img src="
            /home/img/vip-icon.png
          ">

                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-sm-10">
                                        <h4>

                                            <a class="question-item-title" href="/questions/2522" target="_blank"> 什么时候会出Python自动化测试的课程啊，包括appium</a>

                                        </h4>
                                        <div class="question-item-summary">





                                            <div class="user-username ">
                                                <a class="username" href="/user/147396" target="_blank">

                                                    不锈


                                                </a>
                                                <span class="user-level">L8</span>
                                            </div>


                                            <span class="question-item-date">1小时前</span>

                                            最后回复 <span class="question-item-date">



    <div class="user-username ">
        <a class="username" href="/user/272204" target="_blank">

                taichu


        </a>
        <span class="user-level">L2</span>
    </div>
 </span>



                                            <span class="question-item-tags">

                <a class="tagStyle2" href="/questions/?tag=Python" target="_blank">Python</a>

            </span>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 question-item-rank">
                                    <div class="question-item-answered">
                                        <div>2</div>
                                        <div>回复</div>
                                    </div>
                                    <div class="question-item-views">
                                        <div>132</div>
                                        <div>查看</div>
                                    </div>
                                </div>
                            </li>


                        </ul>

                        <nav class="pagination-container">
                            <ul class="pagination question_page">



                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3 layout-side">



        <a class="btn side-btn" href="/question/write" data-toggle="modal" data-sign="signin">我要发帖</a>








<div class="sidebox">

	<div class="sidebox-header">
		<h4 class="sidebox-title">最热路径</h4>
	</div>
	<div class="sidebox-body course-content side-list-body">
        <a href="/paths/python"><img style="width:25px;height:25px" src="/home/img/1471513769430.png"> Python 研发工程师</a>
        <a href="/paths/bigdata"><img style="width:25px;height:25px" src="/home/img/1471513926288.png"> 大数据工程师</a>
        <a href="/paths/cpp"><img style="width:25px;height:25px" src="/home/img/1471513793360.png"> C++ 研发工程师</a>
        <a href="/paths/security"><img style="width:25px;height:25px" src="/home/img/1471513867033.png"> 信息安全工程师</a>
        <a href="/paths/linuxsys"><img style="width:25px;height:25px" src="/home/img/1471514004752.png"> Linux 运维工程师</a>
	</div>

</div>

<div class="side-image side-qrcode">
    <img src="/home/img/ShiyanlouQRCode.png">
    <div class="side-image-text">关注公众号，手机看教程</div>
</div>

    <div class="sidebox side-list">
        <div class="sidebox-header">
            <h4 class="sidebox-title">常见问题</h4>
        </div>
        <div class="sidebox-body side-list-body">
            <a href="/questions/80" target="_blank">实验操作很卡怎么办？</a>
            <a href="/questions/91" target="_blank">为什么连不上实验桌面？</a>
            <a href="/questions/360" target="_blank">"我的代码库"如何用？</a>
            <a href="/questions/92" target="_blank">实验楼环境默认用户及密码？</a>
            <a href="/questions/235" target="_blank">环境中是否可以联网？</a>
        </div>
        <div class="sidebox-footer">
            <div class="pull-right"><a href="/questions/?tag=%E5%B8%B8%E8%A7%81%E9%97%AE%E9%A2%98" target="_blank">查看全部</a></div>
        </div>
    </div>


        </div>
    </div>
</div>


	<div class="modal fade" id="invite-user" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">邀请好友，双方都可获赠实验豆！</h4>
				</div>
				<div class="modal-body">

                        <p><h4><a href="#sign-modal" data-toggle="modal" data-sign="signin">登录</a>后邀请好友注册，您和好友将分别获赠3个实验豆！</h4></p>

					<div id="msg-modal"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="flash-message" tabindex="-1" role="dialog">
		<div class="modal-dialog" rolw="document">
		</div>
	</div>
	<div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">注意</h4>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary confirm" data-dismiss="modal">确定</button>
				</div>
			</div>
		</div>
	</div>




<div class="modal fade askquestion-modal" id="askquestion" tabindex="-1" role="dialog">
    <div class="modal-dialog" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">发帖</h4>
            </div>
            <div class="modal-body words-ctrl">
                <form class="form-horizontal" action="/questions/">
                    <input name="_csrf_token" type=hidden value="1483789088##bbf83c51243ab12daa94911c8865a65bdc66c4d8">
                    <div class="form-group">
                        <label class="col-md-2 control-label">标题</label>
                        <div class="col-md-10">
                            <input type="text" name="title" min="5" max="100" class="form-control" placeholder="至少输入5个字" value="">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">描述</label>
                        <div class="col-md-10">



<div class="tabpanel mkeditor">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#mkeditor-editor" role="tab" data-toggle="tab">编辑</a>
        </li>
        <li role="presentation">
            <a class="mkeditor-btn-view" href="#mkeditor-viewer" role="tab" data-toggle="tab">预览</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active mkeditor-editor" id="mkeditor-editor" role="tabpanel">

            <div class="btn-group" role="group">

                <button type="button" class="btn btn-default mkeditor-btn-bold">
                    <i class="fa fa-bold"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-italic">
                    <i class="fa fa-italic"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-link">
                    <i class="fa fa-link"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-quote">
                    <i class="fa fa-quote-left"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-code">
                    <i class="fa fa-code"></i>
                </button>
                <button id="mkeditor-pickfile" type="button" class="btn btn-default mkeditor-btn-img">
                    <i class="fa fa-image"></i>
                </button>

                <button type="button" class="btn btn-default mkeditor-btn-listol">
                    <i class="fa fa-list-ol"></i>
                </button>
                <button type="button" class="btn btn-default mkeditor-btn-listul">
                    <i class="fa fa-list-ul"></i>
                </button>
            </div>
            <div class="btn-group pull-right" role="group">
                <a style="font-size:12px; color:#666; text-decoration:underline;" href="/questions/764" target="_blank">
                    <i class="fa fa-question-circle"></i>Markdown 语法
                </a>
            </div>
            <textarea name="content" class="content"
                min="0" max="20000"
                placeholder="推荐使用 Markdown 语法，至少输入 5 个字"></textarea>
            <div class="help-block"></div>
        </div>
        <div class="tab-pane mkeditor-viewer markdown-body" id="mkeditor-viewer" role="tabpanel">
            <div></div>
        </div>
    </div>
</div>

                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-md-2 control-label">板块</label>
                        <div class="col-md-10">
                            <div class="q-types" data-type="">
                            </div>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="submit-question btn btn-primary" data-dismiss="modal">提交</button>
            </div>
        </div>
    </div>
</div>


    <div class="modal fade" id="sign-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#signin-form" aria-controls="signin-form" role="tab" data-toggle="tab">登录</a>
                    </li>
                    <li role="presentation">
                        <a href="#signup-form" aria-controls="signup-form" role="tab" data-toggle="tab">注册</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="signin-form">
                        <form action="/login" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope" style="margin:0;"></i>
                                    </div>
                                    <input type="email" name="login" class="form-control" placeholder="请输入邮箱">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock" style="margin:0;"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="form-inline verify-code-item" style="display:none;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="captcha_v" class="form-control" placeholder="请输入验证码">
                                    </div>
                                </div>
                                <img class="verify-code" src="" source="111">
                            </div>
                            <div class="form-group remember-login">
                                <input name="remember" type="checkbox" value="y"> 下次自动登录
                                <a class="pull-right" href="../reset_password/index.html">忘记密码？</a>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" name="submit" type="submit" value="进入实验楼">
                            </div>
                            <div class="form-group widget-signin">
                                <span>快速登录</span>
                                <a href="/auth/qq?next="><i class="fa fa-qq"></i></a>
                                <a href="/auth/weibo?next="><i class="fa fa-weibo"></i></a>
                                <a href="/auth/weixin?next="><i class="fa fa-weixin"></i></a>
                                <a href="/auth/github?next="><i class="fa fa-github"></i></a>
                                <a href="/auth/renren?next="><i class="fa fa-renren"></i></a>
                            </div>
                            <div class="form-group error-msg">
                                <div class="alert alert-danger" role="alert"></div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="signup-form">
                        <form action="/register" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope" style="margin:0;"></i>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="请输入邮箱">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock" style="margin:0;"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="captcha_v" class="form-control" placeholder="请输入验证码">
                                    </div>
                                </div>
                                <img class="verify-code" src="" source="https://www.shiyanlou.com/captcha.gif">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" name="submit" type="submit" value="注册">
                            </div>
                            <div class="form-group agree-privacy">
                                注册表示您已经同意我们的<a href="../privacy/index.html" target="_blank">隐私条款</a>
                            </div>
                            <div class="form-group widget-signup">
                                <span>快速注册</span>
                                <a href="/auth/qq?next="><i class="fa fa-qq"></i></a>
                                <a href="/auth/weibo?next="><i class="fa fa-weibo"></i></a>
                                <a href="/auth/weixin?next="><i class="fa fa-weixin"></i></a>
                                <a href="/auth/github?next="><i class="fa fa-github"></i></a>
                                <a href="/auth/renren?next="><i class="fa fa-renren"></i></a>
                            </div>
                            <div class="form-group error-msg">
                                <div class="alert alert-danger" role="alert"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div id="base-data"


            data-flash="false"



        data-is-login=false

        data-is-jwt=true
        data-socket-url="wss://comet.shiyanlou.com"
        data-msg-user=""
        data-msg-system=""
    ></div>

<script src="/Home/static/jquery-3.1.0.min.js"></script>
    <script src="/Home/static/bootstrap.js"></script>
<script>
   $(function () {
       $('#myTabs a').click(function (e) {
           e.preventDefault()
           $(this).tab('show')
       })
   })
</script>
   {{-- <script src="/Home/app/dest/lib/lib.js?=2016121272249"></script>
    <script src="/Home/static/jquery/2.2.4/jquery.min.js"></script>
    <script src="/Home/static/ace/1.2.5/ace.js"></script>
    <script src="/Home/static/aliyun/aliyun-oss-sdk-4.3.0.min.js"></script>
    <script src="/Home/static/highlight.js/9.8.0/highlight.min.js"></script>
    <script src="/Home/static/jspdf/1.2.61/jspdf.min.js"></script>
    <script src="/Home/static/plupload/2.1.9/js/plupload.full.min.js"></script>
    <script src="/Home/static/zeroclipboard/2.2.0/ZeroClipboard.min.js"></script>
    <script src="/Home/static/videojs/video.min.js"></script>
    <script src="/Home/static/bootstrap-tour/0.11.0/js/bootstrap-tour.min.js"></script>
    <script src="/Home/static/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    <script src="/Home/static/bootstrap-table/1.11.0/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="/Home/static/bootstrap-table/1.11.0/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

    <script src="/Home/static/ravenjs/3.7.0/raven.min.js"></script>
    <script>
        Raven.config('https://bc3878b7ed0a4468a65390bd79e6e73f@sentry.shiyanlou.com/5', {
            release: '3.12.13'
        }).install();
    </script>


<div id="jinja-data"

    data-question-form="/questions/meta"
    data-is-authenticated="false"
    data-login-url="/login?next=%2Fquestions%2F"
    data-qiniu-token-url="/api/qiniu/token"
    data-userid=""
    ></div>

<script src="/Home/app/dest/question/index.js?=2016121272249"></script>--}}

@endsection