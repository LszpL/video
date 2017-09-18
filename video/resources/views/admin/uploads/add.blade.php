@extends('admin.layouts')
@section('content')
    <div class="tpl-portlet-components">
        <div class="portlet-title">


            <div class="tpl-portlet-components">
                <div class="portlet-title" >
                    <div class="caption font-green bold" style="height:800px;">
                        <span class="am-icon-code"></span> 用户视频添加
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
                            @if (count($errors) > 0)
                                <div class="mark">
                                    <ul>
                                        @if(is_object($errors))
                                            @foreach ($errors->all() as $error)
                                                <li style="color:red">{{ $error }}</li>
                                            @endforeach
                                        @else
                                            <li style="color:red">{{ $errors }}</li>
                                        @endif
                                    </ul>
                                </div>
                            @endif
                            @if(session('info'))
                                <div  id="alertError"  class="danger">

                                    {{session('info')}}
                                </div>
                            @endif
                            <form class="am-form am-form-horizontal"  id="art_form" action="{{url('admin/upload/insert')}}" method="post"  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">上传视频</label>
                                    <div class="am-u-sm-9">
                                        {{--<input type="file" id="user-weibo" name="file_name">--}}
                                        {{--<input type="text" size="50" name="art_thumb" id="art_thumb">--}}
                                        <input id="file_name" name="file_name" type="file" multiple="true">
                                        {{--<p><img id="img1" alt="上传后显示图片"  style="max-width:350px ;max-height:100px;" /></p>--}}
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">标题</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name"  name="title"   placeholder="请输入标题">
                                        <small>请输入一个简洁明了的标题</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">分类</label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{btnSize: 'sm'}" name="type_name"  >
                                            <option value="0">根类</option>

                                            @foreach( $data as $item)
                                                <option value="{{$item->type_id}}" >{{$item->type_name}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">标签</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel"  name="label"  id="user-phone" placeholder="选择一下标签 ">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ"   class="am-u-sm-3 am-form-label">描述</label>
                                    <div class="am-u-sm-9">
                                        <textarea placeholder="请输入内容" name="content"></textarea>
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">确认上传</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="tpl-alert"></div>
    </div>
@endsection
@section('js')
<script type="text/javascript">
    $(function () {
        $("#file_name").change(function () {
            uploadImage();
        })
    })
    function uploadImage() {
//  判断是否有选择上传文件
        var imgPath = $("#file_name").val();
        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }
////        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'avi'
            && strExtension != 'rmvb' && strExtension != 'wmv') {
            alert("请选择视频文件");
            return;
        }
        var formData = new FormData($('#art_form')[0]);
        $.ajax({
            type: "POST",
            url: "/admin/upload/insert",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $('#img1').attr('src','/'+data);
                $('#art_thumb').val(data)
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("上传失败，请检查网络后重试");
            }
        });
    }
</script>
@endsection
