<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{$title}}</title>

<link href="{{asset('home/logins/css/style.css')}}" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{asset('home/logins/js/jquery-1.7.2.js')}}"></script>
<script type="text/javascript" src="{{asset('home/layer/layer.js')}}"></script>

</head>
<body>
<script type="text/javascript">
var FancyForm=function(){
  return{
    inputs:".reg-form input",
    setup:function(){
      var a=this;
      this.inputs=$(this.inputs);
      a.inputs.each(function(){
        var c=$(this);
        a.checkVal(c)
      });
      a.inputs.live("keyup blur",function(){
        var c=$(this);
        a.checkVal(c);
      });
    },checkVal:function(a){
      a.val().length>0?a.parent("div").addClass("val"):a.parent("div").removeClass("val")
    }
  }
}();
</script>
  <div class="container" >
    <div class="register-box" style="position:absolute;top:-500px;right:266px;">
      <div class="reg-slogan">
        用户注册</div>
      <div class="reg-form" id="js-form-mobile">
      <form action="{{url('/home/dologin')}}" method="post">
      <!-- 提示信息 -->
        <div >
            @if(session('info'))
            <p id="session">{{session('info')}}</p>
            @endif
        </div>
        <!-- 验证信息 -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class= "info" >{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      {{csrf_field()}}
        <br>
        <br>
        <div class="cell" >
          <label for="js-mobile_ipt">请输入手机号码</label>
          <input type="text" name="login_name" id="js-mobile_ipt" class="text"  value="{{old('login_name')}}" onclick="layer.tips('请输入11位手机号码','.text',{tips:[2,'#92afed'],time:5000});" />
        </div>
        <div class="cell">
          <label for="js-mobile_pwd_ipt">请输入密码</label>
          <input type="password" name="login_pwd" id="js-mobile_pwd_ipt" class="text lp" value="" onclick="layer.tips('密码长度应在6-18个字符之间','.lp',{tips:[2,'#92afed'],time:5000});" />
        </div>
        <div class="cell">
          <label for="js-mail_ipt">请确认密码</label>
          <input type="password" name="re_pwd" id="js-mail_ipt" class="text rp" value="" onclick="layer.tips('确认密码长度应在6-18个字符之间','.rp',{tips:[2,'#92afed'],time:5000});" />
        </div>
        <!-- !短信验证码 -->
        <div class="cell vcode">
          <label for="js-mobile_vcode_ipt" >输入手机验证码</label>
          <input type="text" name="code" id="js-mobile_vcode_ipt" class="text cd" maxlength="6" onclick="layer.tips('请输入手机验证码','.cd',{tips:[4,'#92afed'],time:5000});" />
             <!--        <a onclick="javascript:re_captcha();">  
            <img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6" >  
            </a> -->
          <a href="javascript:;" id="js-get_mobile_vcode" class="button btn-disabled">
          免费获取验证码</a>
          </div>
          <button type="submit" id="js-mobile_btn"  class="button btn-white1" style="padding:0 146px;">
          注册</button>
        </form>
      </div>
  </div>
</div>

<script type="text/javascript">
// function a(){
//   // alert(111);
// // tips层

// // layer.msg('玩命提示中');
// }

$(document).ready(function() {
  FancyForm.setup();
});
function re_captcha() {  
    $url = "{{ URL('/code/captcha') }}";
    $url = $url + "/" + Math.random();
        document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
    }
</script>

</body>
</html>
