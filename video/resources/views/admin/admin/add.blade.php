@extends('admin.layouts')

@section('content')
<div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                管理员管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">管理员管理</a></li>
                <li class="am-active">添加</li>
            </ol>
</div>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                         添加管理员
                    </div>
                   <!--  <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div> -->


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
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
                            <form class="am-form am-form-horizontal" action="{{ url('/admin/admin/insert') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">管理员名</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  placeholder="管理员名" name="admin_name">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">密码</label>
                                    <div class="am-u-sm-9">
                                        <input type="password" id="user-email" placeholder="输入你的密码" name="admin_pwd">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">确认密码</label>
                                    <div class="am-u-sm-9">
                                        <input type="password"  placeholder="再次输入你的密码" name="re_pwd">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">权限</label>
                                    <div class="am-u-sm-9">
                                        <label><input type="radio" name="admin_auth" value="超级管理员"  @if(old('admin_auth')=='超级管理员') checked="checked" @endif><font class="am-form-label">超级管理员</font></label>
                                    </div>
                                    <div class="am-u-sm-9">
                                        <label><input type="radio" name="admin_auth" value="普通管理员"  @if(old('admin_auth')=='普通管理员') checked="checked" @endif><font class="am-form-label">普通管理员</font></label>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">头像</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" name="admin_face" accept="image/*" class="am-form-label" >
                                        <font class="am-form-label">请上传大头贴.</font>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">提交</button>
                                        <!-- <button type="button" class="am-btn am-btn-primary" onclick="window.history.back();location.reload();">返回</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@stop