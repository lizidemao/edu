@extends("/Home/layout/index")

@section('title', '实验楼 - 课程')

@section('content')
	<div class="container layout layout-margin-top">
        <div class="content">
            <div class="row course-cates">
                <div class="col-md-1 course-cates-title">类别：</div>
                <div class="col-md-11 course-cates-content">

                    @foreach($res as $re)
                    <a class="" data="{{$re->type_id}}" href="/list/{{$re->type_id}}">{{$re->name}}</a>
                        @endforeach
                </div>
            </div>
            <div class="row course-cates">
    <div class="row" style="margin: 0">
        <div class="col-md-12 layout-body">

    </div>
    <div class="content position-relative">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="/courses/?course_type=all&amp;tag=all&amp;fee=all">已上线</a></li>
            <li class=""><a href="/courses/?status=preview" class="stat-event" data-stat="preview_course">即将上线</a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="courses-sort">
            <a  href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;order=latest">最新</a>
            /
            <a  href="/courses/?course_type=all&amp;tag=all&amp;fee=all&amp;order=hotest">最热</a>
        </div>
        <div class="search-result"></div>
        <div class="row">
@foreach($data as $v)
<div class="col-md-3 col-sm-6  course">
    <a class="course-box" href="/courses/show">
        <div class="sign-box">
            <i class="fa fa-star-o course-follow pull-right"
                data-follow-url="/courses/63/follow"
                data-unfollow-url="/courses/63/unfollow"  style="display:none"  ></i>
        </div>
        <div class="course-img">
            <img alt="新手指南之玩转实验楼" src="/home/img/ncn237.jpg">
        </div>
        <div class="course-body">
            <span class="course-title" data-toggle="tooltip" data-placement="bottom" title="新手指南之玩转实验楼">{{$v->title}}</span>
        </div>
        <div class="course-footer">
			<span class="course-per-num pull-left">
                <i class="fa fa-users"></i>
                57973
			</span>
        </div>
    </a>
</div>

 @endforeach

<nav class="pagination-container">

</nav>


    </div>

        </div>
        </div>
@endsection