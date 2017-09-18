@extends('admin.layouts')

@section('content')
    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            balabala 友情链接
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">首页</a></li>
            <li><a href="#">友情链接</a></li>
            <li class="am-active">链接列表</li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    <span class="am-icon-code"></span> 链接列表
                </div>


            </div>
            <div class="tpl-block">
                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6" style="height: 33px;">
                        @if(session('info'))
                            <div id="alertError" class="am-u-sm-12 alert bg-success alert-danger alert-dismissible" style="padding:0;height: 100%;line-height: 33px;color: rgba(255,48,21,0.87);">
                                {{ session('info') }}
                            </div>
                        @endif
                    </div>

                    <div class="am-u-sm-12 am-u-md-3">
                        <form action="{{url('admin/link')}}" method="get">

                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field" name="keywords" placeholder="通过链接名称搜索" value="@if(!empty($request['keywords'])){{ $request['keywords'] }}@endif">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="submit"></button>
          </span>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                <tr>
                                    <th class="table-id">ID</th>
                                    <th class="table-title">链接名称</th>
                                    <th class="table-type">链接地址</th>
                                    <th class="table-author am-hide-sm-only">创建时间</th>
                                    <th class="table-author am-hide-sm-only">修改时间</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $item->friend_id }}</td>
                                        <td><a href="#">{{ $item->link_name }}</a></td>
                                        <td>{{ $item->url }}</td>
                                        <td class="am-hide-sm-only">{{ $item->created_at }}</td>
                                        <td class="am-hide-sm-only">{{ $item->updated_at }}</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <a id="del" class="am-btn am-btn-default am-btn-xs am-text-secondary" href="javascript:;" onclick="edi('{{ $item->friend_id }}');"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                                    <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" href="javascript:;" onclick="del('{{ $item->friend_id }}');"><span class="am-icon-trash-o"></span> 删除</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="page_list">
                                {{ $data->appends($request)->render() }}
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="tpl-alert"></div>
        </div>
    </div>


@endsection

@section('js')
    <script>
        $("#alertError").fadeOut(3000);
        function del(id) {
            swal({
                title: "您确定要删除吗？",
                text: "您确定要删除这条数据？",
                type: "warning",
                showCancelButton: true,
                closeOnConfirm: false,
                confirmButtonText: "是的，我要删除",
                confirmButtonColor: "#ec6c62"
            }, function() {
                $.post('{{url('admin/link/delete')}}/'+id,{'_token':'{{csrf_token()}}','_method':'post'},function(data){
                    if(data.state == 0){
                        swal("操作成功!", "已成功删除数据！", "success");
                        $('.confirm').on('click',function(){
                            location.href = location.href;
                        })
                    }else{
                        swal("OMG", "删除操作失败了!", "error");
                        $('.confirm').on('click',function(){
                            location.href = location.href;
                        })
                    }

                })
            },function(){

            });
        }
    function edi(id) {
        layer.open({
            title: '更新数据',
            content: '链接名称&nbsp;&nbsp; <input style="border: 1px solid rgb(84,79,255);" type="text" name="link_name" /><br>链接地址&nbsp;&nbsp; <input style="border: 1px solid rgba(84,79,255,0.47);" type="text" name="url" />',
            btn: ['确认', '取消'],
            yes: function (val, index) {
                var link_name = $('input[name=link_name]').val();
                var url = $('input[name=url]').val();
                $.post('{{url('admin/link/update')}}', { '_token': '{{csrf_token()}}','link_name': link_name,'url': url,'id':id
                }, function (data) {
//                    alert(data);
                    if (data == 0) {
                        layer.msg('更新成功', {icon: 6});
                        location.href = location.href;
                    } else {
                        layer.msg('更新失败', {icon: 5});
                        location.href = location.href;
                    }
                });
            }


        });

    }
    </script>
@stop