@extends("/Home/layout/index")

@section('title', '实验楼 - 项目实战')

@section("content")
    <div class="container layout layout-margin-top">
    
<ol class="breadcrumb">
    <li><a href="/courses/">全部课程</a></li>
    
    <li>
    
    <a href="/courses/?tag=C%2FC%2B%2B">C/C++</a>
    
    </li>
    
    <li class="active">
        <a href="/courses/454">
            {{$res->title}}
        </a>
    </li>
</ol>

    <div class="row">
        <div class="col-md-9 layout-body">
        
    <div class="side-image side-image-mobile">
        <img src="https://dn-simplecloud.shiyanlou.com/1478912411387.png?imageView2/0/h/300">
    </div>
    <div class="content course-infobox">
        <div class="clearfix course-infobox-header">
            <h4 class="pull-left course-infobox-title">
                
                <span class="course-infobox-type" data-course-type="1" style="background: #5d8cd2;">训练营</span>
                
                <span>{{$res->title}}</span>
                
            </h4>
            <div class="pull-right course-infobox-follow"
                data-follow-url="/courses/454/follow"
                data-unfollow-url="/courses/454/unfollow">
                <span class="course-infobox-followers">135</span>
                <span>人关注</span>
                
                <i class="fa fa-star-o" data-next="/login?next=%2Fcourses%2F454"></i>
                
            </div>
        </div>
        <div class="clearfix course-infobox-body">
            <div class="course-infobox-content">
            <p>{{$res->content}}</p>
            
            <p>课程购买有疑问？</p>
            <a class="btn btn-success online-consultant" data-toggle="modal" data-target="#askquestion">在线咨询</a>
            
            </div>
            
            <div class="course-infobox-progress">
                
                
                    
                    <div class="course-progress-new"></div>
                    
                
                
                    <div class="course-progress-new"></div>
                
                    <div class="course-progress-new"></div>
                
                    <div class="course-progress-new"></div>
                
                <span>（0/4）</span>
            </div>
            
            
            

            
        </div>
        
        <div class="clearfix bootcamp-infobox">
            <div class="bootcamp-infobox-footer">
                
                    
                
                

                
                    
                
                <div class="col-md-3 bootcamp-infobox-msg">
                    <img src="/Home/img/bootcamp-course.png">
                    <div class="msg-desc"><span>4 个步骤详细的项目实验</span></div>
                    <img class="bootcamp-infobox-footer-plus" src="/Home/img/bootcamp-plus.png">
                </div>
                
                <div class="col-md-3 bootcamp-infobox-msg">
                    <img src="/Home/img/bootcamp-env.png">
                    <div class="msg-desc"><span>最新实用的实战技术</span></div>
                    <img class="bootcamp-infobox-footer-plus" src="/Home/img/bootcamp-plus.png">
                </div>
                <div class="col-md-3 bootcamp-infobox-msg">
                    <img src="/Home/img/bootcamp-qa.png">
                    <div class="msg-desc"><span>有问必答的实验助教</span></div>
                    <img class="bootcamp-infobox-footer-plus" src="/Home/img/bootcamp-equal.png">
                </div>
                
                
                <div class="col-md-3 bootcamp-infobox-msg bootcamp-infobox-buybox">
                        <div class="original-price">￥199.00</div>
                        <div class="member-price">
                        
                        <span class="member-price" data-container="body" data-toggle="popover" data-placement="top" data-original-title="会员优惠" data-html="true" data-content="普通会员
