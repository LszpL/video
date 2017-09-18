<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    @yield('title')

    <meta name="description" content="bilibili是一家弹幕站点,大家可以在这里找到许多的欢乐.">
    <meta name="keywords" content="B站 弹幕 字幕 AMV MAD MTV ANIME 动漫 动漫音乐 游戏 游戏解说 ACG galgame 动画 番组 新番 初音 洛天依 vocaloid">
    <meta name="referrer" content="always">
    <link rel="shortcut icon" href="https://static-s.bilibili.com/images/favicon.ico">
    <link rel="search" type="application/opensearchdescription+xml" href="https://static-s.bilibili.com/opensearch.xml" title="哔哩哔哩" />
    <link rel="stylesheet" href="{{asset('home/user/style/css/base.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/style.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/base01.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/concerned.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/dialog_tips.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/upload.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/user_base.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/user_center.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/video.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/x_dialog.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('home/user/style/css/zclc2.css')}}" type="text/css"/>

    <script type="text/javascript" src="{{asset('home/user/style/js/alertplate.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/user/style/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/user/style/js/sea.config.js')}}"></script>
    <script id="seajsnode" type="text/javascript" src="{{asset('home/user/style/js/sea.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/user/style/js/tvu.uploader.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/user/style/js/txv.core.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/user/style/js/txv.sea.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/user/style/js/uploader.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/user/style/js/uploadExtend.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('Home')}}" type="text/css"/>


    <style>
        .security-right{
            min-height: 928px!important;
        }

        .security-list li a .al-vip {
            background: url(style/images/img/icons_m.png) -23px -975px no-repeat;
        }

        .security-list li a .al-vip.check-t {
            background-position: -87px -975px;
        }

        .security-list li a .al-vipscore {
            background: url(style/images/img/icons_m.png) -23px -1231px no-repeat;
        }

        .security-list li a .al-vipscore.check-t {
            background-position: -87px -1231px;
        }

        .security-list li a .al-gz{
            background: url(style/images/img/icons_m.png) -792px -80px no-repeat;
        }

        .security-list li a .al-gz.check-t{
            background: url(style/images/img/icons_m.png) -855px -80px no-repeat;
        }

        .viptips {
            display: none;
            position: absolute;
            top: 4px;
            right: -8px;
            width: 42px;
            height: 16px;
            border-radius: 20px;
            z-index: 999;
            background: url(style/images/img/guoqi.png) no-repeat;
        }

        .isnewvip {
            display: none;
            position: absolute;
            top: 4px;
            right: -8px;
            width: 42px;
            height: 16px;
            border-radius: 20px;
            z-index: 999;
            background: url(style/images/img/icons_m.png) -144px -856px no-repeat;
        }
    </style>
