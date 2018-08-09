@extends("/Home/layout/index")

@section('title', '开发者 - 实验楼')

@section('content')
	<div class="org-header">
    <h2>学习最好用的开发者服务与工具</h2>
    <p>不用重复造轮子，成为最高效的互联网开发者</p>
</div>
<div class="org-body">
    <div class="container">
        <div class="row org-body-desc">
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="/Home/img/org-kaopu.png">
                    </div>
                    <div class="media-body">
                        最靠谱的<br>服务与工具
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="/Home/img/org-jingdian.png">
                    </div>
                    <div class="media-body">
                        最经典的<br>实战项目
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="/Home/img/org-gaoxiao.png">
                    </div>
                    <div class="media-body">
                        最高效的<br>实验学习
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="org-body-courses">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <a class="media" href="../courses/show.html" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1470893356136.png">
                        </div>
                        <div class="media-body">
                            <p>七牛云存储</p>
                            <h4>结合七牛搭建个人相册</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="../courses/show.html" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1470893366264.png">
                        </div>
                        <div class="media-body">
                            <p>高德地图</p>
                            <h4>高德API+Python解决租房问题</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="../courses/show.html" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1470893373975.png">
                        </div>
                        <div class="media-body">
                            <p>微信公众平台</p>
                            <h4>基于 Flask 及爬虫实现微信娱乐机器人</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/609" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1471396005610.png">
                        </div>
                        <div class="media-body">
                            <p>LeanCloud</p>
                            <h4>基于 LeanCloud 的短信验证</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/622" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1471831989320.png">
                        </div>
                        <div class="media-body">
                            <p>SendCloud邮件服务</p>
                            <h4>基于 SendCloud 的邮箱验证</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/624" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1471832001504.png">
                        </div>
                        <div class="media-body">
                            <p>Github代码托管</p>
                            <h4>在Github Pages上部署自己的简历</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/626" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1472537393017.png">
                        </div>
                        <div class="media-body">
                            <p>CIA闪验</p>
                            <h4>基于信令验证技术的身份验证功能</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/627" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1472537414178.png">
                        </div>
                        <div class="media-body">
                            <p>图灵机器人</p>
                            <h4>基于图灵机器人实现QQ群聊机器人</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/643" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1476005664662.png">
                        </div>
                        <div class="media-body">
                            <p>环信即时通讯云</p>
                            <h4>基于环信 REST API 的服务端集成示例</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/642" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1476006471999.png">
                        </div>
                        <div class="media-body">
                            <p>玻森中文语义开放平台</p>
                            <h4>基于 BosonNLP 实现自然语言交互的火车票查询</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/629" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1476006346021.png">
                        </div>
                        <div class="media-body">
                            <p>阿里云</p>
                            <h4>基于阿里云的 ECS 部署 Ghost 博客</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/653" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1476094176715.png">
                        </div>
                        <div class="media-body">
                            <p>腾讯文智中文语义平台</p>
                            <h4>基于腾讯文智的情感分析 </h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/665" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1476173256875.png">
                        </div>
                        <div class="media-body">
                            <p>GitBook</p>
                            <h4>基于 Gitbook 制作电子书</h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="media" href="/courses/648" target="_blank">
                        <div class="media-left">
                            <img class="media-object" src="/Home/img/1476237133360.png">
                        </div>
                        <div class="media-body">
                            <p>luosimao</p>
                            <h4>基于 Luosimao 的人机验证服务</h4>
                        </div>
                    </a>
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

    
<script src="/Home/app/dest/base/index.js?=2016121272249"></script>
<script>
$('.org-body-courses .media h4').each(function() {
    var h = $(this).height();
    if (h > 25) {
        $(this).css({
            width: $(this).width(),
            'white-space': 'nowrap',
            'text-overflow': 'ellipsis',
            overflow: 'hidden'
        });
    }
});
</script>
@endsection