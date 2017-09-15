@extends('admin.layouts')
<link rel="stylesheet" href="{{asset('admin_temp/assets/css/ch-ui.admin.css')}}">
<script type="text/javascript" src="{{asset('admin_temp/assets/js/ch-ui.admin.js')}}"></script>
@section('content')

    <div class="tpl-portlet-components">
        <div class="portlet-title">


            <div class="tpl-portlet-components">
                <div class="portlet-title" >
                    <div class="caption font-green bold" >
                        <div class="crumb_warp">
                            <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
                            <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">网站配置管理</a> &raquo; 添加网站配置
                        </div>
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">

                            <div class="mark">
                                <ul>

                                </ul>
                            </div>

                            <div class="result_wrap">
                                <!--面包屑导航 开始-->

                                <!--面包屑导航 结束-->

                                <!--结果页快捷搜索框 开始-->
                                <div class="search_wrap">
                                <form action="{{url('admin/user')}}" method="get">
                                <table class="search_tab">
                                <tr>
                                <th width="120">选择网站配置:</th>
                                <td>
                                <select onchange="javascript:location.href=this.value;">
                                <option value="">全部</option>
                                <option value="http://www.baidu.com">百度</option>
                                <option value="http://www.sina.com">新浪</option>
                                </select>
                                </td>
                                <th width="70">关键字:</th>
                                <td><input type="text" name="keywords" value="" placeholder="关键字"></td>
                                <td><input type="submit"  value="查询"></td>
                                </tr>
                                </table>
                                </form>
                                </div>
                                <!--结果页快捷搜索框 结束-->

                                <!--搜索结果页面 列表 开始-->
                                <form action="{{url('admin/config/changecontent')}}" method="post">
                                {{csrf_field()}}
                                <div class="result_wrap">
                                <!--快捷导航 开始-->
                                <div class="result_content">
                                <div class="short_wrap">
                                <a href="#"><i class="fa fa-plus"></i>{{config('web.keywords')}}</a>
                                </div>
                                </div>
                                <!--快捷导航 结束-->
                                </div>

                                <div class="result_wrap">
                                <div class="result_content">
                                <table class="list_tab">
                                <tr>

                                <th class="tc">ID</th>
                                <th>网站配置标题</th>
                                <th>网站配置名称</th>
                                <th>内容</th>
                                <th>操作</th>
                                </tr>
                                @foreach($conf as $k=>$v)
                                <tr>

                                <td class="tc">{{$v->conf_id}}</td>
                                <td>
                                <a href="#">{{$v->conf_title}}</a>
                                </td>
                                <td>
                                <a href="#">{{$v->conf_name}}</a>
                                </td>
                                <td>
                                <input type="hidden" name="conf_id[]" value="{{$v->conf_id}}">
                                {{--不解析成字符实体--}}
                                <a href="#">{!! $v->_content !!}</a>
                                </td>
                                <td>
                                <a href="{{url('admin/config/'.$v->conf_id.'/edit')}}">修改</a>
                                <a href="javascript:;" onclick="delConf({{$v->conf_id}})">删除</a>
                                </td>
                                </tr>
                                @endforeach
                                <tr>

                                <td colspan="5">
                                <input type="submit"  value="提交">

                                </td>
                                </tr>
                                </table>

                                </div>
                                </div>
                                </form>
                                <!--搜索结果页面 列表 结束-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="tpl-alert"></div>
    </div>

@endsection
@section('js')
<script>

    function delConf(id){
        //询问框
        layer.confirm('是否确认删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
//            layer.msg('删除成功', {icon: 1});
            $.post('{{url('admin/user/')}}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
                //var obj = JSON.parse(data);
                if(data.state == 0){
                    layer.msg(data.msg, {icon: 6});
                    location.href = location.href;
                }else{
                    layer.msg(data.msg, {icon: 5});
                    location.href = location.href;
                }
            })

        }, function(){

        });


//        $.post(请求路由,携带的参数,function(返回数据){
//            对返回数据的处理
//        })
//        admin/user/1

    }
</script>

    @endsection