@extends('home.user.layouts')
@section('content')
    @if(session('info'))
        <div  id="alertError"  class="danger">

            {{session('info')}}
        </div>
    @endif
    <div class="security-right">
        <div class="sr-t">
            <span class="tit-b"></span><span class="acc-sec">我的上传</span>
        </div>
        <table class="table-normal table-styleW">
            <thead>
                <tr>
                    <td style="width: 29.3%;"><div>ID</div></td>
                    <td style="width: 26.7%;"><div>标题</div></td>
                    <td style="width: 29.3%;"><div>内容</div></td>
                    <td style="width: 14.7%;"><div>状态</div></td>
                </tr>
            </thead>
            <tbody class="list_js">
                <tr>
                    <td><div>2017-09-16 21:25:39</div></td>
                    <td><div>121.69.*.*</div></td>
                    <td><div>中国北京电信</div></td>
                    <td><div></div></td>
                </tr>
                <tr>
                    <td><div>2017-09-15 20:25:35</div></td>
                    <td><div>121.69.*.*</div></td>
                    <td><div>中国北京电信</div></td>
                    <td><div></div></td>
                </tr>
                <tr>
                    <td><div>2017-09-13 15:29:25</div></td>
                    <td><div>106.121.*.*</div></td>
                    <td><div>中国北京电信</div></td>
                    <td><div></div></td>
                </tr>

            </tbody>
        </table>

    </div>

@endsection