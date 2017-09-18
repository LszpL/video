@extends('home.layouts')


@section('content')
  <nav id="nav">
    <div class="page-width clearfix">
      <ul class="nav-list">
        <li class="item item-home">
          <a href="#" class="link">首页</a>
        </li>

        @foreach($types as $k=> $item)

        <li class="item">
          <a href="#" class="link">
            <div class="num"><i>887</i></div>
            {{$item['value']['type_name']}}
          </a>
          <ul class="nav-item__hover">
            <li>
            @if($k == 'value')
            @foreach($item as $it)
              <a href="#">
                <em>MAD·AMV<i></i></em>
              </a>
            </li>
            @endforeach
            @endif
          </ul>
        </li>
        @endforeach



         
        <li class="item item-square">
          <a href="#" class="link">广场</a>
          <div class="nav-square__hover">
            <ul>
              <li><a href="#"><i class="icon-activity"></i>活动中心</a></li>
              <li><a href="#"><i class="icon-game"></i>游戏中心</a></li>
              <li><a href="#"><i class="icon-news"></i>新闻中心</a></li>
              <li><a href="#"><i class="icon-friend"></i>画友</a></li>
              <li><a href="#"><i class="icon-tv"></i>芒果TV</a></li>
            </ul><!-- 
            <a href="#" class="activity"><img src="{{asset('home_temp/images/cont/nav-square__img.jpg')}}" alt="#"></a> -->
          </div>
        </li>
        <li class="item item-live">
          <a href="#" class="link">直播</a>
          <ul class="nav-item__hover">
            <li>
              <a href="#">
                <em>推荐主播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>手机直播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>绘画专区<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>唱见舞见<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>御宅文化<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>单机联机<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>网络游戏<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>电子竞技<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>手游直播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>放映厅<i></i></em>
              </a>
            </li>
          </ul>
        </li>
        <li class="item item-room">
          <a href="#" class="link">小黑屋</a>
        </li>
      </ul>
      <div class="nav-gif"><img src="{{asset('home_temp/images/cont/nav_img.gif')}}" alt="求领养"></div>
    </div>
  </nav>

  <div id="banner">
    <div class="page-width clearfix">
      <div class="slider fl">
        <div class="slider-img">
          <a href="#" slider-title="pic1"><img src="{{asset('home_temp/images/cont/slider_img1.png')}}" alt="#"></a>
          <a href="#" slider-title="pic2"><img src="{{asset('home_temp/images/cont/slider_img2.png')}}" alt="#"></a>
          <a href="#" slider-title="pic3"><img src="{{asset('home_temp/images/cont/slider_img3.png')}}" alt="#"></a>
          <a href="#" slider-title="pic4"><img src="{{asset('home_temp/images/cont/slider_img4.png')}}" alt="#"></a>
        </div>
        <div class="slider-title"><p>pic1</p></div>
        <div class="slider-btn">
          <span class="cur"></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="#" class="slider-more">More</a>
      </div>
      <div class="banner-list fr">
        <ul>
          <li>
            <a href="#">
              <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
              <div class="info">
                <p class="title">【初音ミク】39 TECHNO【八王子P】</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
              <div class="info">
                <p class="title">【初音ミク】39 TECHNO【八王子P】</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
              <div class="info">
                <p class="title">【初音ミク】39 TECHNO【八王子P】</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
              <div class="info">
                <p class="title">【初音ミク】39 TECHNO【八王子P】</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
              <div class="info">
                <p class="title">【初音ミク】39 TECHNO【八王子P】</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
              <div class="info">
                <p class="title">【初音ミク】39 TECHNO【八王子P】</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
        </ul>
        <a href="#" class="btn btn-prev">昨日</a>
        <a href="#" class="btn btn-next">一周</a>
      </div>
    </div>
  </div>

  <div id="main">
    <div class="page-width">
      <!-- 推广 -->
      <div class="mainCont clearfix" id="promote">
        <div class="pic-list fl">
          <div class="pic-list__title">
            <i class="icon icon-promote"></i>
            <h2>推广</h2>
            <a href="#" class="promote-link">来感受创作的力量吧！</a>
          </div>
          <ul class="pic-list__wrapper clearfix">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【欧美男模】 禁欲系 （西装控）</a>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">煮泡面好吃还是泡泡面好吃？藤椒双辣挑战！~</a>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【DEC】S5E8 化学方法的划手特效~</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr">
          <div class="promote-side__title">
            <a href="#">在线人数：715509</a>
            <span>|</span>
            <a href="#">最新投稿：5806</a>
          </div>
          <a href="#" class="promote-side__img"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
        </div>
      </div>

      <!-- 直播 -->
      <div class="mainCont clearfix" id="live" js-move="true">
        <div class="pic-list fl">
          <div class="pic-list__title">
            <i class="icon icon-live"></i>
            <h2>正在直播</h2>
            <p class="live-online">当前共有<em>2232</em>个在线直播</p>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="category">单级联机</span>
                <img class="headImg" src="{{asset('home_temp/images/cont/live_headImg1.jpg')}}" alt="#">
                <i class="icon-live">Live</i>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <a href="#" class="live-rank">直播排行</a>
            <div class="tab-title">
              <a href="#" class="cur">为你推荐</a>
              <a href="#">关注的主播</a>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <div class="slider-ov tab-cont__item">
                <div class="slider">
                  <div class="slider-img">
                    <a href="#" slider-title="pic1"><img src="{{asset('home_temp/images/cont/slider_img1.png')}}" alt="#"></a>
                    <a href="#" slider-title="pic2"><img src="{{asset('home_temp/images/cont/slider_img2.png')}}" alt="#"></a>
                    <a href="#" slider-title="pic3"><img src="{{asset('home_temp/images/cont/slider_img3.png')}}" alt="#"></a>
                  </div>
                  <div class="slider-title"><p>pic1</p></div>
                  <div class="slider-btn">
                    <span class="cur"></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <div class="slider-user">
                  <a href="#">
                    <img src="{{asset('home_temp/images/cont/slider-user1.jpg')}}" alt="#">
                    <p>哔哩老攻</p>
                  </a><a href="#">
                    <img src="{{asset('home_temp/images/cont/slider-user2.jpg')}}" alt="#">
                    <p>红发杰克丶</p>
                  </a><a href="#">
                    <img src="{{asset('home_temp/images/cont/slider-user3.jpg')}}" alt="#">
                    <p>麻辣图图</p>
                  </a><a href="#">
                    <img src="{{asset('home_temp/images/cont/slider-user4.jpg')}}" alt="#">
                    <p>猴叔w</p>
                  </a>
                </div>
              </div>
              <div class="live-focus tab-cont__item">
                <span>没有数据</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 动画 -->
      <div class="mainCont clearfix" id="animation" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-animation"></i>
            <h2>动画</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 番剧 -->
      <div class="weekCont clearfix" id="bangumi" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-bangumi"></i>
            <h2>番剧</h2>
            <div class="tab-title week-tab">
              <a href="#" class="cur">最新</a>
              <a href="#">一</a>
              <a href="#">二</a>
              <a href="#">三</a>
              <a href="#">四</a>
              <a href="#">五</a>
              <a href="#">六</a>
              <a href="#">日</a>
            </div>
            <a href="#" class="week-schedule">新番时间表<i></i></a>
          </div>
          <div class="weekCont-list">
            <ul class="tab-cont__item tab-cont__cur">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-side fr">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>番剧排行</h3>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <ul class="main-rank">
              <li class="item">
                <a href="#"><i class="n1">1</i>人渣的本愿<span>全12话</span></a>
              </li>
              <li class="item">
                <a href="#"><i class="n2">2</i>小林家的龙女仆<span>更新至第12话</span></a>
              </li>
              <li class="item">
                <a href="#"><i class="n3">3</i>双星之阴阳师<span>全12话</span></a>
              </li>
              <li class="item">
                <a href="#"><i>4</i>珈百璃的堕落<span>更新至第12话</span></a>
              </li>
              <li class="item">
                <a href="#"><i>5</i>怪怪守护神<span>全12话</span></a>
              </li>
              <li class="item">
                <a href="#"><i>6</i>火影忍者 疾风传<span>全12话</span></a>
              </li>
              <li class="item">
                <a href="#"><i>7</i>Hand Shakers<span>更新至第1话</span></a>
              </li>
              <li class="item">
                <a href="#"><i>8</i>爱丽丝与藏六<span>全12话</span></a>
              </li>
            </ul>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 番剧动态 -->
      <div class="mainCont clearfix" id="bangumi_dynamic">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <h2>番剧动态</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>这里的龙不得了</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>特别推荐</h3>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="bangumi-pic">
              <a href="#">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <div class="info">
                  <p>遵奉天命 迎接主上</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 国创 -->
      <div class="weekCont clearfix" id="china" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-china"></i>
            <h2>国创</h2>
            <div class="tab-title week-tab">
              <a href="#" class="cur">最新</a>
              <a href="#">一</a>
              <a href="#">二</a>
              <a href="#">三</a>
              <a href="#">四</a>
              <a href="#">五</a>
              <a href="#">六</a>
              <a href="#">日</a>
            </div>
            <a href="#" class="week-schedule">新番时间表<i></i></a>
          </div>
          <div class="weekCont-list">
            <ul class="tab-cont__item tab-cont__cur">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
            <ul class="tab-cont__item">
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
              <li>
                <a href="#" class="pic"><img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#"></a>
                <div class="info">
                  <a href="#">珈百璃的堕落</a>
                  <p>更新至<span>12话</span></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-side fr">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>国产动画排行</h3>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <ul class="main-rank">
              <li class="item">
                <a href="#"><i class="n1">1</i>狐妖小红娘<span>更新至第54话</span></a>
              </li>
              <li class="item">
                <a href="#"><i class="n2">2</i>银之守墓人<span>更新至第1话</span></a>
              </li>
              <li class="item">
                <a href="#"><i class="n3">3</i>斗破苍穹<span>全12话</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 国产原创相关 -->
      <div class="mainCont clearfix" id="china_dynamic">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <h2>国产原创相关</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>这里的龙不得了</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>相关排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 音乐 -->
      <div class="mainCont clearfix" id="music" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-music"></i>
            <h2>音乐</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 舞蹈 -->
      <div class="mainCont clearfix" id="dance" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-dance"></i>
            <h2>舞蹈</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 游戏 -->
      <div class="mainCont clearfix" id="game" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-game"></i>
            <h2>游戏</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 科技 -->
      <div class="mainCont clearfix" id="technology" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-technology"></i>
            <h2>科技</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 生活 -->
      <div class="mainCont clearfix" id="life" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-life"></i>
            <h2>生活</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 鬼畜 -->
      <div class="mainCont clearfix" id="guichu" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-guichu"></i>
            <h2>鬼畜</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 时尚 -->
      <div class="mainCont clearfix" id="fasion" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-fasion"></i>
            <h2>时尚</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 广告 -->
      <div class="mainCont clearfix" id="gg" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-gg"></i>
            <h2>广告</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 娱乐 -->
      <div class="mainCont clearfix" id="yule" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-yule"></i>
            <h2>娱乐</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- 电影 -->
      <div class="mainCont clearfix" id="movie" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-movie"></i>
            <h2>电影</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

      <!-- TV剧 -->
      <div class="mainCont clearfix" id="tv" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-tv"></i>
            <h2>TV剧</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="{{asset('home_temp/images/cont/main_pic.jpg')}}" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">【FGO】轮到两仪式来给你洗脑了~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img1.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="{{asset('home_temp/images/cont/main-rank__img2.jpg')}}" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
 