<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Lei Shi">
  <meta http-equiv="Cache-Control" content="o-transform">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="csrf-token" content="1483758872##fd2cac389b2b7c009a744bcaecaa41d71592cfe8">


        <title>@yield('title')</title>




    <meta content="实验楼是国内领先的IT技术实训平台，创新的实验驱动教学模式，以就业为导向，为IT相关专业的在校学生及从业者提供编程、运维、测试、云计算、大数据、数据库等全面的IT技术动手实践环境，提供Linux、Python、Java、C语言、Ruby、Android、IOS开发等热门课程。" name="description">
    <meta content="实验楼,IT培训,IT教育,编程,在线编程,Linux,Linux教程,Linux操作系统,Python,Python教程,Python基础教程,Java,Java编程,C语言,大数据,Node.js,Hadoop,PHP,Docker" name="keywords">

    <meta content="实验楼,琛石科技" name="author">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="/home/static/font-awesome//4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/home/static/highlight.js/9.8.0/monokai-sublime.min.css">
    <link rel="stylesheet" href="/home/app/css/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/home/app/css/libs/katex/0.6.0/katex.min.css">
    <link rel="stylesheet" href="/home/app/css/libs/videojs/5.11.7/video-js.min.css">

   
    <link rel="stylesheet" href="/home/app/css/dest/styles.css?=2016121272249">
    <link rel="stylesheet" href="/home/app/css/developer/developer.css">

 
    @section("link")

    @show
	<style>
		@font-face {
			font-family: "lantingxihei";
		}
        .header{
            background-color: #fff;
            height: 61px;
            border-bottom: 1px solid #ccc;
        }
        .header .navbar-nav>li>a:hover{
            color: #08bf91;
            background: none;
        }

        .nav .navbar-nav .dropdown>a:hover{
            color: #08bf91;
            background: none;
        }

        /* modal 模态框*/
        #invite-user .modal-body {
            overflow: hidden;
        }
		#invite-user .modal-body .form-label {
			margin-bottom: 16px;
			font-size:14px;
		}
		#invite-user .modal-body .form-invite {
			width: 80%;
			padding: 6px 12px;
			background-color: #eeeeee;
			border: 1px solid #cccccc;
			border-radius: 5px;
			float: left;
			margin-right: 10px;
		}
		#invite-user .modal-body .msg-modal-style {
			background-color: #7dd383;
			margin-top: 10px;
			padding: 6px 0;
			text-align: center;
			width: 100%;
		}
		#invite-user .modal-body .modal-flash {
			position: absolute;
			top: 53px;
			right: 74px;
			z-index: 999;
		}
		/* end modal */

        .en-footer {
            padding: 30px;
            text-align: center;
            font-size: 14px;
        }
        .q-types .label-default{
            background-color: #fff;
            display: inline-block;
            cursor: pointer;
            padding: 5px 8px;
            margin: 4px 4px 4px 0;
            border-radius: 2px;
            color: #769bba;
            font-size: 13px;
            font-weight: 300;
        }

        .p_type{
            display: inline-block;
            width: 100%;
            padding: .375rem 1.75rem .375rem .75rem;
            vertical-align: middle;
            line-height: 1.42857143;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            margin-top: 5px;

        }
        .question_page>.pagination>.active>span{

            background-color: #0c9;
            border-color: #0c9;
        }


    </style>
    <style scoped>
        .reg-btn{
                
            color: #fff;
            background-color: #11aa8c;
            border-color: #11aa8c;
            border-radius: 4px;
            box-shadow: 0 1px 10px rgba(0,0,0,.43);
        }
        
        .log-btn{

            border-radius: 4px;
        }

        .user_list{
            display: flex;
            align-items: center;
        }
        .user_list>div{
            margin-right:18px;
        }
        #m_detail1{
            width:13%;
            border: 1px solid #CCCCCC;
            padding: 10px 20px;
            position: absolute;
            top:70px;
            right:290px;
            background-color:#FFFFFF ;
            z-index: 1;
        }
        #m_detail1 .Btn{
            border-radius:40px;
            width:100%;
            margin-bottom:10px;
            border: 1px solid #CCCCCC;
            background: #FFFFFF;
        }
        #m_detail1 .Btn:hover{
            border: 1px solid red;
        }
        .media{
            margin-bottom: 10px;
        }
        .l_line{
            border-bottom:1px solid #CCCCCC;
            margin-bottom: 10px;
        }
        .c1{margin-bottom: 20px;}
    </style>

<style style="text/css">
.navbar-banner {
    margin-top: 50px;
    background: url("/home/img/homepage-bg.png");
    background-size: cover;
    backgtound-repeat: no-repeat;
}
</style>




</head>

<body>





