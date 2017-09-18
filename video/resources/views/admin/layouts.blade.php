<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('admin_temp/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="BalaBala" />
    <link rel="stylesheet" href="{{asset('admin_temp/assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_temp/assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('admin_temp/assets/css/app.css')}}" >
    <script type="text/javascript"    src="{{asset('admin_temp/assets/js/echarts.min.js')}}"></script>
    <script type="text/javascript"   src="{{asset('admin_temp/assets/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('admin_temp/assets/css/sweetalert.css')}}">
</head>

<body data-type="index"  >

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="{{asset('admin_temp/assets/img/logo.png')}}" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-bell-o"></span> 提醒 <span class="am-badge tpl-badge-success am-round">5</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">全部</a></li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 【预览模块】移动端 查看时 手机、电脑框隐藏。</a>
                        <span class="tpl-dropdown-list-fr">3小时前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 移动端，导航条下边距处理</a>
                        <span class="tpl-dropdown-list-fr">15分钟前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span> 追加统计代码</a>
                        <span class="tpl-dropdown-list-fr">2天前</span>
                    </li>
                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-comment-o"></span> 消息 <span class="am-badge tpl-badge-danger am-round">9</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>
                    <li>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="{{asset('admin_temp/assets/img/user02.png')}}" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> 禁言小张 </span>
                                <span class="tpl-dropdown-content-time">10分钟前 </span>
                                </span>
                            <span class="tpl-dropdown-content-font"> BalaBala 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；BalaBala 的成长，则离不开用户的支持。 </span>
                        </a>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="{{asset('admin_temp/assets/img/user03.png')}}" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> Steam </span>
                                <span class="tpl-dropdown-content-time">18分钟前</span>
                                </span>
                            <span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-calendar"></span> 进度 <span class="am-badge tpl-badge-primary am-round">4</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-primary">4</span> 个任务进度</h3><a href="###">全部</a></li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">BalaBala 用户中心 v1.2 </span>
                                <span class="percent">45%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">新闻内容页 </span>
                                <span class="percent">30%</span>
                                </span>
                            <span class="progress">
                       <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">管理中心 </span>
                                <span class="percent">60%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>
                    </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">禁言小张</span><span class="tpl-header-list-user-ico"> <img src="{{asset('admin_temp/assets/img/user01.png')}}"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>

<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            BalaBala 列表
        </div>
        <div class="tpl-left-nav-list">
            <ul class="tpl-left-nav-menu">
                <li class="tpl-left-nav-item">
                    <a href="{{url('admin')}}" class="nav-link active">
                        <i class="am-icon-home"></i>
                        <span>首页</span>
                    </a>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-table"></i>
                        <span>视频分类</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu">
                        <li>
                            <a href="{{url('admin/type/add')}}">
                                <i class="am-icon-angle-right"></i>
                                <span>分类添加</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <a href="{{url('admin/type/index')}}">
                                <i class="am-icon-angle-right"></i>
                                <span>分类列表</span>
                                <i class="tpl-left-nav-content tpl-badge-success">18</i>
                            </a>
                            <a href="form-news.html">
                                <i class="am-icon-angle-right"></i>
                                <span>消息列表</span>
                                <i class="tpl-left-nav-content tpl-badge-primary">5</i>
                            </a>

                            <a href="form-news-list.html">
                                <i class="am-icon-angle-right"></i>
                                <span>文字列表</span>

                            </a>
                        </li>
                    </ul>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-table"></i>
                        <span>用户上传管理</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" >
                        <li>
                            <a href="{{url('admin/upload/index')}}">
                                <i class="am-icon-angle-right"></i>
                                <span>用户上传列表</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right">

                                </i>
                            </a>
                            <a href="{{url('admin/upload/add')}}">
                                <i class="am-icon-angle-right"></i>
                                <span>用户视频添加</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right">

                                </i>
                            </a>
                        </li>
                    </ul>
                        <li class="tpl-left-nav-item">
                            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                                <i class="am-icon-table"></i>
                                <span>评论管理</span>
                                <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                            </a>
                            <ul class="tpl-left-nav-sub-menu">
                                <li>
                                    <a href="{{url('admin/comment')}}">
                                        <i class="am-icon-angle-right"></i>
                                        <span>评论列表</span>
                                        <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="tpl-left-nav-item">
                            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                                <i class="am-icon-table"></i>
                                <span>用户管理</span>
                                <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                            </a>
                            <ul class="tpl-left-nav-sub-menu">
                                <li>
                                    <a href="{{url('admin/user/vip')}}">
                                        <i class="am-icon-angle-right"></i>
                                        <span>会员列表</span>
                                        <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="tpl-left-nav-item">
                            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                                <i class="am-icon-table"></i>
                                <span>系统设置</span>
                                <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                            </a>


                                <ul class="tpl-left-nav-sub-menu" >

                                    <a href="{{url('admin/config/create')}}">
                                        <i class="am-icon-angle-right"></i>
                                        <span>添加网站配置</span>
                                        <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right">

                                        </i>
                                    </a>
                                    <a href="{{url('admin/config')}}">
                                        <i class="am-icon-angle-right"></i>
                                        <span>网站配置列表</span>
                                        <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right">

                                        </i>
                                    </a>
                                    </ul>
                        </li>
                     </li>
                                <li class="tpl-left-nav-item">
                                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                                        <i class="am-icon-table"></i>
                                        <span>友情链接</span>
                                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                                    </a>
                                    <ul class="tpl-left-nav-sub-menu">
                                        <li>
                                            <a href="{{url('admin/link')}}">
                                                <i class="am-icon-angle-right"></i>
                                                <span>链接列表</span>
                                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/link/add')}}">
                                                <i class="am-icon-angle-right"></i>
                                                <span>添加链接</span>
                                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="tpl-left-nav-item">
                                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                                        <i class="am-icon-table"></i>
                                        <span>推广管理</span>
                                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                                    </a>
                                    <ul class="tpl-left-nav-sub-menu">
                                        <li>
                                            <a href="{{url('admin/position/push/index?position_id=0')}}">
                                                <i class="am-icon-angle-right"></i>
                                                <span>推广视频列表</span>
                                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
        </div>
    </div>
    @yield('content')
    @section('sidebar')
    @show
</div>
<script src="{{asset('admin_temp/assets/js/amazeui.min.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/iscroll.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_temp/assets/layer/layer.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_temp/assets/js/sweetalert-dev.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_temp/assets/js/sweetalert.min.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/jquery.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('admin_temp/assets/css/amazeui.min.css')}}" />
<link rel="stylesheet" href="{{asset('admin_temp/assets/css/amazeui.min.css')}}" />

<link rel="stylesheet" href="{{asset('js-sdk/dist/qiniu.js')}}" >
<link rel="stylesheet" href="{{asset('admin_temp/assets/css/sweetalert.css')}}" >
{{--七牛插件引入--}}
<script type="text/javascript" src="{{asset('admin_temp/assets/js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="http://cdn.staticfile.org/plupload/2.1.9/i18n/ar.js"></script>

<!-- 提示信息 -->
<div style="display:none;">
    @if(session('info'))
        <p id="session">{{session('info')}}</p>
    @endif
</div>
<!-- 验证信息 -->
@if (count($errors) > 0)
    <div class="alert alert-danger" style="display:none;">
        <ul>
            @foreach ($errors->all() as $error)
                <li class= "info" >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script src="{{asset('admin_temp/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/amazeui.min.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/iscroll.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/app.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/sweetalert-dev.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/sweetalert.min.js')}}"></script>
<script src="{{asset('/layer/layer.js')}}"></script>
@yield('js')
</body>

</html>