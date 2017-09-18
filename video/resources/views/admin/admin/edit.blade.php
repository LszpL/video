@extends('admin.layouts')

@section('content')
<div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                管理员管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">管理员管理</a></li>
                <li class="am-active">编辑</li>
            </ol>
</div>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                         编辑管理员
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
                            <form id="art_form" class="am-form am-form-horizontal" action="{{ url('/admin/admin/update') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" value="{{$page}}" name="page">
                                <input type="hidden" value="{{$user->admin_id}}" name="admin_id">
                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">管理员名</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  readonly="readonly" name="admin_name" value="{{$user->admin_name}}">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">权限</label>
                                    <div class="am-u-sm-9">
                                        <label><input type="radio" name="admin_auth" value="超级管理员"  @if($user->admin_auth=='超级管理员') checked="checked"
                                          @endif
                                        ><font class="am-form-label">超级管理员</font></label>
                                    </div>
                                    <div class="am-u-sm-9">
                                        <label><input type="radio" name="admin_auth" value="普通管理员"  @if($user->admin_auth=='普通管理员')
                                          checked="checked" 
                                          @endif
                                          ><font class="am-form-label">普通管理员</font></label>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label">头像</label>
                                    <div class="am-u-sm-9">
                                        <!-- <input type="file" name="admin_face" accept="image/*" class="am-form-label" >
                                        <font class="am-form-label">请上传大头贴.</font> -->
                                        <!-- <input type="text" size="50"  name="art_thumb" id="art_thumb">
                                           <input id="file_upload" class="am-form-label" name="file_upload" type="file" multiple="true"> -->
                                        
                                        <div class="am-form-group am-form-file">   
                                            <input id="file_upload" name="file_upload" type="file" multiple="true">
                                           <input type="text" size="50" name="art_thumb" id="art_thumb"><br>
                                           <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                            <i class="am-icon-cloud-upload"></i> 请上传大头贴</button>
                                           <p><img id="img1" src="/uploads/{{$user->admin_face}}" alt="上传后显示图片" class="am-form-label" style="max-width:350px;max-height:100px;" /></p>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">提交</button>
                                        <button type="button" class="am-btn am-btn-primary" onclick="window.history.back();location.reload();">返回</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
@stop
@section('js')
<script type="text/javascript">
    $("#file_upload").change(function () {
                uploadImage();
            })
       
        function uploadImage() {
            // alert(111);
        //  判断是否有选择上传文件
            var imgPath = $("#file_upload").val();
            if (imgPath == "") {
                alert("请选择上传图片！");
                return;
            }
            //判断上传文件的后缀名
            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
            if (strExtension != 'jpg' && strExtension != 'gif'
                && strExtension != 'png' && strExtension != 'bmp') {
                alert("请选择图片文件");
                return;
            }
            var formData = new FormData($('#art_form')[0]);
            $.ajax({
                type: "POST",
                url: "/admin/admin/upload",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#img1').attr('src','/'+data);
                    $('#art_thumb').val(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("上传失败，请检查网络后重试");
                }
            });
        }
</script>
@stop