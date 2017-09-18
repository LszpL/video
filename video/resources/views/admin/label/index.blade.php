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
                                <input type="text" class="form-control form-control-solid"  value="" placeholder="搜索...">
                            </div>
                        </div>
                    </div>
    

                </div>


                <div class="tpl-block ">
                    <div class="am-u-sm-12">




                        <div class="am-g">
                            <form class="am-form" action="{{url('admin/label/index')}}" method="post" >
                            {{csrf_field()}}
                            <div class="am-u-sm-12 am-u-md-3">
                                <div class="am-form-group">
                                   <select data-am-selected="{btnSize: 'sm'}" name="count"  >
                                        <option  
                                        @if( $search['count'] == 5 ) 
                                            selected 
                                        @endif
                                          value="5">5</option> 
                                        <option value="10"
                                        @if( $search['count'] == 10 ) 
                                            selected 
                                        @endif
                                        >10</option> 
                                        <option 
                                        @if( $search['count'] == 20 ) 
                                            selected 
                                        @endif
                                        value="20">20</option> 
                                           
                                   </select>
                                </div>
                            </div>
                            <div class="am-u-sm-12 am-u-md-3">
                                <div class="am-input-group am-input-group-sm">
                                  <input type="text" class="am-form-field" name="keyword" value="{{$search['keyword']}}">
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
                                            
                                            <th class="table-id">ID</th>
                                            <th class="table-title">标签名称</th>
                                            <th class="table-date am-hide-sm-only">添加日期</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)

                                        <tr class="parent">
                                            
                                            <td>{{$item->label_id}}</td>
                                            <td class="name">{{$item->label_name}}</td>
                                            
                                            <td class="am-hide-sm-only">{{$item->created_at}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                       
                                                            <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"  >
                                                                <span class="am-icon-pencil-square-o" ></span>
                                                                <a href="JavaScript:;"  onclick=" ue({{$item->label_id}}) "> 编辑</a>
                                                             </button>

                                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                            <a href="JavaScript:;"  onclick=" del({{$item->label_id}}) "> 删除</a> 
                                                            </button>
                                                          
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                     @endforeach   
                                    </tbody>
                                </table>
                                <div class="page_list">
                                    {{$data->appends($search)->render() }}

                                </div>
                                <hr>

                           
                        </div>
                    
                </div>

            </div>


@endsection


@section('js')


<script type="text/javascript">
    

        function ue (id){

            layer.prompt({title: '标签修改', formType: 3},function(val, index){


            $.ajax({
                type:'post',
                data:{id:id,name:val,_token:'{{csrf_token()}}' },

                url:'/admin/label/update',
                success:function(data){
                   layer.msg(data);
                 location.href = location.href;  
                 
                },
                dateType:'json'
            });    
            layer.close(index);
            
          
            });

        }

        function del (id){



            layer.confirm('您确定要删除吗？', 
                {
                  btn: ['确认','取消'] //按钮
                },

                 function()
                 {

                   
                    $.ajax({
                        type:'post',
                        data:{id:id,_token:'{{csrf_token()}}' },
                        url:'/admin/label/delete',
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
