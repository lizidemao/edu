@extends("/Home/layout/index")

@section('title', '实验楼 - 训练营')

@section("content")
	<div class="vip-header layout-no-margin-top" style="min-height:215px;">
    <h1 class="vip-header-title">加入实验楼会员，拥有自己的实验机</h1>
    <h4 class="vip-header-description">精品课程 + 环境保存 + 实验联网 + 会员客户端</h4>
</div>
<div class="vip-details">
    <div class="container">
        <div class="row vip-row hidden-xs">
            <div class="vip-item">
                <ul class="list-group">
                    <li class="list-group-item"><h4>&nbsp;</h4></li>
                    <li class="list-group-item">免费课程</li>
                    <li class="list-group-item">会员课程</li>
                    <li class="list-group-item">
                        <span style="border-bottom:1px dashed" data-toggle="tooltip" data-placement="bottom" title="会员可以保存实验环境，普通用户实验结束后环境删除">实验环境保存</span>
                    </li>
                    <li class="list-group-item">
                        <span style="border-bottom:1px dashed" data-toggle="tooltip" data-placement="bottom" title="会员环境可以连接互联网，普通用户环境仅连接实验楼内网">实验环境联网</span>
                    </li>
                    <li class="list-group-item"><a href="#vip-clients" title="" class="link-clients">会员客户端</a></li>
                    <li class="list-group-item">SSH直连</li>
                    <li class="list-group-item">WebIDE</li>
                    <li class="list-group-item">训练营优惠</li>
                    <li class="list-group-item">
                        <span style="border-bottom:1px dashed" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="在讨论区提问，可以收到专职助教答疑回复">会员课程答疑</span>
                    </li>
                    <li class="list-group-item" style="height:190px;">&nbsp;</li>
                </ul>
            </div>
            <div class="vip-item" >
                <ul class="list-group">
                    <li class="list-group-item"><h4 class="is-free-user">免费</h4></li>
                    <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item">&nbsp;</li>
                    <li class="list-group-item item-vip-footer" style="">
                        <strong  style="color:#DBDBDB;font-size:28px;display:block;">免费</strong>
                        <br>
                        
                            <a type="button" class="btn btn-all btn-smaller" href="#sign-modal" data-toggle="modal" data-sign="signup">注册</a>
                        
                    </li>
                  </ul>
              </div>
              <div class="vip-item">
                  <ul class="list-group">
                      <li class="list-group-item"><h4 class="is-vip-user">会员 <img src="/Home/img/icon-vip.png" alt=""></h4></li>
                      <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li> 
                      <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li> 
                      <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li> 
                      <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li> 
                      <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li> 
                      <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li> 
                      <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li> 
                      <li class="list-group-item rebate-number"><span class="number-eight"><span style="color: #FC9F0E;font-size: 23px">8</span> 折</span></li>
                      <li class="list-group-item">&nbsp;</li>
                      <li class="list-group-item item-vip-footer" style="height:195px">
                        <strong class="vip-price" style="font-size: 15px;display:block;margin-bottom: -10px"><span style="font-size:40px;color:#FC9F0E">￥299</span> / 年</strong>
                        <del style="font-size: 12px;color: #999;">原价 599元</del>
                        <br>
                        
                        <a type="button" class="btn btn-bigger btn-all" href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/vip">加入</a>
                        
                        <p style=""> 实验豆可抵扣现金</p>
                      </li>
                   </ul> 
                </div>
                <div class="vip-item">
                    <ul class="list-group">
                        <li class="list-group-item"><h4 class="is-adv-vip">高级会员 <img src="/Home/img/icon-vip-advance.png" alt=""></h4></li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item rebate-number" style="padding-bottom: 6px;">
                            <span class="number-five"><span style="color: #CC584C;font-size: 23px;">5</span> 折</span>
                        </li>
                        <li class="list-group-item"><img src="/Home/img/vip-service-status.png" alt=""></li>
                        <li class="list-group-item item-vip-footer" style="">
                            <strong class="vip-price" style="font-size: 15px;display:block;margin-bottom: -7px"><span style="font-size:28px;color:#CC584C">￥599</span> / 年</strong>
                            <del style="font-size: 12px;color: #999;">原价 1024元</del>
                            <br>
                            
                            <a type="button" class="btn btn-bigger btn-all" href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/vip">加入</a>
                            
                            <p  style=""> 实验豆可抵扣现金</p>
                        </li>
                    <ul>
                </div>
        </div>
        
        <div class="row visible-xs">
            <div class="col-md-4">
                <div class="vip-details-item">
                    <div class="vip-details-header is-free-user">
                        <h4>免费</h4>
                    </div>
                    <div class="vip-details-body">
                        <div class="vip-details-content">
                            <div>免费课程 <span class="glyphicon glyphicon-ok"></span></div>
                            <div>实验结束后环境删除 <span class="glyphicon glyphicon-ok"></span></div>
                            <div>连接内网 <span class="glyphicon glyphicon-ok"></span></div>
                            <div class="disabled">会员课程 <span class="glyphicon glyphicon-remove"></span></div>
                            <div class="disabled">可保存实验环境 <span class="glyphicon glyphicon-remove"></span></div>
                            <div class="disabled">连接互联网 <span class="glyphicon glyphicon-remove"></span></div>
                            <div class="disabled">会员客户端 <span class="glyphicon glyphicon-remove"></span></div>
                            <div></div>
                        </div>
                        <div class="vip-details-price is-free-user" style="margin-top: 10px;margin-bottom:21px">
                            <strong>免费</strong>
                        </div>
                    </div>
                    <div class="vip-details-footer is-free-user" style="padding:28px 0 58px 0;">
                        
                            <a class="btn btn-primary" href="#sign-modal" data-toggle="modal" data-sign="signup" >立即注册</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vip-details-item">
                    <div class="vip-details-header">
                        <h4>会员 <img class="icon-vip" src="/Home/img/icon-vip.png" alt=""></h4>
                    </div>
                    <div class="vip-details-body">
                        <div class="vip-details-content">
                            <div>160+ 会员课程 <span class="glyphicon glyphicon-ok"></span></div>
                            <div>可保存实验环境 <span class="glyphicon glyphicon-ok"></span></div>
                            <div>连接互联网 <span class="glyphicon glyphicon-ok"></span></div>
                            <div><a href="#vip-clients">会员客户端</a> <span class="glyphicon glyphicon-ok"></span></div>
                            <div>SSH 直连 + WebIDE <span class="glyphicon glyphicon-ok"></span></div>
                            <div style="padding:10px 20px">训练营<span style="color: red;font-weight:bold;font-size: 20px"> 8 </span>折优惠 <span class="glyphicon glyphicon-ok"></span></div>
                            <div class="disabled">讨论区助教答疑 <span class="glyphicon glyphicon-remove"></span></div>
                            <div></div>
                        </div>
                        <div class="vip-details-price">
                            <strong>￥299</strong>
                            <span>/ 年</span>
                            <div><del>原价 599元</del></div>
                        </div>
                    </div>
                    <div class="vip-details-footer">
                        
                        <a class="btn btn-warning" data-level="12" href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/vip">立即加入</a>
                        
                        <div>实验豆可抵现金</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vip-details-item">
                    <div class="vip-details-header">
                        <h4 style="color: #1A93B4">高级会员 <img class="icon-vip" src="/Home/img/icon-vip-advance.png" alt=""></h4>
                    </div>
                    <div class="vip-details-body">
                        <div class="vip-details-content">
                            <div>160+ 会员课程 <span class="glyphicon glyphicon-ok"></span></div>
                            <div>可保存实验环境 <span class="glyphicon glyphicon-ok"></span></div>
                            <div>连接互联网 <span class="glyphicon glyphicon-ok"></span></div>
                            <div><a href="#vip-clients">会员客户端</a> <span class="glyphicon glyphicon-ok"></span></div>
                            <div>SSH 直连 + WebIDE <span class="glyphicon glyphicon-ok"></span></div>
                            <div style="padding:10px 20px">训练营<span style="color: red;font-weight:bold;font-size: 20px "> 5 </span>折优惠 <span class="glyphicon glyphicon-ok"></span></div>
                            <div>讨论区助教答疑 <span class="glyphicon glyphicon-ok"></span></div>
                            <div></div>
                        </div>
                        <div class="vip-details-price">
                            <strong>￥599</strong>
                            <span>/ 年</span>
                            <div><del>原价 1099元</del></div>
                        </div>
                    </div>
                    <div class="vip-details-footer">
                        
                        <a class="btn btn-warning" data-level="12" href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/vip">立即加入</a>
                        
                        <div>实验豆可抵现金</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="vip-hots">
    <div class="container">
        <div class="vip-hots-header">
            <h4>已有 <span>350,000</span> 人在实验楼完成了 <span>6,000,000+</span> 次实验</h4>
        </div>
        <div class="row vip-hots-body">
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="/Home/img/vip-allcourses.png">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">课程畅学</h4>
                        <p>会员专属精品课程，每周不断更新，给你最快的成长</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="/Home/img/vip-24.png">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">随时实践</h4>
                        <p>独享实验机，长期保存，在线开发代码，24小时随时继续</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="/Home/img/vip-internet.png">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">优质体验</h4>
                        <p>环境联网，会员客户端+SSH直连+WebIDE，更优实验体验</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vip-clients" id="vip-clients">
    <div class="container">
        <div class="vip-clients-header">
            <h4>即开即用的会员客户端，随时随地远程访问实验桌面</h4>
        </div>
        <div class="row vip-clients-body">
            <div class="col-md-4">
                <div class="vip-clients-windows vip-clients-logo"></div>
                <div class="vip-clients-title">Windows - Windows 7 及以上</div>
                <a href="http://labfile.oss-cn-hangzhou.aliyuncs.com/shiyanlou_desktop/shiyanlou-desktop-v1.0.3-win64.exe">立即下载（64位）</a><br/><a href="http://labfile.oss-cn-hangzhou.aliyuncs.com/shiyanlou_desktop/shiyanlou-desktop-v1.0.3-win32.exe">立即下载（32位）</a>
                <div class="text-danger" style="font-size:14px;">（安装过程中如果遇到 360 的警告可以忽视）</div>
            </div>
            <div class="col-md-4">
                <div class="vip-clients-mac vip-clients-logo"></div>
                <div class="vip-clients-title">MacOS - MacOS 10.11 及以上 </div>
                <a href="http://labfile.oss-cn-hangzhou.aliyuncs.com/shiyanlou_desktop/shiyanlou-desktop-v1.0.3-macos.dmg">立即下载</a>
            </div>
            <div class="col-md-4">
                <div class="vip-clients-linux vip-clients-logo"></div>
                <div class="vip-clients-title">Linux - Ubuntu 14.04 及以上</div>
                <a href="http://labfile.oss-cn-hangzhou.aliyuncs.com/shiyanlou_desktop/shiyanlou-desktop-v1.0.3-linux64.deb">立即下载（64位）</a><br/><a href="http://labfile.oss-cn-hangzhou.aliyuncs.com/shiyanlou_desktop/shiyanlou-desktop-v1.0.3-linux32.deb">立即下载（32位）</a>
            </div>
            <div class="video">
                <video controls="controls">
                    <source src="http://labfile.oss-cn-hangzhou.aliyuncs.com/shiyanlou_desktop/desktop.ogg" type="video/ogg">
                    <source src="http://labfile.oss-cn-hangzhou.aliyuncs.com/shiyanlou_desktop/desktop.mp4" type="video/mp4">
                    你的浏览器不支持播放视频
                </video>
                <div class="video-play">
                    <i class="fa fa-play-circle-o fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vip-faq">
    <div class="container">
        <div class="vip-faq-header">
            <img src="/Home/img/vip-faq.png">
            FAQ
            <span></span>
        </div>
        <div class="vip-faq-body">
            <h4>会员课程和免费课程有什么区别？</h4>
            <div>1. 会员课程多为项目课，免费课程多为基础课。</div>
            <div>2. 会员课程主要由实验楼团队制作及维护，免费课程由实验楼及合作伙伴共同维护。</div>
            <div>3. 会员可联网并保存环境，会员课程内容不受网络及时间限制。</div>
            <div>4. 会员课程更新频率更高，难度会更大。</div>
        </div>
        <div class="vip-faq-body">
            <h4>会员客户端是什么？</h4>
            <div>实验楼会员专属的桌面端软件，即开即用，自动连接云端实验桌面，特点:</div>
            <div>1. 易用：即开即用，随时远程访问实验桌面</div>
            <div>2. 安全：数据云端保存，HTTPS加密传输</div>
            <div>3. 跨平台：支持Windows，Mac OSX 及 Linux平台</div>
            <div>4. 更多功能：实验工具中提供查看文档及一键SSH连接实验环境等</div>
        </div>
        <div class="vip-faq-body">
            <h4>什么情况下需要保存实验环境？</h4>
            <div>1. 当时间不多或实验耗时较长，无法连续完成一个实验时。</div>
            <div>2. 当实验遇到问题但无法及时解决时。</div>
            <div>3. 当需要一台在线开发环境时。</div>
        </div>
        <div class="vip-faq-body">
            <h4>环境联网有什么好处？</h4>
            <div>1. 实验中随时连接站外资源，例如Github等。</div>
            <div>2. 支持大量联网课程，例如微信微博开发及SaaS开发。</div>
        </div>
        <div class="vip-faq-body">
            <h4>成功购买会员服务后，是否可以退款？</h4>
            <div>支付购买成功后，暂不接受退款申请，请详细查看会员服务内容后进行购买，如有任何不清楚的地方欢迎在 <a href="/questions/">讨论区</a> 发帖询问。</div>
        </div>
        <div class="vip-faq-body">
            <h4>高级会员与普通会员有什么不同？</h4>
            <div>1. 实验楼提供专职助教，在讨论区为高级会员提供答疑服务，回答学习会员课程过程中遇到的问题。</div>
            <div>2. 购买训练营享受5折优惠。</div>
        </div>
        <div class="vip-faq-footer">
            <a href="/questions/1440">更多疑问，查看这里></a>
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
    

    
<div class="modal fade" id="vip-modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">加入会员</h4>
                <div class="alert-message">
                    <div class="alert alert-danger"></div>
                </div>
            </div>
            <div class="modal-body">
                <div class="vip-modal-item ">
                    <div class="vip-modal-item-header">手机号</div>
                    <div class="vip-modal-item-body">
                        <div class="input-group">
                            <input type="text" class="form-control phone-number"
                                value=""
                                >
                            <span class="input-group-btn">
                                <button class="btn btn-info get-phone-code "
                                    data-url="/user/sms/code">获取验证码</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="vip-modal-item vip-phone-code" >
                    <div class="vip-modal-item-header">验证码</div>
                    <div class="vip-modal-item-body">
                        <input type="text" class="form-control phone-code">
                        <a class="pull-right text-success" href="/questions/2540" target="_blank">收不到验证码？</a>
                    </div>
                </div>
                
                <div class="vip-modal-item">
                    <div class="vip-modal-item-header">使用实验豆<span>（最高使用100个实验豆）</span></div>
                    <div class="vip-modal-item-body">
                        <div class="consume-beans">
                            <input type="checkbox">
                            <span>使用</span>
                            <input class="form-control" type="text" disabled value="0">
                            <span>个实验豆抵扣</span>
                            <span class="beans">0</span>
                            <span>元</span>
                            <div class="left-beans">
                                <div>您的实验豆还剩 <strong>0</strong> 个</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="vip-modal-item">
                    <div class="vip-modal-item-header">支付方式</div>
                    <div class="vip-modal-item-body">
                        <div class="pay-method pay-method-ali active" data-pay="ALI_WEB">
                        </div>
                        <div class="pay-method pay-method-wx" data-pay="WX_NATIVE">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body vip-modal-qrcode" style="display:none;">
                <div class="vip-wx-price">付款：<span></span></div>
                <div class="vip-wx-qrcode"></div>
                <a class="vip-wx-method" href="javascript:;">更换支付方式</a>
            </div>
            <div class="modal-footer">
                <div class="pull-left real-price">
                    <div>
			<div style="float:left"><span>付款：</span><strong>￥</strong><strong class="last-price">299</strong></div>
			<br class="__web-inspector-hide-shortcut__">
                        
                   </div>
	

                </div>
                <div class="pull-right pay-btn">
                    <a class="btn btn-warning" data-url="/purchase/member/pay">确认购买</a>
                    <input type="checkbox" checked>
                    <span>同意<a href="/terms" target="_blank">会员服务条款</a></span>
                </div>
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
    data-query-bill="/purchase/bill/query"
    data-need-phone-code="true"
    data-is-member-discount-enabled="false"
    data-member-price="299"
    data-get-member-price="/purchase/member/price"
    ></div>
<script src="/Home/app/dest/member/index.js?=2016121272249"></script>
@endsection