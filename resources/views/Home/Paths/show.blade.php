@extends("/Home/layout/index")

@section('title', '新手入门 - 学习路径 - 实验楼')

<!-- 替换区块占位的sidebar内容 -->
@section('content')

	<div class="container layout layout-margin-top">
    
<ol class="breadcrumb">
    <li><a href="/paths/">学习路径</a></li>
    <li class="active"><a href="/paths/newhand">新手入门</a></li>
</ol>

    <div class="row">
        <div class="col-md-9 layout-body" style="margin-right: 18px">
            
    <div class="content" style="padding:0px">
        <div class="path-description" style="margin:0px">
            <div class="path-desc-top clearfix" style="background: url('/home/img/1471513740139.png') no-repeat;background-size: cover;">
                <div class="name-total-box clearfix">
                    <div class="col-md-6 col-sm-6 col-md-offset-1 path-name">
                        <h4>新手入门</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 col-md-offset-1 path-total-courses">
                        <span class="total-courses-box">课程 <span class="num">6</span></span>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 path-desc-text">新手入门路径帮助对 IT 技术感兴趣的新手0基础入门计算机编程。本路径通过新手入门、Linux 及 Vim课程熟悉实验楼的实践学习环境，再以 C 语言和一个简单的项目引导你一步步进入计算机技术的殿堂。</div>
            </div>
            <div class="path-desc-btm" >
                <div class="col-sm-12 col-md-4 clearfix learn-time-div">
                    <div class="col-md-12 text-left need-learn-time">预计需要 <span class="num">30</span> 小时学习</div>
                </div>
                <div class="col-sm-12 col-md-8  clearfix text-right" style="padding-top:0px">
                    <div class="col-xs-12">
                        
                        <a class="btn btn-path-operation btn-join-path" data-sign="signin" href="#sign-modal" data-toggle="modal">加入路径</a>
                        
                        <p style="font-size:10px;margin-top:5px">加入获得路径课程更新提醒</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#path-details" aria-controls="path-details" role="tab" data-toggle="tab">路径详情</a>
            </li>
            <li role="presentation">
            <a href="#path-comments" aria-controls="path-comments" role="tab" data-stat="path_comments" data-toggle="tab">路径评论(<span class="comments-count">0</span>)</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane path-details active" id="path-details">
                <div class="details-box">    
                    <a href="/courses/63" class="btn start-btn">开始学习</a>
                    
                        <div class="clearfix text-center path-title-box">
                            <span class="line hidden-xs"></span>
                            <span>阶段1：基础知识</span>
                            <span class="line hidden-xs"></span>
                        </div>
                        <div class="row">
                        
                        


<div class="col-md-4 col-sm-6  course">
    <a class="course-box" href="/courses/63">
        <div class="sign-box">
            
            
            
            <i class="fa fa-star-o course-follow pull-right"
                data-follow-url="/courses/63/follow"
                data-unfollow-url="/courses/63/unfollow"  style="display:none"  ></i>
            
        </div>
        <div class="course-img">
            
            <img alt="新手指南之玩转实验楼" src="https://dn-simplecloud.shiyanlou.com/ncn63.jpg">
            
        </div>
        
        <div class="course-body">
            <span class="course-title" data-toggle="tooltip" data-placement="bottom" title="新手指南之玩转实验楼">新手指南之玩转实验楼</span>
        </div>
        <div class="course-footer">
			<span class="course-per-num pull-left">
                <i class="fa fa-users"></i>
                
                58061
                
			</span>
            
                
            
        </div>
    </a>
</div>

                        
                        


<div class="col-md-4 col-sm-6  course">
    <a class="course-box" href="/courses/1">
        <div class="sign-box">
            
            
            
            <i class="fa fa-star-o course-follow pull-right"
                data-follow-url="/courses/1/follow"
                data-unfollow-url="/courses/1/unfollow"  style="display:none"  ></i>
            
        </div>
        <div class="course-img">
            
            <img alt="Linux 基础入门（新版）" src="https://dn-simplecloud.shiyanlou.com/ncn1.jpg">
            
        </div>
        
        <div class="course-body">
            <span class="course-title" data-toggle="tooltip" data-placement="bottom" title="Linux 基础入门（新版）">Linux 基础入门（新版）</span>
        </div>
        <div class="course-footer">
			<span class="course-per-num pull-left">
                <i class="fa fa-users"></i>
                
                85244
                
			</span>
            
                
            
        </div>
    </a>
</div>

                        
                        