(<span class='price-number'>8折</span>)：<span class='price-number'>￥159.2</span><br>高级会员 (<span class='price-number'>5折</span>)：<span class='price-number'>￥99.5</span>"><a href="/vip" title="">会员最低5折</a></span>
                        
                        </div>
                        
                        <div class="bootcamp-infobox-buy" >立即购买</div>
                        
                    </div>
                
            </div>
        </div>
        
    </div>
    <div class="content">
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#charge-course-detail" aria-controls="charge-course-detail" role="tab" data-toggle="tab">课程详情</a>
            </li>
            <li role="presentation">
                <a href="#labs" aria-controls="labs" role="tab" data-toggle="tab">实验列表</a>
            </li>
            
            <li role="presentation">
                <a href="#comments" class="stat-event" aria-controls="comments" role="tab" data-stat="course_comment" data-toggle="tab">课程评论(22)</a>
            </li>
            <li role="presentation">
                <a href="#reports" class="stat-event" data-stat="course_report" aria-controls="reports" role="tab" data-toggle="tab">实验报告(21)</a>
            </li>
            <li role="presentation">
                <a href="#questions" class="stat-event" data-stat="course_question" aria-controls="questions" role="tab" data-toggle="tab">实验问答(76)</a>
            </li>
        </ul>
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active markdown-box" id="charge-course-detail">
                <img src="/Home/img/d_1.png" alt="">
                <img src="/Home/img/d_2.png" alt="">
                <img src="/Home/img/d_3.png" alt="">
                <img src="/Home/img/d_4.png" alt="">
                <img src="/Home/img/d_5.png" alt="">
                <img src="/Home/img/d_6.png" alt="">
                <div class="bt-desc-footer">
                    <button class="btn btn-default" onclick="javascript:document.body.scrollTop=0" >回到顶部</button>
                    <button class="btn bootcamp-infobox-buy" style="">立即加入</button>
                </div>
            </div>
            
            <div role="tabpanel" class="tab-pane " id="labs">
                

    
    
    
    <div class="lab-item ">
    <div class="lab-item-status">
        
            <img src="/Home/img/lab-not-ok.png">
        
    </div>
    <div class="lab-item-index">第1节</div>
    <div class="lab-item-title" data-toggle="tooltip" data-placement="bottom" title="课程管理系统">课程管理系统</div>
    <div class="pull-right lab-item-ctrl">
        
            
            
                
                <a class="btn btn-default" href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/courses/454">查看文档</a>
                <a class="btn btn-primary" href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/courses/454">开始实验</a>
                
            
        
    </div>
</div>

    
    
    
    <div class="lab-item ">
    <div class="lab-item-status">
        
            <img src="/Home/img/lab-not-ok.png">
        
    </div>
    <div class="lab-item-index">第2节</div>
    <div class="lab-item-title" data-toggle="tooltip" data-placement="bottom" title="俄罗斯方块">俄罗斯方块</div>
    <div class="pull-right lab-item-ctrl">
        
            
            
                
            
        
    </div>
</div>

    
    
    
    <div class="lab-item ">
    <div class="lab-item-status">
        
            <img src="/Home/img/lab-not-ok.png">
        
    </div>
    <div class="lab-item-index">第3节</div>
    <div class="lab-item-title" data-toggle="tooltip" data-placement="bottom" title="即时通信软件">即时通信软件</div>
    <div class="pull-right lab-item-ctrl">
        
            
            
                
            
        
    </div>
</div>

    
    
    
    <div class="lab-item ">
    <div class="lab-item-status">
        
            <img src="/Home/img/lab-not-ok.png">
        
    </div>
    <div class="lab-item-index">第4节</div>
    <div class="lab-item-title" data-toggle="tooltip" data-placement="bottom" title="Web服务器">Web服务器</div>
    <div class="pull-right lab-item-ctrl">
        
            
            
                
            
        
    </div>
</div>


            </div>
            <div role="tabpanel" class="tab-pane course-comment" id="comments">
                <div class="comment-box">

                    @if(!session("aid"))
                    <div class="comment-form">
                        <div class="comment-form-unlogin">
                            请
                            <a href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/courses/454" data-target="#myModal"> 登录 </a>
                            后发表评论
                        </div>
                    </div>
                    @else

                        <div class="comment-title">发表评论</div>


                        <form action="/doshow/{{$res->detail_id}}" method="post">
                            {{csrf_field()}}
                            <textarea name="replies" id="text_focus" cols="130" rows="10" style="border-color: #eee;"></textarea>
                            <button type="submit" style="width: 88px;height: 34px;fontsize: 16px;background: #eee;border: none;">提交</button>
                        </form>

                    @endif
                    <div class="comment-title">最新评论</div>


                    @foreach($resa as $rep)

                    <div style="width: 100%;height: 130px;border-top: 2px solid #eee;padding-top: 20px">
                        <div class="col-md-1">
                            <div style="display: inline-block">
                                <a href="##">
                                    <img src="/Home/img/{{$rep->u_photo}}" alt="" style="width: 50px;height: 50px;border-radius: 50%;">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="username" style="display: inline-block">
                                <a href="##" style="color: #a4a4a4;text-decoration: none">{{$rep->name}}</a>
                            </div>
                            <div style="margin: 10px 0">
                                <p>{{$rep->replies}}</p>
                            </div>
                            <div style="display: inline-block;width: 100%;padding: 10px 0 0;">
                                <div style="color: #a4a4a4;float: left;font-size: 12px;display: inline-block;">{{$rep->created_at}}</div>
                                <div style="color: #a4a4a4;float: right;font-size: 14px;"><a href="##" id="reply" style="color: #464646;;" ><img src="/Home/img/icon-reply.png" alt="" style="margin-right: 5px;margin-top: -3px;    vertical-align: middle;">回复</a></div>
                            </div>
                        </div>
                    </div>


                    @endforeach




                    {{$resa->links()}}

                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="reports">
                <span class="lab-id active" data-lab-id="None">全部</span>
                
                <span class="lab-id" data-lab-id="1439">第1节</span>
                
                <span class="lab-id" data-lab-id="1440">第2节</span>
                
                <span class="lab-id" data-lab-id="1441">第3节</span>
                
                <span class="lab-id" data-lab-id="1442">第4节</span>
                
                <div class="report-owner">
                    <span class="owner-list" data-user-id="">我的报告</span> / <span class="owner-list active" data-user-id="None">所有报告</span>
                </div>
                <div class="row report-items"></div>
                <div class="pagination-container"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="questions">
                <a class="btn btn-success" data-toggle="modal" data-target="#askquestion">我要提问</a>
                <hr>
                <ul class="row question-items"></ul>
                <div class="pagination-container"></div>
            </div>
        </div>
    </div>
        </div>
        <div class="col-md-3 layout-side">
    <div class="side-image side-image-pc">
        <img src="https://dn-simplecloud.shiyanlou.com/1478912411387.png?imageView2/0/h/300">
    </div>
