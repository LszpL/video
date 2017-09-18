@extends('admin.layouts')


@section('content')

     
    
      <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 文字列表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">Amaze UI CSS</a></li>
                <li class="am-active">文字列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 视频详细列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    
                    
                            <div class="am-g">

                                <div class="tpl-table-images">
                                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                        <div class="tpl-table-images-content">

                                            <div class="tpl-table-images-content-i-time"  >发布时间：{{$first->created_at}}   </div>
                                             <div class="tpl-table-images-content-i-time" >发布人：{{$first->admin_name}}   </div>
                                            <div class="tpl-i-title" style="line-height:2.4">
                                             视频名称:   {{$first->video_name}}
                                            </div>
                                            <a href="javascript:;" class="tpl-table-images-content-i">
                                                <div class="tpl-table-images-content-i-info">
                                                    <span class="ico" style="margin-left:130px; ">
                                            <img src="" alt="">{{$first->video_time}}
                                         </span>

                                                </div>
                                                <span class="tpl-table-images-content-i-shadow"></span>
                                                <img src="/{{$first->video_img}}" alt="" style="width:247px;height:144px">
                                            </a>
                                            <div class="tpl-table-images-content-block">
                                                <div class="tpl-i-font">
                                             视频描述:     {{$first->video_desc}}
                                                </div>
                                                <div class="tpl-i-more">
                                                    <ul>
                                                        <li title="点赞数"><span class=" fa-thumbs-o-up"> {{$first->video_like}}</span></li>
                                                        <li title="收藏数"><span class=" fa-star-o"> {{$first->video_collect}}</span></li>
                                                        <li title="播放数"><span class=" fa-television"> {{$first->video_count}}</span></li>
                                                    </ul>
                                                    <ul>
                                                        <li title="点踩数"><span class="fa-thumbs-o-down"> {{$first->video_trample}}</span></li>
                                                        <li title="评论数"><span class=" fa-commenting-o"> {{$first->video_comments}}</span></li>
                                                        <li><span class=" fa-toggle-left"> {{$first->video_count}}</span></li>
                                                    </ul>
                                                </div>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-8">
                                            
                                         <div class="tpl-block ">
                                            <div class="am-u-sm-12">
                                                <div class="am-g">
                                                    <form class="am-form" action="{{url('admin/video/index')}}" method="post" >
                                                    {{csrf_field()}}
                                                    <div class="am-form-group">
                                                        <label for="user-name" class="am-u-sm-3 am-form-label" style="color:gray;">视频 / 父类</label>
                                                        <div class="am-u-sm-9">
                                                            <select data-am-selected="{btnSize: 'sm'}" name="parent_id"  >
                                                              <option disabled value="0">根类</option>    

                                                            @foreach( $type as $item)
                                                              <option value="{{$item->type_id}}" 
                                                                
                                                            @if($item->type_id !== $first->type_id)
                                                                disabled == disabled
                                                            @endif   
                                                            @if($item->type_id == $first->type_id) 
                                                                
                                                                selected == selected                                        
                        
                                                            @endif
                                                              >{{$item->type_name}}</option>

                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                     </form>
                                                </div>
                                                    
                                                        <table class="am-table am-table-striped am-table-hover table-main">
                                                            <thead>
                                                                <tr>
                                                                    <th class="table-id">ID</th>
                                                                    <th class="table-title">视频名称</th>
                                                                    <th class="table-title">视频链接</th>
                                                                    <th class="table-set">状态操作</th>    
                                                                    <th class="table-set">操作</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                           
                                                                <tr class="parent">
                                                                    <td>{{$first->video_id}}</td>
                                                                    <td class="name">{{$first->video_name}}</td>
                                                                    <td>{{$first->video_url}}</td>
                                                                    <td>
                                                                         <div class="am-btn-group am-btn-group-xs">
                                                                                @if($first->video_status == '下线')
                                                                                <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                                    <span class="am-icon-pencil-square-o" ></span>
                                                                                    <a href="JavaScript:;"  onclick=" online({{$first->video_id}}) "> 已下线</a>
                                                                                 </button>
                                                                                @endif
                                                                                @if($first->video_status == '上线')    
                                                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                                                <a href="JavaScript:;"  onclick=" offline({{$first->video_id}}) "> 已上线</a> 
                                                                                </button>
                                                                                @endif
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="am-btn-toolbar">
                                                                            <div class="am-btn-group am-btn-group-xs">
                                                                               
                                                                                   <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                                    <span class="am-icon-pencil-square-o" ></span>
                                                                                    <a href="/admin/video/edit/{{$first->video_id}}"> 编辑</a>
                                                                                    </button>

                                                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                                                    <a href="/admin/video/delete/{{$first->video_id}}"> 删除</a> 
                                                                                    </button>
                                                                                  
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                             
                                                            </tbody>
                                                        </table>
                                                        <div class="dashboard-stat red">
                                                            <div class="visual">
                                                                <i class="am-icon-bar-chart-o"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="number"> 62% </div>
                                                                <div class="desc"> 全站排行收视率 </div>
                                                            </div>
                                                            <a class="more" href="#"> 查看更多
                                                                <i class="m-icon-swapright m-icon-white"></i>
                                                            </a>
                                                        </div>
                                                        <div class="dashboard-stat blue">
                                                            <div class="visual">
                                                                <i class="am-icon-comments-o"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="number"> 1349 </div>
                                                                <div class="desc"> 视频评论数 </div>
                                                            </div>
                                                            <a class="more" href="#"> 查看更多
                                                                <i class="m-icon-swapright m-icon-white"></i>
                                                            </a>
                                                        </div>                                

                                                   
                                                </div>
                                            
                                        </div>



                                    </div>
                                    <div class="am-u-sm-12">
                                        
                                        <div class="tpl-block ">
                                            <div class="am-u-sm-12">
                                                <div class="am-g">
                                                    <form class="am-form" action="{{url('admin/video/index')}}" method="post" >
                                                    {{csrf_field()}}
                                                    <div class="am-u-sm-12 am-u-md-3">
                                                       <div class="am-u-sm-9">
                                                            <select data-am-selected="{btnSize: 'sm'}" name="parent_id"  >
                                                              <option value="0">根类</option> 
                                                            
                                                            @foreach( $type as $item)
                                                              <option value="{{$item->type_id}}" 

                                                            @if($item->type_id == old('parent_id'))
                                                                    
                                                                selected == selected
                                                            @endif

                                                              >{{$item->type_name}}</option>
                                                               
                                                            @endforeach

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
                                                                    <th class="table-title">视频发布人</th>
                                                                    <th class="table-date am-hide-sm-only">发布时间</th>
                                                                    <th class="table-title">视频标签组</th>
                                                                    <th class="table-set">推广操作</th>    
                                                                    <th class="table-set">VIP操作</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                           
                                                                <tr class="parent">
                                                                    
                                                                    
                                                                    <td>{{$first->admin_name}}</td>
                                                                    <td>{{$first->created_at}}</td>
                                                                    <td>{{$first->video_labels}}</td>
                                                                    <td>
                                                                        <div class="am-btn-toolbar">
                                                                            <div class="am-btn-group am-btn-group-xs">
                                                                               
                                                                                    <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                                        <span class="am-icon-pencil-square-o" ></span>
                                                                                        <a href="/admin/video/detail/{{$first->video_id}}" >推广</a>
                                                                                     </button>

                                                                                    
                                                                                  
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="am-btn-toolbar">
                                                                            <div class="am-btn-group am-btn-group-xs">
                                                                               
                                                                                    <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                                        <span class="am-icon-pencil-square-o" ></span>
                                                                                        <a href="JavaScript:;"  onclick=" ue({{$first->video_id}}) "> 免费</a>
                                                                                     </button>

                                                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                                                    <a href="JavaScript:;"  onclick=" del({{$first->video_id}}) "> VIP</a> 
                                                                                    </button>
                                                                                  
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    
                                                                </tr>
                                                             
                                                            </tbody>
                                                        </table>
                                                       
                                                        <hr>

                                                   
                                                </div>
                                            
                                        </div>

                                    </div>
                                  

                                </div>
                
                            </div> 
                    
                     
                </div>
                <div class="tpl-alert"></div>
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