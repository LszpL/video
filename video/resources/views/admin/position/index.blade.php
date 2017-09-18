@extends('admin.layouts')

@section('content')

<div class="tpl-content-wrapper">

            <div class="tpl-content-page-title">
                推荐位管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">推荐位管理</a></li>
                <li class="am-active">列表</li>
            </ol>
</div>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                     列表
                    </div>
                </div>
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
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                         
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">推荐位名称</th>
                                            <th class="table-type">创建时间</th>
                                            <th class="table-type">修改时间</th>
                                            <th class="table-type">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $k=>$v)
                                        <tr>
                                            <td>{{$v->position_id}}</td>
                                            <td>{{$v->position_name}}</td>
                                            <td>{{$v->created_at}}</td>
                                            <td>{{$v->update_at}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                    	<a href="javascript:;" onclick="edit({{$v->position_id}})">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>编辑</button></a>
                                                        <a href="javascript:;" onclick="del({{$v->position_id}})">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>删除</button></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
@stop

@section('js')
<script type="text/javascript">
function edit(id){
            layer.prompt({title: '标签修改', formType: 0},function(val, index){
            $.ajax({
                type:'post',
                data:{id:id,name:val,_token:'{{csrf_token()}}','_method':'put' },

                url:'/admin/position/'+id,
                success:function(data){
                   layer.msg(data,{icon: 6});
                 location.href = location.href;  
                 
                },
                dateType:'json'
            });    
            layer.close(index);
            
          
            });

        }
function del(position_id){
     //询问框
            layer.confirm('是否确认删除？', {
                btn: ['确定','取消'] //按钮
            }, function(){
//        $.post(url,data,function(){});
                $.post("{{url('admin/position')}}/"+position_id,{'_method':'delete','_token':"{{csrf_token()}}"},function(data){
                   // console.log(data.status);
                    if(data.status == 0){
                       
                        layer.msg(data.msg, {icon: 5});
                        location.href = location.href;
                    }else{
                        layer.msg(data.msg, {icon: 6});
                        location.href = location.href;
                    }
                });
            }, function(){
            });
}
</script>
@stop