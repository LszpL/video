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
                        <span class="am-icon-code"></span> 标签添加
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

                    <div class="am-g tpl-amazeui-form">

						
                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="{{url('admin/label/doadd')}}" method="post">
								{{csrf_field()}}
								<div class="am-form-group">
	                               
                           		</div>

                                <div class="am-form-group">
                                    
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">添加 / 标签</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="label_name" placeholder="输入你要添加的标签 " value="">
                                       
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">更新提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
 
@endsection