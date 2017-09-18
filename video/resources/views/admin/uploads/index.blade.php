@extends('admin.layouts');
@section('content')
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                 上传管理
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
            </div>


        </div>
        <div class="tpl-block">
            @if(session('info'))
                <div    id="alertError"  class="alert alert-info alert-dismissible">
                    <h4 style="color:red"><i class="icon fa fa-info"></i> 提示!</h4>

                    <h4 style="color:red">{{session('info')}}</h4>

                </div>
            @endif
            <form action="{{url('/admin/upload/index')}}" method="GET">
                <input type="hidden"  name="page" value="{{$page}}" >
            <div class="am-g">

                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <select class="form-control" name="num">
                                <option value="5"
                                        @if( !empty($request['num'])  &&  $request['num']==5)
                                        selected="selected"
                                        @endif
                                >每页显示5条</option>
                                <option value="10"
                                        @if( !empty($request['num'])  &&  $request['num']==10)
                                        selected="selected"
                                        @endif
                                >每页显示10条</option>
                                <option value="15"
                                        @if( !empty($request['num'])  &&  $request['num']==15)
                                        selected="selected"
                                        @endif
                                >每页显示15条</option>
                                <option value="20"
                                        @if( !empty($request['num'])  &&  $request['num']==20)
                                        selected="selected"
                                        @endif
                                >每页显示20条</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text"  name="keywords" class="am-form-field"   placeholder="在这里输入用户名可以更快搜索哦" value="@if( !empty($request['keywords'])) {{ $request['keywords'] }}@endif">
                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"  type="submit">搜索</button>
          </span>
                    </div>
                </div>
            </div>
            </form>
            <div class="am-g">
                <div class="am-u-sm-12">

                    <form class="am-form">

                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                <th class="table-id">ID</th>
                                <th class="table-title">用户名</th>
                                <th class="table-type">分类</th>
                                <th class="table-author am-hide-sm-only">标题</th>
                                <th class="table-date am-hide-sm-only">标签</th>
                                <th class="table-set">内容</th>
                                <th class="table-set">上传路径</th>

                                <th class="table-set">状态</th>
                                <th class="table-set">上传时间</th>
                                <th class="table-set">审核时间</th>
                                <th class="table-set">操作</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>{{$item->upload_id}}</td>
                                <td><a href="#">{{$item->users_name}}</a></td>
                                <td>{{$item->type_name}}</td>
                                <td class="am-hide-sm-only">{{$item->title}}</td>
                                <td class="am-hide-sm-only">{{$item->label}}</td>
                                <td>{{$item->content}}</td>
                                <td>http://ow44tz416.bkt.clouddn.com/{{$item->upload_address}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->upload_time}}</td>
                                <td>{{$item->audit_time}}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            @if(($item->status=='审核中'))
                                                <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only" ><span class="am-icon-copy"></span><a href="javascript:;" onclick="FinishUser({{$item->upload_id}})"> 审核完成</a></button>
{{--                                                {{url('admin/upload/finish')}}/{{$item->upload_id}}?page={{$page}}--}}
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-copy"></span><a href="javascript:;" onclick="DefeatedUser({{$item->upload_id}})">审核失败</a></button>
{{--                                                {{url('admin/upload/defeated')}}/{{$item->upload_id}}?page={{ $page }}                                                                   --}}
                                            @endif

                                            @if($item->status=='审核失败')
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span><a href="javascript:;" onclick="delUser({{$item->upload_id}})">删除</a></button>
                                                                {{--{{url('admin/upload/delete')}}/{{$item->upload_id}}?page={{ $page }}--}}
                                            @endif
                                            @if($item->status=='审核完成')
                                                    <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only" ><span class="am-icon-copy"></span><a href="#">已审核完成,待上线</a></button>
                                            @endif

                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!!$users->appends($request)->render()!!}
                        <div class="am-cf">


                        <hr>
                    </form>
                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>
    </div>
@endsection
<script>
    function  delUser(id){
                swal({
                    title: "您确定要删除吗？",
                    text: "您确定要删除这条数据？",
                    type: "warning",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    confirmButtonText: "是的，我要删除",
                    confirmButtonColor: "#ec6c62"
                }, function() {
                    $.ajax({
                        url: "{{url('/admin/upload/delete')}}/"+id,
                        type: "GET"
                    }).done(function(data) {
                        swal("操作成功!", "已成功删除数据！", "success");
                        $('.confirm').on('click',function (){
                            location.href=location.href;
                        })
                    }).error(function(data) {
                        swal("OMG", "删除操作失败了!", "error");
                        $('.confirm').on('click',function (){
                            location.href=location.href;
                        })
                    });
                });
    }

    function  FinishUser(id){
        swal({
            title: "您确定要审核完成吗？",
            text: "您确定要审核这条数据？",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonText: "是的，我要审核",
            confirmButtonColor: "#ec6c62"
        }, function() {
            $.ajax({
                url: "{{url('/admin/upload/finish')}}/"+id,
                type: "GET"
            }).done(function(data) {
                swal("操作成功!", "该数据已成功审核！", "success");
                $('.confirm').on('click',function (){
                    location.href=location.href;
                })
            }).error(function(data) {
                swal("OMG", "审核操作失败了!", "error");
                $('.confirm').on('click',function (){
                    location.href=location.href;
                })
            });
        });
    }

    function  DefeatedUser(id){
        swal({
            title: "您确定要审核失败吗？",
            text: "您确定要审核这条数据？",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonText: "是的，我要审核",
            confirmButtonColor: "#ec6c62"
        }, function() {
            $.ajax({
                url: "{{url('/admin/upload/defeated')}}/"+id,
                type: "GET"
            }).done(function(data) {
                swal("操作成功!", "该数据未通过审核,已告知用户！", "success");
                $('.confirm').on('click',function (){
                    location.href=location.href;
                })
            }).error(function(data) {
                swal("OMG", "审核操作失败了!", "error");
                $('.confirm').on('click',function (){
                    location.href=location.href;
                })
            });
        });
    }

</script>



@section('js')
    <script type="text/javascript">
        $('#alertError').hide(5000);
    </script>
@stop