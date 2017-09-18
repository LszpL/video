@extends('admin.layouts')


@section('content')
        
	 <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                视频 分类列表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">分类</a></li>
                <li class="am-active">内容</li>
            </ol>
    </div>


    <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span>分类列表
                    </div>
                    


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                               <select data-am-selected="{btnSize: 'sm'}" name="parent_id"  >
                                          <option value="0">根类</option> 

                                        @foreach( $data as $item)
                                          <option value="{{$item->type_id}}" >{{$item->type_name}}</option>

                                        @endforeach
                                        </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                              <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
                                    <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            
                                            <th class="table-id">分类ID</th>
                                            <th class="table-id">父类ID</th>
                                            <th class="table-title">分类名称</th>
                                            <th class="table-type">分类描述</th>
                                            <th class="table-author am-hide-sm-only">分类路径</th>
                                            <th class="table-date am-hide-sm-only">添加日期</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)

                                        <tr>
                                            
                                            <td>{{$item->type_id}}</td>
                                            <td>{{$item->parent_id}}</td>
                                            <td>{{$item->type_name}}</td>
                                            <td>{{$item->type_desc}}</td>
                                            <td class="am-hide-sm-only">{{$item->path}}</td>
                                            <td class="am-hide-sm-only">{{$item->created_at}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                       
                                                            <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="{{url('admin/type/edit') }}/{{$item->type_id}}"> 编辑</a></button>
                                                        
                                                        
                                                            <button  class="am-btn am-btn-default am-btn-xs am-hi de-sm-only"><span class="am-icon-copy"></span><a  href="{{url('admin/type/add_son') }}/{{$item->type_id}}"> 加类</a></button>
                                                       
                                                        <a href="{{url('admin/type/delete') }}/{{$item->type_id}}">
                                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span><a  href="{{url('admin/type/delete') }}/{{$item->type_id}}"> 删除</button>
                                                          
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                     @endforeach   
                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
            <!-- 信息 -->
              
 @endsection
 @section('js')
 @parent
 
 @endsection
