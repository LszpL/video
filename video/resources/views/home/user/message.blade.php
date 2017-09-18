@extends('home/user/layouts')
@section('content')
	<form onsubmit="return false;">
		<div class="security-right">
			<div class="sr-t">
				<span class="tit-b"></span><span class="acc-sec">我的信息</span>
			</div>
			<div class="sr-b">
				<ul>
					<li>
						<div class="sb-info">
							<p class="sbi-l">昵称：</p>
							<div class="sbi-m">
								<span><input class="user-id" type="text" name="uname" value=""></span>
							</div>
							<p class="sbi-r">注：昵称修改不可太长</p>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">用户名：</p>
							<div class="sbi-m">
								<span>bili_43892096708</span>
							</div>
							<p class="sbi-r">注：用户名为本人手机号</p>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">我的签名：</p>
							<div class="sbi-m">
								<textarea   name="sign" id="" cols="30" rows="10" class="my-sign"  >修改</textarea>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">性别：</p>
							<input type="hidden" name="sex" id="select_sex" value="保密">
							<div class="sbi-m">
								<ul class="sex" id="sex_ul">
									<li   name="sex"  onclick="showSex()"    value="男"   class="white" >男</li>
									<li   name="sex"  onclick="showSex()"    value="女"   class="white" >女</li>
									<li   name="sex"  onclick="showSex()"    value="保密"   data-sex="保密" class="white">保密</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">出生日期：</p>
							<div class="sbi-m">
								<span><span class="Zebra_DatePicker_Icon_Wrapper" style="display: inline-block; position: relative; float: none; top: auto; right: auto; bottom: auto; left: auto;"><input class="user-id sb-ys" name="birthday" type="text" value="1930-01-01" id="user-birthday" readonly="readonly" style="position: relative; top: auto; right: auto; bottom: auto; left: auto;"><button type="button" class="Zebra_DatePicker_Icon Zebra_DatePicker_Icon_Inside_Right" style="top: 7.5px; right: 0px;">Pick a date</button></span></span>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">所在地：</p>
							<div class="sbi-m">
								<div class="control-btn-select area">
									<span>选择一级地区</span> <em></em>
									<select name="province" id="province" onchange="selNext(document.getElementById('city'),this.value);selectInit();">
										<option value="0">选择一级地区</option>
										<option value="500">北京市</option>
										<option value="1000">上海市</option>
										<option value="1500">天津市</option>
										<option value="2000">重庆市</option>
										<option value="2500">广东省</option>
										<option value="3000">福建省</option>
										<option value="3500">浙江省</option>
										<option value="4000">江苏省</option>
										<option value="4500">山东省</option>
										<option value="5000">辽宁省</option>
										<option value="5500">江西省</option>
										<option value="6000">四川省</option>
										<option value="6500">陕西省</option>
										<option value="7000">湖北省</option>
										<option value="7500">河南省</option>
										<option value="8000">河北省</option>
										<option value="8500">山西省</option>
										<option value="9000">内蒙古</option>
										<option value="9500">吉林省</option>
										<option value="10000">黑龙江</option>
										<option value="10500">安徽省</option>
										<option value="11000">湖南省</option>
										<option value="11500">广西区</option>
										<option value="12000">海南省</option>
										<option value="12500">云南省</option>
										<option value="13000">贵州省</option>
										<option value="13500">西藏区</option>
										<option value="14000">甘肃省</option>
										<option value="14500">宁夏区</option>
										<option value="15000">青海省</option>
										<option value="15500">新疆区</option>
										<option value="16000">香港区</option>
										<option value="16500">澳门区</option>
										<option value="17500">台湾省</option>
									</select>
								</div>
								<div class="control-btn-select area">
									<span>选择具体地区</span> <em></em> <select id="city" name="city" onchange="selectInit();">
										<option value="0">选择具体地区</option>
									</select>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">感情状况：</p>
							<div class="sbi-m">
								<div class="control-btn-select">
									<span>--请选择--</span> <em></em>
									<select name="marital" id="marital" class="enumselect">
										<option value="0" selected="selected">--请选择--</option>
										<option value="1">未婚</option>
										<option value="2">已婚</option>
										<option value="3">离异</option>
										<option value="4">丧偶</option>
									</select>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="sb-info">
							<p class="sbi-l">交友目的：</p>
							<div class="sbi-m">
								<div class="control-btn-select">
									<span>--请选择--</span> <em></em>
									<select name="datingtype" id="datingtype" class="enumselect">
										<option value="0" selected="selected">--请选择--</option>
										<option value="1">网友</option>
										<option value="2">恋人</option>
										<option value="3">玩伴</option>
										<option value="4">共同兴趣</option>
										<option value="5">男性朋友</option>
										<option value="6">女性朋友</option>
									</select>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="sb-line"></div>
			<input type="submit" class="sb-save" value="保存" style="position: absolute;bottom:80px;display: block;">
		</div>
	</form>
@endsection
@section('js')
{{--<script>--}}
	{{--showSex();--}}
	{{--function showSex(){--}}
			{{--if()--}}


	{{--}--}}


{{--</script>--}}
@endsection