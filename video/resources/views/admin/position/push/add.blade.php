@extends('admin.layouts')

@section('content')
    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            Amaze UI 表单
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">首页</a></li>
            <li><a href="#">推广模块</a></li>
            <li class="am-active">添加推广</li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    <span class="am-icon-code"></span> 添加推广
                </div>


            </div>
            <div class="tpl-block ">

                <div class="am-g tpl-amazeui-form">


                    <div class="am-u-sm-12 am-u-md-9">
                        <form class="am-form am-form-horizontal" action="{{ url('/admin/position/push/insert') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="video_id" value="{{$video->video_id}}">
                            <div class="am-form-group">
                                <label for="user-phone" class="am-u-sm-3 am-form-label">推广位选择 <span class="tpl-form-line-small-title"></span></label>
                                <div class="am-u-sm-9">
                                    <select  name="position_id" data-am-selected="{searchBox: 1}" style="display: none;">
                                        @foreach($data as $item)
                                            <option value="{{$item->position_id}}">{{$item->position_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">视频名称</label>
                                <div class="am-u-sm-9">
                                    <input type="text" disabled value="{{$video->video_name}}" name="video_name" id="user-name" >
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">播放量</label>
                                <div class="am-u-sm-9">
                                    <input type="text" disabled value="{{$video->video_count}}" name="video_count" id="user-name" >
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">评论数量</label>
                                <div class="am-u-sm-9">
                                    <input type="text" disabled value="{{$video->video_comments}}" name="video_name" id="user-name" >
                                </div>
                            </div>



                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="submit" class="am-btn am-btn-primary">确认添加</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection

@section('js')
    <script>
        function ad() {
            var link_name = $("input[name=link_name]").val();
            var url = $("input[name=url]").val();
            if(link_name == '' || url == ''){
                $("#sm1").css("display","block");
                $("#sm2").css("display","block");
            }else {
                $.ajax({
                    url:'/admin/link/insert',
                    type:'post',
                    data:{link_name:link_name,'url':url,'_token': '{{csrf_token()}}'},
                    success:function(data){
                        if(data.state == 0){
                            swal("操作成功!", "已成功添加数据！", "success");
                            $('.confirm').on('click',function(){
                                location.href = '{{url('/admin/link')}}';
                            })
                        }else{
//                        swal($errors->all());
                            swal("OMG", "添加数据失败了!", "error");
                        }
                    },


                });
            }

        }


    </script>

@stop