</head>
<body>
<div class="z_top_container">
    <div class="z_top">
        <div class="z_header">
            <div class="z_top_nav">
                <ul>
                    <li class="home">
                        <a class="i-link" href="//www.bilibili.com/index.html"><span>主站</span></a>
                    </li>
                    <li class="hbili"><a class="i-link" href="http://h.bilibili.com/" title="画友">画友</a></li>

                    <li class="live" hasframe="true">
                        <a class="i-link" target="_blank" href="//live.bilibili.com" title="直播">直播</a>
                        <div class="i_div stream" data-frame="stream"></div>
                    </li>
                    <li class="b-ml"><a class="i-link" target="_blank" href="/home.blade.php/show.bilibili.com/platform/home.html" title="会员购">会员购</a></li>
                    <li class="b-zb"><a class="i-link" target="_blank" href="//bmall.bilibili.com/#!/" title="周边">周边</a></li>
                    <li class="shouji">
                        <a class="i-link" target="_blank" href="//app.bilibili.com" title="移动端">移动端</a>
                        <div class="mobile-p-box"><div class="mobile-p-qrcode"></div></div>
                    </li>
                    <li class="b-mz"  hasframe="true">
                        <a class="i-link" target="_blank" href="//bangumi.bilibili.com/moe/2017/index" title="萌战">萌战</a>
                        <i class="new"></i>
                        <i class="dot"></i>
                        <div class="i_div mz" data-frame="mz"></div>
                    </li>
                </ul>

            </div>
            <div class="uns_box">
                <ul class="menu">
                    <li id="i_menu_profile_btn" guest="no" class="u-i i_user" i_menu="#i_menu_profile">
                        <a class="i-link" href="//space.bilibili.com/" target="_blank">
                            <img class="i_face">
                        </a>
                        <div id="i_menu_profile" class="i_menu">
                            <div class="i_menu_bg_t"></div>
                            <div class="info clearfix"><div class="uname"></div><div class="coin"></div></div>
                            <div class="member-menu-wrp">
                                <ul class="member-menu">
                                    <li><a href="https://account.bilibili.com/site/home" target="_blank" class="account"><i class="b-icon b-icon-p-account"></i>个人中心</a></li>
                                    <li><a href="//member.bilibili.com/v/#!/article" target="_blank" class="member"><i class="b-icon b-icon-p-member"></i>投稿管理</a></li>
                                    <li><a href="https://pay.bilibili.com/" target="_blank" class="wallet"><i class="b-icon b-icon-p-wallet"></i>B币钱包</a></li>
                                    <li><a href="//link.bilibili.com/p/center/index" target="_blank" class="live"><i class="b-icon b-icon-p-live"></i>直播中心</a></li>
                                    <li><a href="/home.blade.php/show.bilibili.com/platform/home.html" target="_blank" class="ticket"><i class="b-icon b-icon-p-ticket"></i>会员购订单</a></li>
                                </ul>
                            </div>
                            <div class="member-bottom">
                                <a class="logout" href="https://account.bilibili.com/login?act=exit">退出</a>
                            </div>
                        </div>
                    </li>
                    <li id="i_menu_become_vip" guest="no" i_menu="become_vip" class="u-i">
                        <a class="i-link" href="//big.bilibili.com/site/big.html" target="_blank">成为大会员</a>
                    </li>
                    <li id="i_menu_community_msg_btn" guest="no" i_menu="community_msg" class="u-i">
                        <a class="i-link" href="//message.bilibili.com" target="_blank">消息</a>
                    </li>
                    <li id="i_menu_msg_btn" guest="no" i_menu="#dyn_wnd" class="u-i">
                        <div class="num" id="dynamic_num_total"></div>
                        <a class="i-link" href="//www.bilibili.com/account/dynamic" target="_blank">动态</a>
                    </li>
                    <li id="i_menu_watchLater_btn" guest="no" class="u-i" style="display:list-item">
                        <a class="i-link" href="//www.bilibili.com/watchlater/#/list" target="_blank">稍后再看</a>
                    </li>
                    <li id="i_menu_fav_btn" guest="no" i_menu="#i_menu_fav" class="u-i">
                        <a class="i-link" href="//space.bilibili.com/#!/favlist" target="_blank">收藏夹</a>
                    </li>
                    <li id="i_menu_login_reg" guest="yes" class="u-i">
                        <a id="i_menu_login_btn" class="i-link login" href="https://account.bilibili.com/login"><span>登录</span></a><i class="s-line"></i><a id="i_menu_register_btn" class="i-link reg" href="https://www.bilibili.com/register"><span>注册</span></a>
                    </li>
                    <li id="i_menu_history_btn" class="u-i">
                        <a class="i-link" href="//www.bilibili.com/account/history">历史</a>
                    </li>
                    <li class="u-i b-post">
                        <a class="i-link" href="//member.bilibili.com/v/video/submit.html" target="_blank">投 稿</a>
                        <ul class="s-menu">
                            <li class="article"><a href="//member.bilibili.com/v/#/text-apply" target="_blank"><i class="b-icon b-icon-art"></i><em>专栏投稿</em></a></li>
                            <li class="music-up"><a href="//www.bilibili.com/audio/submit/" target="_blank"><i class="b-icon b-icon-music"></i><em>音频投稿</em></a></li>
                            <li><a href="//member.bilibili.com/v/video/submit.html" target="_blank"><i class="b-icon b-icon-vp"></i><em>视频投稿</em></a></li>
                            <li><a href="//member.bilibili.com/v/#/article" target="_blank"><i class="b-icon b-icon-vm"></i><em>投稿管理</em></a></li>
                            <li><a href="//member.bilibili.com/v/" target="_blank"><i class="b-icon b-icon-vc"></i><em>创作中心</em></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<div class="top_bg">
    <div class="top"></div>
</div>
<div class="security_content">
    <div class="security-left">
        <ul class="security-list">
            <li class="f-list" style="cursor: default;"><a  class="first-level" style="color: #99a2aa;cursor: default;">个人中心</a>
                <ul class="child-list">
                    <li>

                        <a href="{{url('home/user/home')}}" id="home" rec-linkid='account_tab_index_click' title="首页">

                            <i class="al-sy"></i>
                            <span>首<b class="nbsp"></b>页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="big" style="position:relative">
                            <i class="al-vip"></i>
                            <span style="letter-spacing: 7px;">大会员</span>
                            <span class="viptips" id="viptips"></span>
                            <span class="isnewvip" id="isnewvip"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="points">
                            <i class="al-vipscore"></i>
                            <span>会员积分</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('home/user/message')}}" id="setting">



                            <i class="al-info"></i>
                            <span>我的信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="face">
                            <i class="al-tx"></i>
                            <span>我的头像</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" id="concerned">
                            <i class="al-gz"></i>
                            <span>上传管理</span>
                        </a>
                    </li>

                    <li>

                        <a href="{{url('home/user/add')}}" id="blacklist">


                            <i class="al-bl"></i>
                            <span>上传视频</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('home/user/myupload')}}" id="coin">



                            <i class="al-coin"></i>
                            <span>我的上传</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('home/user/history')}}" id="record">
                            <i class="al-jl"></i>
                            <span>观看历史</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('home/user/comment')}}" id="record">
                            <i class="al-jl"></i>
                            <span>我的评论</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>

   @section('content')

    @show

