@extends('admin.layouts')

@section('content')
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        Amaze UI 表单
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">友情链接</a></li>
        <li class="am-active">添加列表</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 添加链接
            </div>


        </div>
        <div class="tpl-block ">

            <div class="am-g tpl-amazeui-form">


                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" action="{{ url('/admin/link/insert') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">链接名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="{{old('link_name')}}" name="link_name" id="user-name" placeholder="链接名称 / 公司名称">
                                        <small id="sm1" style="color:red;display: none;">*内容不能为空</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-email" class="am-u-sm-3 am-form-label">链接地址</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="{{old('url')}}" name="url" id="user-email" placeholder="输入你的链接地址 ">
                                        <small id="sm2" style="color:red;display: none;">*内容不能为空</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <a href="javascript:;" onclick="ad()" class="am-btn am-btn-primary">确认添加</a>
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