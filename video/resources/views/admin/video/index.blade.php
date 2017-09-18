@extends('admin.layouts')


@section('content')

     <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                视频 标签组件
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">标签</a></li>
                <li class="am-active">内容</li>
            </ol>
    </div>
  
   <div class="tpl-portlet-components" style="height:1064px" >
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 标签列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索...">
                            </div>
                        </div>
                    </div>


                </div>


                <div class="tpl-block ">
                    <div class="am-u-sm-12">
                        <div class="am-g">
                            <form class="am-form" action="{{url('admin/video/index')}}" method="post" >
                            {{csrf_field()}}
                            <div class="am-u-sm-12 am-u-md-3">
                                <div class="am-form-group">
                                   <select data-am-selected="{btnSize: 'sm'}" name="count"  >
                                        <option value="5">5</option> 
                                        <option value="10">10</option> 
                                        <option value="20">20</option> 
                                           
                                   </select>
                                </div>
                            </div>
                            <div class="am-u-sm-12 am-u-md-3">
                                <div class="am-input-group am-input-group-sm">
                                  <input type="text" class="am-form-field" name="keyword" value="">
                                    <span class="am-input-group-btn">
                                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="submit"></button>
                                      </span>
                                </div>
                            </div>
                             </form>
                        </div>
                            
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">视频ID</th>
                                            <th class="table-title">视频名称</th>
                                            <th class="table-set">视频封面</th>
                                            <th class="table-title">视频链接</th>
                                            <th class="table-title">视频发布人</th>
                                            <th class="table-date am-hide-sm-only">发布时间</th>
                                            <th class="table-title">浏览量</th>
                                            <th class="table-title">视频详情</th>
                                            <th class="table-set">状态操作</th>    
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr class="parent">
                                            <td>{{$item->video_id}}</td>
                                            <td class="name">{{$item->video_name}}</td>
                                            <td> <img src="/{{$item->video_img}}" style="width:50px;" > </td>
                                            <td>{{$item->video_url}}</td>
                                            <td>{{$item->admin_name}}</td>
                                            <td>{{$item->video_time}}</td>
                                            <td>{{$item->video_count}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                       
                                                            <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                <span class="am-icon-pencil-square-o" ></span>
                                                                <a href="/admin/video/detail/{{$item->video_id}}" >详细信息</a>
                                                             </button>

                                                            
                                                          
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                            @if($item->video_status == '下线')
                                                            <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                <span class="am-icon-pencil-square-o" ></span>
                                                                <a href="JavaScript:;"  onclick=" online({{$item->video_id}}) "> 已下线</a>
                                                             </button>
                                                            @endif
                                                            @if($item->video_status == '上线')    
                                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                            <a href="JavaScript:;"  onclick=" offline({{$item->video_id}}) "> 已上线</a> 
                                                            </button>
                                                            @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                       
                                                            <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                <span class="am-icon-pencil-square-o" ></span>
                                                                <a href="/admin/video/edit/{{$item->video_id}}"> 编辑</a>
                                                             </button>

                                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                            <a href="/admin/video/delete/{{$item->video_id}}"> 删除</a> 
                                                            </button>
                                                          
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                     @endforeach   
                                    </tbody>
                                </table>
                                <div class="page_list">
                                    {{$data->render() }}

                                </div>
                                <hr>

                           
                        </div>
                    
                </div>

            </div>


@endsection

@section('js')
@parent
  
<script type="text/javascript">

function online (id){



            layer.confirm('您确定要上线吗？', 
                {
                  btn: ['确认','取消'] //按钮
                },

                 function()
                 {

                   
                    $.ajax({
                        type:'post',
                        data:{id:id,_token:'{{csrf_token()}}' },
                        url:'/admin/video/online',
                        success:function(data){
                        layer.msg(data); 
                        location.href = location.href;  
                        },
                        dateType:'json'
                    });  
                 },
                 function()
                 {  
                   layer.msg('取消操作');
                 }
            );

            
        }
function offline (id){



            layer.confirm('您确定要下线吗？', 
                {
                  btn: ['确认','取消'] //按钮
                },

                 function()
                 {

                   
                    $.ajax({
                        type:'post',
                        data:{id:id,_token:'{{csrf_token()}}' },
                        url:'/admin/video/offline',
                        success:function(data){
                        layer.msg(data); 
                        location.href = location.href;  
                        },
                        dateType:'json'
                    });  
                 },
                 function()
                 {  
                   layer.msg('取消操作');
                 }
            );

            
        }


</script>

@endsection