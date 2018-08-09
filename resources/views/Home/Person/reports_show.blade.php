@extends("/Home/layout/index")

@section('title', '新手指南之玩转实验楼')

@section('content')
	<div class="container layout layout-margin-top">
    
<ol class="breadcrumb">
    <li><a href="/courses/">全部课程</a></li>
    <li><a href="/courses/reports">实验报告</a></li>
    <li class="active">
        <a href="/courses/reports/351349">
            "新手指南之玩转实验楼"实验报告
        </a>
    </li>
</ol>

    <div class="row">
        <div class="col-md-9 layout-body">
            
<div class="content">
    <div class="report-title">
        
    
    
    
    <div class="user-avatar ">
        <a class="avatar" href="/user/13" target="_blank">
            <img src="https://dn-simplecloud.shiyanlou.com/gravatarc51ce410c124a10e0db5e4b97fc2af39.png?v=1439957390221&amp;imageView2/1/w/200/h/200">
        </a>
        
        <a class="member-icon" href="/vip" target="_blank">
            
<img src="
            /Home/img/vip-icon.png
          ">

        </a>
        
    </div>

        
    
    
    
    <div class="user-username ">
        <a class="username" href="/user/13" target="_blank">
            
                石头山
            

        </a>
        <span class="user-level">L195</span>
    </div>

        <span class="update-time">2016-12-27 08:41</span>
        
        <a class="tagStyle2" href="/courses/reports?tag=C%2FC%2B%2B">C/C++</a>
        
        <div class="report-figure">
            <i class="fa fa-eye"></i><span class="report-views">382</span>
            <i class="fa fa-comments-o"></i><span class="comments-count">1</span>
        </div>
    </div>
    <div class="clearfix report-body">
        <div class="report-ctrl">
            
            <div class="report-git">
                <a class="btn btn-default" href="http://git.shiyanlou.com/shilei/shiyanlou_cs63" target="_blank">
                    <i class="fa fa-link"></i> 实验代码
                </a>
            </div>
            
            <button class="btn btn-default pull-right download-pdf" data-toggle="tooltip" data-title="下载PDF" data-placement="bottom">
                <i class="fa fa-download no-margin"></i>
            </button>
            
            
            
        </div>
        <div class="report-header">
            
            
            <h3>"新手指南之玩转实验楼"实验报告</h3>
            
            <a class="lab-name" href="/courses/63">Hello World! </a>
        </div>
        <div class="note-editor">
            <form>
                
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
                <button id="mkeditor-report-pickfile" type="button" class="btn btn-default mkeditor-btn-img">
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
            <textarea name="text" class="text"
                min="0" max="0"
                placeholder="推荐使用 Markdown 语法，至少输入 5 个字"></textarea>
            <div class="help-block"></div>
        </div>
        <div class="tab-pane mkeditor-viewer markdown-body" id="mkeditor-viewer" role="tabpanel">
            <div></div>
        </div>
    </div>
</div>

                <br>
                
                <button type="button" class="btn btn-primary mkeditor-update" >
                    <i class="fa fa-refresh"></i> 更新
                </button>
                
                <button type="button" class="btn btn-default mkeditor-close" >
                    <i class="fa fa-close"></i> 关闭
                </button>
                <br>
                <br>
                <br>
                <br>
            </form>
        </div>
        <div class="report-detail markdown-body"></div>
    </div>
    <div class="report-like-weiboshare">
        
<div class="labreport-detail-like">
    
        
        <a href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/courses/reports/351349">
                <span class="report-like-btn report-like-btn-noauthen">
                    <i class="fa fa-thumbs-o-up"></i>
                    <span class="like-count">
                        2
                    </span>
                </span>
            </a>
        
    
    <span class="btn btn-default btn-weiboshare">
        <i class="fa fa-share-alt"></i>
    </span>
</div>

    </div>
    <div class="report-comment" id="ignore-pdf">
        <div class="comment-box">
            <div class="comment-form">
                
                <div class="comment-form-unlogin">
                    请
                    <a href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/courses/reports/351349"> 登录 </a>
                    后发表评论
                </div>
                
            </div>
            <div class="comment-title">最新评论</div>
            <div class="comment-list">
            </div>
            <div class="pagination-container"></div>
        </div>
    </div>