<div class="col-md-4 col-sm-6  course">
    <a class="course-box" href="/courses/2">
        <div class="sign-box">
            
            
            
            <i class="fa fa-star-o course-follow pull-right"
                data-follow-url="/courses/2/follow"
                data-unfollow-url="/courses/2/unfollow"  style="display:none"  ></i>
            
        </div>
        <div class="course-img">
            
            <img alt="Vim编辑器" src="https://dn-simplecloud.shiyanlou.com/ncn2.jpg">
            
        </div>
        
        <div class="course-body">
            <span class="course-title" data-toggle="tooltip" data-placement="bottom" title="Vim编辑器">Vim编辑器</span>
        </div>
        <div class="course-footer">
			<span class="course-per-num pull-left">
                <i class="fa fa-users"></i>
                
                26839
                
			</span>
            
                
            
        </div>
    </a>
</div>

                        
                        </div>
                    
                        <div class="clearfix text-center path-title-box">
                            <span class="line hidden-xs"></span>
                            <span>阶段2：编程语言</span>
                            <span class="line hidden-xs"></span>
                        </div>
                        <div class="row">
                        
                        


<div class="col-md-4 col-sm-6  course">
    <a class="course-box" href="/courses/20">
        <div class="sign-box">
            
            
            
            <i class="fa fa-star-o course-follow pull-right"
                data-follow-url="/courses/20/follow"
                data-unfollow-url="/courses/20/unfollow"  style="display:none"  ></i>
            
        </div>
        <div class="course-img">
            
            <img alt="数据结构(新版)" src="https://dn-simplecloud.shiyanlou.com/ncn20.jpg">
            
        </div>
        
        <div class="course-body">
            <span class="course-title" data-toggle="tooltip" data-placement="bottom" title="数据结构(新版)">数据结构(新版)</span>
        </div>
        <div class="course-footer">
			<span class="course-per-num pull-left">
                <i class="fa fa-users"></i>
                
                8565
                
			</span>
            
                
            
        </div>
    </a>
</div>

                        
                        


<div class="col-md-4 col-sm-6  course">
    <a class="course-box" href="/courses/57">
        <div class="sign-box">
            
            
            
            <i class="fa fa-star-o course-follow pull-right"
                data-follow-url="/courses/57/follow"
                data-unfollow-url="/courses/57/unfollow"  style="display:none"  ></i>
            
        </div>
        <div class="course-img">
            
            <img alt="C语言入门教程" src="https://dn-simplecloud.shiyanlou.com/ncn57.jpg">
            
        </div>
        
        <div class="course-body">
            <span class="course-title" data-toggle="tooltip" data-placement="bottom" title="C语言入门教程">C语言入门教程</span>
        </div>
        <div class="course-footer">
			<span class="course-per-num pull-left">
                <i class="fa fa-users"></i>
                
                21538
                
			</span>
            
                
            
        </div>
    </a>
</div>

                        
                        </div>
                    
                        <div class="clearfix text-center path-title-box">
                            <span class="line hidden-xs"></span>
                            <span>阶段3：入门项目</span>
                            <span class="line hidden-xs"></span>
                        </div>
                        <div class="row">
                        
                        


<div class="col-md-4 col-sm-6  course">
    <a class="course-box" href="/courses/75">
        <div class="sign-box">
            
            
            
            <i class="fa fa-star-o course-follow pull-right"
                data-follow-url="/courses/75/follow"
                data-unfollow-url="/courses/75/unfollow"  style="display:none"  ></i>
            
        </div>
        <div class="course-img">
            
            <img alt="C语言制作简单计算器" src="https://dn-simplecloud.shiyanlou.com/ncn75.jpg">
            
        </div>
        
        <div class="course-body">
            <span class="course-title" data-toggle="tooltip" data-placement="bottom" title="C语言制作简单计算器">C语言制作简单计算器</span>
        </div>
        <div class="course-footer">
			<span class="course-per-num pull-left">
                <i class="fa fa-users"></i>
                
                5504
                
			</span>
            
                
            
        </div>
    </a>
</div>

                        
                        </div>
                    
                    <div class="btn end-pin">完成学习</div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane path-comment" id="path-comments">
              <div class="comment-box">
                    <div class="comment-form">
                        
                        <div class="comment-form-unlogin">                                
                            请
                            <a href="#sign-modal" data-toggle="modal" data-sign="signin"> 登录 </a>
                            后发表评论
                        </div>
                        
                    </div>
                    <div class="comment-title">最新评论</div>
                    <div class="comment-list"></div>
                    <div class="pagination-container"></div>
              </div>
            </div>
        </div>
    </div>
   
        </div>
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

    
 <div id="jinja-data" 
        
        data-user-id="0"
        data-user-in-path= "false"
        
        data-join-path-url="/jobs/9/join" 
        data-leave-path-url ="/jobs/9/leave"
        data-path-comment-url="/jobs/9/comment"
        data-user-logined="false"
></div>
<script src="/Home/app/dest/path/path.js?=2016121272249"></script>
            

@endsection