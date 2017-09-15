<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config('app.name')}} - {{$title}}</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="{{asset('admin/assets/i/favicon.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{asset('admin/assets/i/app-icon72x72@2x.png')}}">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/amazeui.min.css')}}" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/admin.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				Video <span> Login</span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">
			<i>Log In </i>
		</div>
		<div class="am-u-sm-10 login-am-center">
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
			<form class="am-form" action="{{url('/admin/dologin')}}" method="post">
				{{csrf_field()}}
				<fieldset>
					<div class="am-form-group">
						<input type="text"  name="username" id="doc-ipt-email-1" placeholder="输入用户名" 
						value="{{old('username')}}">
					</div>
					<div class="am-form-group">
						<input type="password" name="password" id="doc-ipt-pwd-1" placeholder="输入密码" style="border-radius: 0px 0px">
					</div>
					<div class="am-form-group">
						
						<input type="text" class="code" name="code" placeholder="输入验证码" style="width:381px;" />
						<!-- <span><i class="fa fa-check-square-o"></i></span> -->
						<!-- <img src="#" alt=""> -->
					</div>
					<a onclick="javascript:re_captcha();">  
						<img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6" style="position:relative;left:378px;top:-42px;">  
						</a> 
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/amazeui.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/app.js')}}"></script>
  <script src="{{asset('admin/layer/layer.js')}}"></script>
  <script type="text/javascript">  
	function re_captcha() {  
	    $url = "{{ URL('/code/captcha') }}";
	    $url = $url + "/" + Math.random();
	        document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
	    }

	    var str = '';
        if(typeof($('.info').html()) == 'string' && $('.info').html() !== null    ){
               $('.info').each(function(i,n){
                 str += $(n).html()+'<br>';         
            });
                layer.alert(str, {icon: 5}); 
        }

        //提示信息
         if(typeof($('#session').html()) == 'string' &&  $('#session').html() !== null )
      {
            layer.alert($('#session').html(), {icon: 8});
      }
</script>
</body>

</html>