<div class="sidebox mooc-teacher">
    <div class="sidebox-header mooc-header">
        <h4 class="sidebox-title">课程教师</h4>
    </div>
    <div class="sidebox-body mooc-content">
        <a href="/user/3858" target="_blank">
            <img src="https://dn-simplecloud.shiyanlou.com/gravatarCAA9K27VW4SN.jpg?imageView2/1/w/200/h/200">
        </a>
        <div class="mooc-info">
            <div class="name"><strong>Cloud君</strong> </div>
            
            <div class="courses">共发布过<strong>6</strong>门课程</div>
        </div>
        <div class="mooc-extra-info">
            <div class="word long-paragraph">
                
            </div>
        </div>
    </div>
    <div class="sidebox-footer mooc-footer">
        <a href="/teacher/3858" target="_blank">查看老师的所有课程 ></a>
    </div>
</div>
    <div class="side-image">
    <a href="/vip" target="_blank">
        <img src="/Home/img/banner-vip.png">
    </a>
</div>
    <div class="sidebox recommend-courses">
        <div class="sidebox-header recommend-courses-header">
            <h4 class="sidebox-title">推荐课程</h4>
        </div>
        <div class="sidebox-body recommend-courses-content">
            
            <a href="/courses/721">使用OpenCV进行图片平滑处理打造模糊效果</a>
            
            <a href="/courses/453">C 语言经典项目实战</a>
            
            <a href="/courses/584">C 语言实现Linux who命令</a>
            
            <a href="/courses/439">C语言实现Linux ls命令</a>
            
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
                    <input name="_csrf_token" type=hidden value="1483798909##83486291085ca5638aecfa7c17fa13a65c6f2d91">
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
                <a type="button" class="submit-question btn btn-primary" href="/vip" target="_blank" style="background:#FFFFFF;color:#00CC99;border:none;float:left;padding-left:0;"><img src="/Home/img/senior-vip-icon.png" alt=""> 加入高级会员获得助教答疑</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="submit-question btn btn-primary" data-dismiss="modal">提交</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="start-newlab">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>开始新实验</h3>
            </div>
            <div class="modal-body" style="text-align:center">
                <p> 一个实验正在进行，是否停止它，开始新实验？</p>
                
            </div>
            <div class="modal-footer" style="margin-top:0px">
                
                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                    <a class="btn btn-primary start-newlab-confirm">确定</a>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="start-evaluation-course">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>开始评估课实验</h3>
            </div>
            <div class="modal-body">
                <div>
                    <p>为了让评估结果更加准确，请注意以下操作：</p>
                    <ul>
                        <li>完成实验后点击「停止实验」按钮</li>
                        <li>将代码提交到代码库</li>
                        <li>尽可能详尽的撰写实验报告</li>
                        <li>尽可能在实验操作的关键步骤截图</li>
                        <li>尽可能减少无用操作</li>
                        <li>尽可能高效的利用内存/CPU资源</li>
                    </ul>
                    <p>评估课还在不断完善中，我们真挚希望你能通过我们提供的这个平台，找到更好的发展机会。</p>
                </div>
                <br>
                <div class="start-newlab"></div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                <a class="btn btn-primary start-confirm">确定</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="vip-startlab-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>开始实验</h3>
            </div>
            <div class="modal-body">
                <div class="start-newlab"></div>
                <br>
                <div class="text-center vip-vm">
                    <a class="btn btn-default btn-lg newvm">创建新环境</a>
                    
                </div>
                <br>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="bean-course-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">激活项目课：C++ 经典项目实战</h4>
            </div>
            <div class="modal-body">
                <div style="font-size:14px; font-weight:thin;">
                    在线完成4个经典C++项目，高强度项目训练学习C++语言开发。知识涵盖C++基础，面向对象，网络开发等知识。课程随到随学，遇到技术问题在讨论区发帖提问，有工程师回复解答。

                </div>
                <div style="margin:36px 0 18px; font-size:16px; font-weight:bold;">
                    您有 <span style="color:#f66;"><strong></strong></span> 个实验豆，激活本课程需要消耗 <span style="color:#f66;"><strong>0</strong></span> 个实验豆！
                </div>
                <div style="color:#84B61A; font-size:14px; font-weight:bold;">激活后可不限次数学习本课。<a href="/faq#shiyandou" style="font-weight:normal;" target="_blank">如何获得实验豆？</a></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                
                <a class="btn btn-primary getshiyandou" href="/faq#shiyandou" target="_blank" data-dismiss="modal">获取实验豆</a>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="charge-course-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title">课程报名</h4>
            </div>
            <div class="modal-body">
                <form class="row form-horizontal">
                     <input name="_csrf_token" type=hidden value="1483798909##83486291085ca5638aecfa7c17fa13a65c6f2d91">
                    <div class="form-group">
                        <label class="col-md-2 control-label">邮箱</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">手机号码</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="phone_no">
                                <span class="input-group-btn">
                                    <button class="btn btn-default charge-course-phone-code" type="button" style="padding:7px 12px;">获取验证码</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary charge-course-confirm">确定</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="bootcamp-pay-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog bootcamp-modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">购买训练营</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>手机号</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" name="phone_no" class="form-control" value="" >
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary get-phone-code " type="button" style="border-width:2px;"
                                            data-code-url="/user/sms/code"
                                            data-pay-url="/purchase/bootcamp/10/pay">获取验证码</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label>验证码</label>
                        <input type="text" class="form-control bootcamp-phone-code">
                        <a class="label label-warning" href="/questions/2540" target="_blank">收不到验证码？</a>
                    </div>
                    
                    <div class="form-group">
                        <label>支付方式</label>
                        <div class="pay-method-box">
                            <div class="pay-method pay-method-ali active" data-pay="ALI_WEB">
                            </div>
                            <div class="pay-method pay-method-wx" data-pay="WX_NATIVE">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-body vip-modal-qrcode" style="display:none;">
                <div class="vip-wx-price">付款：<span></span></div>
                <div class="vip-wx-qrcode"></div>
                <a class="vip-wx-method" href="javascript:;">更换支付方式</a>
            </div>
            <div class="modal-footer">
                <span class="real-price pull-left">￥199.00</span>
                <span class="price-without-book pull-left" style="display:none;">￥199.00</span>
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary bootcamp-confirm-pay">确认购买</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="paid-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align:center;">支付确认</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-primary paid-confirm" type="button">支付成功</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary paid-method" type="button" style="background:none; color:#0c9">选择支付方式</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:60%">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">注册</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="/register" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="昵称" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" placeholder="请输入邮箱" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" placeholder="请输入密码" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn" style="width: 100%;background-color: #31C78D; color: #FFFFFF;">注册</button>
                            </div>
                        </div>
                    </form>
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

    <script src="/Home/app/dest/lib/lib.js?=2016121272249"></script>
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

        $("#reply").click(function(){

        })



    </script>

    
<div id="jinja-data"
    data-userlab-id=""
    data-course-id="454"
    data-is-authenticated="false"
    data-user-joined="false"
    data-user-logined="false"
    data-show-student-info-modal="false"
    data-login-url="/login?next=%2Fcourses%2F454"
    data-start-newlab-url="/courses/clear"
    
    data-faq="/faq"
    data-comment-post="/courses/454/comments"
    data-loginurl="/login?next=%2Fcourses%2F454"
    data-site-type="0"
    data-report-post="/courses/454/reports"
    data-recomment-img="/Home/img/recommentReport.png"
    data-charge-course-phone-code="/user/sms/code"
    data-join-private-course="/courses/join"
    data-current-user-id=""
    data-vip-icon="/Home/img/vip-icon.png"
    data-vip-index="/vip"
    data-get-question-url="/courses/454/questions"
    data-real-price = "199.00"
    
    data-price-without-book = "199.00"
    
    data-query-bill="/purchase/bill/query"
    data-question-form="/questions/meta"
    data-qiniu-token-url="/api/qiniu/token"
    ></div>
<script src="/Home/app/dest/course/labs.js?=2016121272249"></script>
@endsection