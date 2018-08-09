@extends("/Home/layout/index")

@section('title', '讨论区 - 实验楼')
<!-- 替换区块占位的sidebar内容 -->
@section('content')

<div class="container layout layout-margin-top">
    
   <div class="content">
    <div class="row">
        <div class="modal-header">

            <h4 class="modal-title">发帖</h4>
        </div>
        <div class="col-md-12">
        <div class="modal-body words-ctrl">
            <form class="form-horizontal" method="post" action="{{route("p_save")}}">
                {{csrf_field()}}

                <input name="_csrf_token" type=hidden value="1483789088##bbf83c51243ab12daa94911c8865a65bdc66c4d8">
                <div class="form-group">
                    <label class="col-md-1 control-label">标题</label>
                    <div class="col-md-11">
                        <input type="text" name="title" min="5" max="100" class="form-control" placeholder="至少输入5个字" value="">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">描述</label>
                    <div class="col-md-11">



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
                                    <textarea name="body" class="content"
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

                <div class="form-group">
                    <label class="col-md-1 control-label">板块</label>
                    <div class="col-md-2">


                        <select class="custom-select mt-3 p_type" name="type_id">

                            @forelse($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @empty
                                <span class="label label-default" value="course_error">您还没添加栏目！！</span>
                            @endforelse
                        </select>

                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="submit-question btn btn-primary" href="/vip" target="_blank" style="background:#FFFFFF;color:#00CC99;border:none;float:left;padding-left:0;"><img src="/home/img/senior-vip-icon.png" alt=""> 加入高级会员获得助教答疑</a>
                    <button type="reset" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="submit-question btn btn-primary" data-dismiss="modal">提交</button>
                </div>
            </form>
        </div>

        </div>
    </div>

   </div>
</div>




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

<script>

</script>





@endsection