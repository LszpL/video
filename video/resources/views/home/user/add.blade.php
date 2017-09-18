@extends('home/user/layouts')
@section('content')
    <div class="security-right">
        <div class="sr-t">
            <span class="tit-b"></span><span class="acc-sec">上传视频</span>
        </div>
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
        <form  id="art_form"   action="{{url('home/user/upload')}}" method="post"  enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="sr-b">
            <ul>
                <li>
                    <div class="sb-info">
                        <p class="sbi-l">视频：</p>
                        <div class="sbi-m">
                                <input id="file_name" type="file" name="file_name" value=""  multiple="true">
                                {{--<input type="text" size="50" name="art_thumb" id="art_thumb">--}}
                                 {{--<p><img id="img1" alt="上传后显示图片"  style="max-width:350px;max-height:100px;" /></p>--}}

                        </div>
                        <p class="sbi-r">注：请不要上传过大文件</p>
                    </div>
                </li>
                <li>
                    <div class="sb-info">
                        <p class="sbi-l">视频标题：</p>
                        <div class="sbi-m">
                            <span><input class="title" type="text" name="title" value=""></span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="sb-info">
                        <p class="sbi-l">视频分类：</p>
                        <div class="sbi-m">

                            <div class="am-form-group">
                                <div class="am-u-sm-9">
                                    <select data-am-selected="{btnSize: 'sm'}" name="type_name"  style="width:225px" >
                                        <option value="0">根类</option>

                                        @foreach( $type as $item)
                                            <option value="{{$item->type_id}}" >{{$item->type_name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="sb-info">
                        <p class="sbi-l">视频标签：</p>
                        <div class="sbi-m">
                            <div class=""  >
                                @foreach($label as $item)
                                <span  ><input type="checkbox" name="label[]" value="{{$item->label_name}}"  style="width:10px;height:15px">{{$item->label_name}}</span> <em></em>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>


                <li>
                    <div class="sb-info">
                        <p class="sbi-l">视频描述：</p>
                        <div class="sbi-m">
                            <div class="">
                                <span><input type="text" name="content" value=""> </span> <em></em>

                            </div>

                        </div>

                    </div>

                    <div class="sb-info">
                        <div class="sbi-m">
                            <div class="">
               <span><input type="submit" class="sb-save" value="上传" style="position: absolute;bottom:-40px;left:250px;display: block;"></span> <em></em>
                            </div>
                        </div>
                    </div>

                    </div>

           <form>
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
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png' && strExtension != 'bmp') {
            alert("请选择图片文件");
            return;
        }
        var formData = new FormData($('#art_form')[0]);
        $.ajax({
            type: "POST",
            url: "/home/user/upload",
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