</div>

        </div>
        <div class="col-md-3 layout-side">
            
    






<!--
<div class="sidebox report-evaluate-box">
    <div class="sidebox-header report-evaluate-header">
        <h4 class="sidebox-title">评估等级</h4>
        <a href="/questions/1325" class="pull-right report-evaluate-link">
            <i class="fa fa-question-circle"></i>
        </a>
    </div>
    <div class="sidebox-body report-evaluate-body">
        
        <div class="level-A">
            <img src="/Home/img/labreport-evaluate-A.png">
            <div class="tri-top"></div>
            <div class="report-evaluate-text">本节实验过程很出色！为你点赞！</div>
            <div class="report-evaluate-update">更新时间： 16-12-27 09:48</div>
        </div>
        
    </div>
</div>
-->



    <div class="sidebox report-data">
        <div class="sidebox-header">
            <h4 class="sidebox-title">实验数据</h4>
        </div>
        <div class="sidebox-body">
            
            <p><span class="info-title">学习时间</span><span class="info-figure">14409&nbsp分钟</span></p>
            <p><span class="info-title">操作时间</span><span class="info-figure">483 &nbsp分钟</span></p>
            <p><span class="info-title">按键次数</span><span class="info-figure">1332&nbsp次</span></p>
            <p><span class="info-title">实验次数</span><span class="info-figure">246&nbsp次</span></p>
        </div>
    </div>
    <div class="sidebox report-recommend">
        <div class="sidebox-header">
            <h4 class="sidebox-title">相关报告</h4>
        </div>
        <div class="sidebox-body">
        
            <a class="related-report" href="/courses/reports/1255297" target="_blank">新手指南之玩转实验楼: Hello，ShiYanLou! 实验报告</a>
        
            <a class="related-report" href="/courses/reports/1255301" target="_blank">新手指南之玩转实验楼: Hello，ShiYanLou! 实验报告</a>
        
            <a class="related-report" href="/courses/reports/1255351" target="_blank">新手指南之玩转实验楼: Hello，ShiYanLou! 实验报告</a>
        
            <a class="related-report" href="/courses/reports/1255355" target="_blank">新手指南之玩转实验楼: Hello World！ 实验报告</a>
        
            <a class="related-report" href="/courses/reports/1253728" target="_blank">新手指南之玩转实验楼: Hello World！ 实验报告</a>
        
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
    

    
<div class="modal fade" id="lab-images-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="carousel slide" id="lab-images-carousel" data-intervar="false">
                    <ol class="carousel-indicators">
                        
                        <li data-target="#lab-images-carousel" data-slide-to="0"></li>
                        
                        <li data-target="#lab-images-carousel" data-slide-to="1"></li>
                        
                        <li data-target="#lab-images-carousel" data-slide-to="2"></li>
                        
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        
                        <div class="item">
                            <img src="https://dn-simplecloud.qbox.me/ab31a35adff89a0f2c92db3862d84fd3-wm" style="width:100%;">
                        </div>
                        
                        <div class="item">
                            <img src="https://dn-simplecloud.qbox.me/3057799871465ef6668c00205d881743-wm" style="width:100%;">
                        </div>
                        
                        <div class="item">
                            <img src="https://dn-simplecloud.qbox.me/66977460f8281e0532905eeaa57313fe-wm" style="width:100%;">
                        </div>
                        
                    </div>
                    <a class="left carousel-control" href="#lab-images-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="right carousel-control" href="#lab-images-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="delete-img">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除实验截图</h4>
            </div>
            <div class="modal-body">
                <p style="font-size:18px;">删除后无法恢复</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary delete-img-confirm">确定</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




	
		
			
		
	

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
                                <img class="verify-code" src="" source="https://www.shiyanlou.com/captcha.gif">
                            </div>
                            <div class="form-group remember-login">
                                <input name="remember" type="checkbox" value="y"> 下次自动登录
                                <a class="pull-right" href="../../reset_password/index.html">忘记密码？</a>
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
                                注册表示您已经同意我们的<a href="../../privacy/index.html" target="_blank">隐私条款</a>
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
    </script>

    
    
    <textarea id="published-content" style="display:none;">Hello World! (你好，世界!)