<nav class="navbar navbar-default navbar-fixed-top header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                <span class="sr-only">实验楼</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="/home/img/shiyanlou_logo.svg">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="header-navbar-collapse">
            <ul class="nav navbar-nav">
                
                <li class="">
                    <a href="/courses">课程</a>
                </li>
               
                <li class="">
                    <a href="/paths">路径</a>
                </li>
                <li class="">
                    <a href="/question">讨论区</a>
                </li>
                <li class=" bootcamp new-nav logo-1111">
                    <a href="/bootcamp">训练营</a>

                </li>
                <li class=" new-nav logo-1111">
                    <a href="/vip">会员</a>

                </li>

            </ul>


            <div class="navbar-right">
            @if(session('aid'))
            <div class="user_list">
                    <div><a>我的课程</a></div>
                    <div><a><img src="/home/img/icon-reply.png"></a></div>
                    <div id="ac" >
                        <a><img src="/home/img/gravatar15.jpg" width="40%" style="border-radius:50%;margin:10px 0 10px 0;"></a>
                    </div>
                 </div>
                @else
                <button type="button" class="btn btn-default log-btn" data-toggle="modal" data-target="#myModal" style=" margin-top:6px">
                 登录
                </button>
                <button type="button" class="btn btn-success reg-btn" data-toggle="modal" data-target="#myModal1" style=" margin-top:6px">
                注册
                </button>
                @endif
            </div>


            <form class="navbar-form navbar-right" action="search" method="get" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" autocomplete="off" placeholder="搜索 课程/问答">
                </div>
            </form>
        </div>
    </div>
</nav>
 <div id="m_detail1">
          <div class="media">
              <div class="media-left media-middle">
                  <a href="#">
                      <img class="media-object" src="/home/img/gravatar15.jpg" style="border-radius:50%;" width="60px">
                  </a>
              </div>
              <div class="media-body">
                  <h4 class="media-heading">用户名</h4>
                  <p style="color:#CCCCCC;">有效学习时间<span>0<span>min</p>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6"><button class="btn btn-default Btn">我的主页</button></div>
              <div class="col-md-6"><button class="btn btn-default Btn">个人设置</button></div>
          </div>
          <div class="row">
              <div class="col-md-6"><button class="btn btn-default Btn">会员中心</button></div>
              <div class="col-md-6"><button class="btn btn-default Btn">我要投稿</button></div>
          </div>
          <div class="l_line"></div>
          <a href="/doLogin" style="float: right;"><button class="btn btn-default">退出登录</button></a>
      </div>
@section("content")

@show

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 clearfix footer-col">
                <img src="/home/img/logo_03.png">
                <div class="footer-slogan">动手做实验，轻松学编程</div>
                <div class="col-xs-2">
                    <div class="social-item footer-weixin-item">
                        <i class="fa fa-weixin"></i>
                        <div class="footer-weixin">
                            <img src="/home/img/footer-weixin.png">
                        </div>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="social-item footer-qq-item">
                        <i class="fa fa-qq"></i>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="social-item footer-weibo-item">
                        <a href="###" target="_blank">
                            <i class="fa fa-weibo"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">公司</div>
                <a href="/privacy" target="_blank">关于我们</a><br>
                <a href="/privacy" target="_blank">联系我们</a><br>
                <a href="http://www.simplecloud.cn/jobs.html" target="_blank">加入我们</a><br>
                <a href="https://blog.shiyanlou.com" target="_blank">技术博客</a><br>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">合作</div>
                <a href="/privacy" target="_blank">我要投稿</a><br>
                <a href="/labs" target="_blank">教师合作</a><br>
                <a href="/edu" target="_blank">高校合作</a><br>
                <a href="/privacy" target="_blank">友情链接</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">服务</div>
                <a href="/bootcamp" target="_blank">实战训练营</a><br>
                <a href="/vip" target="_blank">会员服务</a><br>
                <a href="/courses/reports" target="_blank">实验报告</a><br>
                <a href="/questions" target="_blank">常见问题</a><br>
                <a href="/privacy" target="_blank">隐私条款</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">学习路径</div>
                <a href="/path" target="_blank">Python学习路径</a><br>
                <a href="/path" target="_blank">Linux学习路径</a><br>
                <a href="/path" target="_blank">大数据学习路径</a><br>
                <a href="/path" target="_blank">Java学习路径</a><br>
                <a href="/path" target="_blank">PHP学习路径</a><br>
                <a href="/path", target="_blank">全部</a>
            </div>
        </div>
    </div>
    <div class="text-center copyright">
        <span>Copyright @2013-2016 实验楼在线教育</span>
        <span class="ver-line"> | </span>
        <a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备13019762号</a>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:60%">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">登录</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="/login" method="post">
            {{csrf_field()}}
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control" placeholder="请输入邮箱" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control" placeholder="请输入密码" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <div class="checkbox">
                <label>
                  <input type="checkbox">下次自动登录
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn" style="width: 100%;background-color: #31C78D; color: #FFFFFF;">进入实验室</button>
            </div>
          </div>
        </form>
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
                    <input type="text" class="form-control" placeholder="昵称" name="name" required>
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
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/raven.js/3.17.0/raven.js"></script>
</body>
</html>

<script>
      $(function () {
         $("#m_detail1").hide();

      $("#ac").on({
          mouseover : function(){
            $("#m_detail1").show();

          } ,
        });

      $("#m_detail1").mouseleave(function(){
        $("#m_detail1").hide();
      })
          /*$('#myModal').modal(options);
          $('#myModal1').modal(options);*/

    })

</script>
