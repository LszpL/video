<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}} - {{$title}}</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('admin/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="BalaBala" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
    <script src="{{asset('admin/assets/js/echarts.min.js')}}"></script>
    <!-- <link rel="stylesheet" href="{{asset('admin/dist/css/bootstrap.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
	    <link rel="stylesheet" href="{{asset('admin_temp/assets/css/sweetalert.css')}}">
</head>

<body data-type="index">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="{{asset('admin/assets/img/logo.png')}}" alt="">
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
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">欢迎您 {{session('user')->admin_name}}</span><span class="tpl-header-list-user-ico"> 
                        @if(empty(session('user')->admin_face))
                        <img src="{{asset('admin/assets/img/user01.png')}}">
                        @else
                        <img src="/uploads/{{session('user')->admin_face}}" style="width: 40px;">
                        @endif
                        </span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="{{url('/admin/admin/mima')}}"><span class="am-icon-cog"></span> 修改密码</a></li>
                        <li><a href="{{url('/admin/logout')}}"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/admin/logout')}}" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
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

                        <a href="{{url('admin/index')}}" class="nav-link active">

                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    


                    <li class="tpl-left-nav-item " >
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="fa fa-user-plus"></i>
                            <span>管理员管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" >
                            <li>
                                <a href="{{url('admin/admin/add')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>管理员添加</span>
                                </a>
                                <a href="{{url('admin/admin/index')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>管理员列表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
					
					<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="fa fa-users"></i>
                            <span>用户管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li> 
                                <a href="{{url('admin/user/index')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>用户列表</span>
                                </a>
                            </li>
                        </ul>
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
                            </li>
                        </ul>
                    </li>




                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>视频标签</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="{{url('admin/label/add')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>标签添加</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="{{url('admin/label/index')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>标签列表</span>
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

                    <li class="tpl-left-nav-item " >
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="fa fa-user-plus"></i>
                            <span>推荐位管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="{{url('admin/position/create')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>推荐位添加</span>
                                </a>
                                <a href="{{url('admin/position')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>推荐位列表</span>
								</a>
							</li>
						</ul>
					</li>

                     <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>视频管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="{{url('admin/video/add')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>视频添加</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="{{url('admin/video/index')}}">
                                    <i class="am-icon-angle-right"></i>
                                    <span>视频列表</span>
                                    <i class="tpl-left-nav-content tpl-badge-success">18</i>
                                </a>
                                <a href="form-news.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>视频图表</span>
                                    <i class="tpl-left-nav-content tpl-badge-primary">5</i>
                                </a>

                                <a href="form-news-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>视频上传</span>


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
                    </li>
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
    </div>


    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/iscroll.js')}}"></script>
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    <script src="{{asset('admin/layer/layer.js')}}"></script>
	<script src="{{asset('admin_temp/assets/js/sweetalert-dev.js')}}"></script>
	<script src="{{asset('admin_temp/assets/js/sweetalert.min.js')}}"></script>
	<script src="{{asset('/layer/layer.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_temp/assets/layer/layer.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_temp/assets/js/sweetalert-dev.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_temp/assets/js/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('js-sdk/dist/qiniu.js')}}" >
{{--七牛插件引入--}}
<script type="text/javascript" src="{{asset('admin_temp/assets/js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="http://cdn.staticfile.org/plupload/2.1.9/i18n/ar.js"></script>
<script type="text/javascript"    src="{{asset('admin_temp/assets/js/echarts.min.js')}}"></script>
<script type="text/javascript"   src="{{asset('admin_temp/assets/js/bootstrap.min.js')}}"></script>
    
    <script type="text/javascript">
        //验证信息
        var str = '';
        if(typeof($('.info').html()) == 'string' && $('.info').html() !== null    ){
               $('.info').each(function(i,n){
                 str += $(n).html()+'<br>'; 
                 layer.alert(str, {icon: 5});   
            });
        }

        //提示信息
         if(typeof($('#session').html()) == 'string' &&  $('#session').html()  )
      {
            layer.alert($('#session').html(), {icon: 8});
      }
       //清除session 
      if( typeof($('#session').html()) == 'string' &&  $('#session').html()  )
        
       {
            $.ajax({
                type: "post",
                url: "/admin/index/session",
                data: {id:1,_token:'{{csrf_token()}}'}, 
            });
       } 

   </script>  

    @yield('js')

</body>

</html>