&#34;Hello, World&#34;，这是每一种计算机编程语言中最基本、最简单的程序，也是我们开始写的第一个程序，用来确定该语言的编译器、程序开发环境，以及运行环境是否已经安装妥当。

&#34;Hello World!&#34;程序，作为第一个编写的程序，现在已经成为一种珍贵的传统！

&#34;Hello World&#34;——&#34;你好，世界&#34;，为我们打开了新的世界的大门，在计算机的世界里，有着无数的精彩和传奇，也有无数的唏嘘和遗憾。我们又能在这个世界里运行出怎么样的故事？让我们开始吧 : )

Tips: 本节主要介绍计算机相关技术的基础概念，面向完全没有编程经验的用户。如果您已经学过一门编程语言或对IT技术有一定了解，可以选择跳过该实验，直接进入下一个实验-实验楼学习指南。

![](https://dn-simplecloud.qbox.me/ab31a35adff89a0f2c92db3862d84fd3-wm)
![](https://dn-simplecloud.qbox.me/3057799871465ef6668c00205d881743?watermark/1/image/aHR0cDovL3N5bC1zdGF0aWMucWluaXVkbi5jb20vaW1nL3dhdGVybWFyay5wbmc=/dissolve/60/gravity/SouthEast/dx/0/dy/10-wm)
![](https://dn-simplecloud.qbox.me/66977460f8281e0532905eeaa57313fe-wm)





























</textarea>
    
    <textarea id="draft-content" style="display:none;">Hello World! (你好，世界!)

&#34;Hello, World&#34;，这是每一种计算机编程语言中最基本、最简单的程序，也是我们开始写的第一个程序，用来确定该语言的编译器、程序开发环境，以及运行环境是否已经安装妥当。

&#34;Hello World!&#34;程序，作为第一个编写的程序，现在已经成为一种珍贵的传统！

&#34;Hello World&#34;——&#34;你好，世界&#34;，为我们打开了新的世界的大门，在计算机的世界里，有着无数的精彩和传奇，也有无数的唏嘘和遗憾。我们又能在这个世界里运行出怎么样的故事？让我们开始吧 : )

Tips: 本节主要介绍计算机相关技术的基础概念，面向完全没有编程经验的用户。如果您已经学过一门编程语言或对IT技术有一定了解，可以选择跳过该实验，直接进入下一个实验-实验楼学习指南。

![](https://dn-simplecloud.qbox.me/ab31a35adff89a0f2c92db3862d84fd3-wm)
![](https://dn-simplecloud.qbox.me/3057799871465ef6668c00205d881743?watermark/1/image/aHR0cDovL3N5bC1zdGF0aWMucWluaXVkbi5jb20vaW1nL3dhdGVybWFyay5wbmc=/dissolve/60/gravity/SouthEast/dx/0/dy/10-wm)
![](https://dn-simplecloud.qbox.me/66977460f8281e0532905eeaa57313fe-wm)





























</textarea>
<div id="jinja-data"
    data-userlab-id=""
    data-user-logined="false"
    data-login-url="/login?next=%2Fcourses%2Freports%2F351349"
    data-site-type="0"
    data-comment-post="/courses/reports/351349/comments"
    data-like-url="/courses/reports/351349/like"
    data-top-url="/courses/reports/351349/top"
    data-untop-url="/courses/reports/351349/untop"
    data-login-url="/login?next=%2Fcourses%2Freports%2F351349"
    data-qiniu-token-url="/api/qiniu/token"
    data-is-authenticated="false"
    data-userid=""
    data-vip-icon="/Home/img/vip-icon.png"
    data-vip-index="/vip"
    data-publish-report="/courses/reports/351349/publish"
    data-update-report="/courses/reports/351349"
    data-set-private="/courses/reports/351349/private"
    ></div>

<script src="/Home/app/dest/report/details.js?=2016121272249"></script>
@endsection