@extends('admin.layouts')
<link rel="stylesheet" href="{{asset('admin_temp/assets/css/ch-ui.admin.css')}}" />
<link rel="stylesheet" href="{{asset('admin_temp/assets/css/font-awesome.min.css')}}">
@section('content')
    <div class="tpl-portlet-components">
        <div class="portlet-title">


            <div class="tpl-portlet-components">
                <div class="portlet-title" >
                    <div class="caption font-green bold" style="height:800px;">
                        <span class="am-icon-code"></span> 网站配置
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">

                                <div class="mark">
                                    <ul>

                                    </ul>
                                </div>

                            <div class="result_wrap">
                                <form action="{{url('admin/config')}}" method="post">
                                    {{csrf_field()}}
                                    <table class="add_tab">
                                        <tbody>


                                        <tr>
                                            <th><i class="require">*</i>标题：</th>
                                            <td>
                                                <input type="text"  name="conf_title" value="">
                                                <span><i class="fa fa-exclamation-circle yellow"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><i class="require">*</i>名字：</th>
                                            <td>
                                                <input type="text"  name="conf_name">
                                                <span><i class="fa fa-exclamation-circle yellow"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>类型：</th>
                                            <td>
                                                <label for=""><input type="radio" checked onclick="showTr()" name="field_type" value="input">input</label>
                                                <label for=""><input type="radio" onclick="showTr()" name="field_type" value="textarea">textarea</label>
                                                <label for=""><input type="radio" onclick="showTr()" name="field_type" value="radio">radio</label>
                                            </td>
                                        </tr>
                                        <tr class="field_value" style="display:none;">
                                            <th>类型值：</th>
                                            <td>
                                                <input type="text" name="field_value">
                                                <span><i class="fa fa-exclamation-circle yellow">类型值只有在radio的情况下才需要配置，格式 1|开启,0|关闭</i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>排序：</th>
                                            <td>
                                                <input type="text" name="conf_order">
                                                <span><i class="fa fa-exclamation-circle yellow"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>说明：</th>
                                            <td>
                                                <textarea class="lg"  name="conf_tips"></textarea>
                                                <p>标题可以写30个字</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <td>
                                                <input type="submit"  value="提交">
                                                <input type="button" class="back" onclick="history.go(-1)" value="返回">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="tpl-alert"></div>
    </div>


@endsection
<script>
    showTr();
    function showTr(){
//        如果单选按钮的值为input 和textarea ====>  class= field_value的tr隐藏
//        如果单选按钮的值为radio ====>  class= field_value的tr显示

        var val = $('input[name=field_type]:checked').val();
        //alert(val);

        if(val == 'radio'){
            $('.field_value').show();
        }else{
            $('.field_value').hide();
        }

    }
</script>

