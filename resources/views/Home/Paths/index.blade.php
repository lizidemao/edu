@extends("/Home/layout/index")

@section('title', '学习路径 - 实验楼')
<!-- 替换区块占位的sidebar内容 -->

@section('link')
    <link rel="stylesheet" href="/home/app/css/dest/paths.css">


@endsection

@section('content')


    <div class="content-box">


        <div class="learn-path-banner"></div>

        <div class="container">




            <div class="row">
                <div class="col-md-12 layout-body">

                    <div class="learn-path-list" style="margin-bottom:40px;">


                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/show">
                                <img src="/home/img/1487741005890.png">
                                <div class="learn-path-name">新手入门</div>
                                <div class="learn-path-courses">
                                    6门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/python">
                                <img src="/home/img/1487741028787.png">
                                <div class="learn-path-name">Python研发工程师</div>
                                <div class="learn-path-courses">
                                    88门课程
                                </div>

                                <div class="learn-path-hot">
                                    <img src="https://static.shiyanlou.com/img/path_hot.png" alt="">
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/cpp">
                                <img src="/home/img/1487741048998.png">
                                <div class="learn-path-name">C++ 研发工程师</div>
                                <div class="learn-path-courses">
                                    29门课程
                                </div>

                                <div class="learn-path-hot">
                                    <img src="https://static.shiyanlou.com/img/path_hot.png" alt="">
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/bigdata">
                                <img src="/home/img/1487741070013.png">
                                <div class="learn-path-name">大数据工程师</div>
                                <div class="learn-path-courses">
                                    44门课程
                                </div>

                                <div class="learn-path-hot">
                                    <img src="https://static.shiyanlou.com/img/path_hot.png" alt="">
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/linuxsys">
                                <img src="/home/img/1487741143862.png">
                                <div class="learn-path-name">Linux运维工程师</div>
                                <div class="learn-path-courses">
                                    31门课程
                                </div>

                                <div class="learn-path-hot">
                                    <img src="https://static.shiyanlou.com/img/path_hot.png" alt="">
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/java">
                                <img src="/home/img/1487741175055.png">
                                <div class="learn-path-name">Java研发工程师</div>
                                <div class="learn-path-courses">
                                    27门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/php">
                                <img src="/home/img/1487741188918.png">
                                <div class="learn-path-name">PHP研发工程师</div>
                                <div class="learn-path-courses">
                                    34门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/ml">
                                <img src="/home/img/1501840618053.png">
                                <div class="learn-path-name">机器学习工程师</div>
                                <div class="learn-path-courses">
                                    31门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/sdn">
                                <img src="/home/img/1501839495188.png">
                                <div class="learn-path-name">SDN网络工程师</div>
                                <div class="learn-path-courses">
                                    7门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/r">
                                <img src="/home/img/1501837346458.png">
                                <div class="learn-path-name">R数据分析师</div>
                                <div class="learn-path-courses">
                                    13门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/web">
                                <img src="/home/img/1487741210305.png">
                                <div class="learn-path-name">Web前端工程师</div>
                                <div class="learn-path-courses">
                                    28门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/linuxdev">
                                <img src="/home/img/1487741227106.png">
                                <div class="learn-path-name">Linux研发工程师</div>
                                <div class="learn-path-courses">
                                    31门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/nodejs">
                                <img src="/home/img/1487738611078.png">
                                <div class="learn-path-name">NodeJS研发工程师</div>
                                <div class="learn-path-courses">
                                    10门课程
                                </div>

                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a class="learn-path-item" href="/paths/mongodb">
                                <img src="/home/img/1487741270557.png">
                                <div class="learn-path-name">MongoDB工程师</div>
                                <div class="learn-path-courses">
                                    5门课程
                                </div>

                            </a>
                        </div>


                    </div>
                    <div id="trylab-details-toolbar"
                         data-member-img = "https://static.shiyanlou.com/img/lab_index/icon_VIP.png"
                         data-wechat-img = "https://static.shiyanlou.com/img/lab_index/icon_WeChat.png"
                         data-wechat-hover = "https://static.shiyanlou.com/img/lab_index/icon_WeChat_hover.png"
                         data-go-top = "https://static.shiyanlou.com/img/lab_index/icon_Top.png"
                         data-go-top-hover = "https://static.shiyanlou.com/img/lab_index/icon_Top_hover.png"
                         data-qr-code = "https://static.shiyanlou.com/img/lab_index/shiyanlouQR_Code.png"
                         data-member-index = "/vip"
                         data-mini-img="https://static.shiyanlou.com/img/lab_index/icon_mini_programs.png"
                         data-mini-hover="https://static.shiyanlou.com/img/lab_index/icon_mini_programs_hover.png"
                         data-mini-code="https://static.shiyanlou.com/img/lab_index/mini_programs_code.png"
                    ></div>

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


    <div class="new-loading new-loading-modal" id="new-loading-modal">
        <div class="loading-wrapper">
            <p class="loading-icon-lion">
                <img src="https://static.shiyanlou.com/img/console/icon_loading.png" alt="">
            </p>
            <div class="progress">
                <div class="progress-bar load-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>
            <p class="loading-txt">
                加载中，精彩就在后面...
            </p>
            <p class="progress-reload">
                <a href="javascript:;" type="button" class="btn-progress-reload" title="">卡住了？点击重试</a>
            </p>
        </div>
    </div>











  


    <div id="base-data" data-flash="false" data-is-login=false data-is-jwt=true data-socket-url="wss://comet.shiyanlou.com" data-msg-user="" data-msg-system="" data-invite-code=""
    ></div>

  




@endsection