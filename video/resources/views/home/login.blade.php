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
<div class="wrap">
  <div class="banner-show" id="js_ban_content">
    <div class="cell bns-01">
      <div class="con">
      </div>
    </div>
    <div class="cell bns-02" style="display:none;">
      <div class="con">
        <a href="" target="_blank" class="banner-link">
        <i>视频</i></a> </div>
    </div>
    <div class="cell bns-03" style="display:none;">
      <div class="con">
        <a href="" target="_blank" class="banner-link">
        <i>云上传</i></a> </div>
    </div>
  </div>
  <div class="banner-control" id="js_ban_button_box">
    <a href="javascript:;" class="left">左</a>
    <a href="javascript:;" class="right">右</a>
  </div>
<script type="text/javascript">
;(function(){
  
  var defaultInd = 0;
  var list = $('#js_ban_content').children();
  var count = 0;
  var change = function(newInd, callback){
    if(count) return;
    count = 2;
    $(list[defaultInd]).fadeOut(400, function(){
      count--;
      if(count <= 0){
        if(start.timer) window.clearTimeout(start.timer);
        callback && callback();
      }
    });
    $(list[newInd]).fadeIn(400, function(){
      defaultInd = newInd;
      count--;
      if(count <= 0){
        if(start.timer) window.clearTimeout(start.timer);
        callback && callback();
      }
    });
  }
  
  var next = function(callback){
    var newInd = defaultInd + 1;
    if(newInd >= list.length){
      newInd = 0;
    }
    change(newInd, callback);
  }
  
  var start = function(){
    if(start.timer) window.clearTimeout(start.timer);
    start.timer = window.setTimeout(function(){
      next(function(){
        start();
      });
    }, 4000);
  }
  
  start();
  
  $('#js_ban_button_box').on('click', 'a', function(){
    var btn = $(this);
    if(btn.hasClass('right')){
      //next
      next(function(){
        start();
      });
    }
    else{
      //prev
      var newInd = defaultInd - 1;
      if(newInd < 0){
        newInd = list.length - 1;
      }
      change(newInd, function(){
        start();
      });
    }
    return false;
  });
  
})();
</script>

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

  <div class="container">
    <div class="register-box">
      <div class="reg-slogan">
        用户登录</div>
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
        <div class="cell">
          <label for="js-mobile_ipt">请输入你的登录名</label>
          <input type="text" name="login_name" id="js-mobile_ipt" class="text"  value="{{old('login_name')}}" onclick="layer.tips('请输入11位手机号码','.text',{tips:[1,'#92afed'],time:3000});" />
        </div>
        <br>
        <div class="cell">
          <label for="js-mobile_pwd_ipt">请输入密码</label>
          <input type="password" name="login_pwd" id="js-mobile_pwd_ipt" class="text pd" value="" onclick="layer.tips('密码长度应在6-18个字符之间','.pd',{tips:[1,'#92afed'],time:3000});" />
          <!-- <input type="text" name="passwd" id="js-mobile_pwd_ipt_txt" class="text" maxlength="20" style="display:none;" /> -->
          <!-- <b class="icon-form ifm-view js-view-pwd" title="查看密码" style="display: none">
          查看密码</b> --> 
          </div>
          <br>
        <!-- !短信验证码 -->
        <div class="cell vcode">
          <label for="js-mobile_vcode_ipt">输入验证码</label>
          <input type="text" name="code" id="js-mobile_vcode_ipt" class="text cd" maxlength="6" onclick="layer.tips('请输入4位验证码','.cd',{tips:[1,'#92afed'],time:3000});" />
                    <a onclick="javascript:re_captcha();">  
            <img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6" >  
            </a>
          <!-- <a href="javascript:;" id="js-get_mobile_vcode" class="button btn-disabled">
          免费获取验证码</a> -->
          </div>
          <button type="submit" id="js-mobile_btn"  class="button btn-green">
          立即登录</button>
          <a href="{{url('/home/zhuce')}}"><button type="button" class="button btn-white" style="margin-left: 40px;">
          立即注册</button></a>
        </form>
      </div>
  </div>
</div>

<script type="text/javascript">
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