</div>
<div id="global-mask"></div>
<div class="footer">
    <div class="footer-wrp">
        <div class="footer-cnt clearfix">
            <ul class="boston-postcards">
                <li>
                    <div class="tips">bilibili</div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/aboutUs.html">关于我们</a></div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/friends-links.html">友情链接</a></div>
                    <div class="cards"><a target="_blank" href="//bmall.bilibili.com/#!/">哔哩哔哩周边</a></div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/contact.html">联系我们</a></div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/join.html">加入我们</a></div>
                    <div class="cards"><a target="_blank" href="https://account.bilibili.com/site/ident.html">官方认证</a></div>
                </li>
                <li>
                    <div class="tips">传送门</div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/help.html">帮助中心</a></div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/video/av120040/">高级弹幕</a></div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/activity_list.html">活动专题页</a></div>
                    <div class="cards"><a target="_blank" href="//www.bilibili.com/blackboard/copyright.html">侵权申诉</a></div>
                    <div class="cards"><a target="_blank" href="https://account.bilibili.com/answer/addq">分院帽计划</a></div>
                    <div class="cards"><a target="_blank" href="//activity.bilibili.com/">活动中心</a></div>
                    <div class="cards"><a target="_blank" href="http://link.acg.tv">用户反馈论坛</a></div>
                    <div class="cards"><a target="_blank" href="http://h.bilibili.com/wallpaper?action=list">壁纸站</a></div>
                    <div class="cards"><a target="_blank" href="http://www.bilibili.com/html/cele.html">名人堂</a></div>
                </li>
                <li>
                    <div class="block right">
                        <a target="_blank" href="//app.bilibili.com/">
                            <div class="phone">
                                <div class="pic"></div>
                                <em>手机端下载</em>
                                <div class="qrcode-box-wrp">
                                    <div class="qrcode-box qrcode-app">
                                        <div class="qrcode-box-arrow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a target="_blank" href="http://weibo.com/bilibiliweb">
                            <div class="weibo">
                                <div class="pic"></div>
                                <em>新浪微博</em>
                                <div class="qrcode-box-wrp">
                                    <div class="qrcode-box qrcode-weibo">
                                        <div class="qrcode-box-arrow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a id="weixin">
                            <div class="weixin">
                                <div class="pic"></div>
                                <em>官方微信</em>
                                <div class="qrcode-box-wrp bigvip-qrcode">
                                    <div class="qrcode-box qrcode-weixin">
                                        <div class="qrcode-box-arrow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="partner">
                <div class="block left" style="padding-top: 0px;">
                    <div class="partner-banner"></div>
                </div>
                <div class="block left" style="margin: 0px 68px 0 115px;line-height:24px;float: none;">
                    <p>广播电视节目制作经营许可证：<span>（沪）字第1248号 </span> | 网络文化经营许可证：<span>沪网文[2013]0480-056号</span> | 信息网络传播视听节目许可证：<span>0910417</span> | 互联网ICP备案：<span>沪ICP备13002172号-3</span> 沪ICP证：<span>沪B2-20100043</span> | 违法不良信息举报邮箱：help@bilibili.com | 违法不良信息举报电话：4000233233转3</p>
                    <p><a href="http://www.shjbzx.cn" target="_blank"><i class="icons-footer icons-footer-report"></i><span> 上海互联网举报中心</span></a> | <a href="http://jb.ccm.gov.cn/" target="_blank">12318 全国文化市场举报网站</a> | <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011502001911"><img src="style/images/beiantubiao.png" style="vertical-align: top;"> 沪公网安备 31011502001911号</a> | <a href="mailto:userreport@bilibili.com">儿童色情信息举报专区</a></p>
                    <p><a href="http://report.12377.cn:13225/toreportinputNormal_anis.do" target="_blank">网上有害信息举报专区：<img src="style/images/12377.png" width="16" height="16" style="vertical-align: sub;"> 中国互联网违法和不良信息举报中心</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('home_temp/style/js/alertplate.js')}}"></script>
<script type="text/javascript" src="{{asset('Home')}}"></script>
<script type="text/javascript" src="{{asset('home_temp/style/js/sea.config.js')}}"></script>
<script id="seajsnode" type="text/javascript" src="{{asset('home_temp/style/js/sea.js')}}"></script>
<script type="text/javascript" src="{{asset('home_temp/style/js/tvu.uploader.js')}}"></script>
<script type="text/javascript" src="{{asset('home_temp/style/js/txv.core.js')}}"></script>
<script type="text/javascript" src="{{asset('home_temp/style/js/txv.sea.js')}}"></script>
<script type="text/javascript" src="{{asset('home_temp/style/js/uploader.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home_temp/style/js/uploadExtend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home_temp/history/style/css/txv.core.js?(none)')}}"></script>
<script src="{{asset('home_temp/history/style/css/txv.sea.js')}}"></script>

@yield('js')
</body>
</html>