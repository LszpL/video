@extends('admin.layouts')

@section('content')
    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            后台首页
        </div>
        <ol class="am-breadcrumb">
            <li><a href="{{url('admin')}}" class="am-icon-home">首页</a></li>
        </ol>
    </div>
@endsection
