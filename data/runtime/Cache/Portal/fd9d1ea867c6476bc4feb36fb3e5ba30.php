<?php if (!defined('THINK_PATH')) exit();?>
<html onapp="app" style="height: 100%;width: 100%;">
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <meta name="x5-fullscreen" content="true">
<meta name="full-screen" content="yes">
  <title>皇家大厅</title> 
  <link rel="stylesheet" href="/app/css/loading.css" /> 
  <link rel="stylesheet" type="text/css" href="/app/css/homepage/hjhomepage11-1.0.0.css" /> 
  <link rel="stylesheet" href="/app/css/public.css" /> 
  <link rel="stylesheet" href="/app/css/app.css" />
      <link rel="stylesheet" href="/static/aui.css">
    <!-- 自定义 -->
    <link rel="stylesheet" href="/static/common.css">
    <link rel="stylesheet" href="/static/one_black.css">
	<link rel="stylesheet" href="/static/index.css">
<link rel="stylesheet" href="/static/swiper.min.css">
<script src="/static/swiper.min.js"></script>
  <style>
/*	.createB{
		height: 73vh !important;
	}	*/

   .blueBack{
   	    height: 50vh !important;
   }
 /*  .createCommit{
   		position: absolute !important;
    	bottom: -9vh !important;
   }*/
   .main{
   	position: absolute;
   }
  </style>
  <script src="/app/open/js/jweixin-1.0.0.js"></script> 
  <script src="/app/js/homepage/jq.js" type="text/javascript"></script> 
  <script src="/app/js/homepage/home.js" type="text/javascript"></script>
  <script src="/app/js/app.js" type="text/javascript"></script>
  <script src="/index.php/portal/index/gamejs" type="text/javascript"></script> 
  <script type="text/javascript">
  $(document).ready(function(){
    document.getElementById("room").addEventListener("click",function(e) {
      if(e.target && e.target.className == "cancelCreate") {
        // 真正的处理过程在这里
        $('#room').hide();
      }
    });
  });
  </script>
  <style type="text/css">
  .cjfj-home-img9,.cjfj-home-img8,.cjfj-home-img7,.cjfj-home-img6,.cjfj-home-img5,.cjfj-home-img4,.cjfj-home-img3,.cjfj-home-img2,.cjfj-home-img1{
    z-index: 100;
  }
  .createRoom .mainPart .cancelCreate{
    z-index: 200;
     cursor: pointer;
  }
  </style>
 </head> 
 <body style="100%;width: 100%;" class="onscope"> 

 <!--<header class="header-user-info">
        <div style="margin-left:4px" class="media-box clearfix head-left">
        <div class="media-img">
            <a onclick="location.href='<?php echo U('portal/user/index');?>'">
                <img id="userimg" src="" style="max-width: 100%;display: block" alt="">
            </a>
        </div>
        <div class="media-txt" style="max-width:6rem">
            <p class="media-txt-title"><a style="color:#fff;font-size:14px" class="name" onclick="location.href='<?php echo U('portal/user/index');?>'" id="nickname"></a></p>
            <p class="media-txt-content">
                <span>
                    <img src="/images/currencyicon.png?v=1.0.1" class="diamond-img"><span style="font-size:14px" id="fknum"></span></span>
            </p>
        </div>
    </div>
        
</header>
 <section class="slide-wrap top-banner" style="margin-top: 60px;">
    <div style="height:23%" class="banner swiper-container top-swiper swiper-container-horizontal">
        <ul class="swiper-wrapper" style="transform: translate3d(-706px, 0px, 0px); transition-duration: 0ms;"><li class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 353px;"><a><img src="/static/1511256971516917.png" alt="" class="slide-img"></a></li>
                        <li class="swiper-slide swiper-slide-duplicate-active swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 353px;"><a><img src="/static/1511256971516917.png" alt="" class="slide-img"></a></li>
                    <li class="swiper-slide swiper-slide-duplicate swiper-slide-active swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 353px;"><a><img src="/static/1511256971516917.png" alt="" class="slide-img"></a></li></ul>
    </div>
</section>
<section class="slide-wrap report-panel">
    <div class="banner swiper-container report-swiper swiper-container-vertical" style="height:24px">
        <ul class="swiper-wrapper" style="transform: translate3d(0px, -44px, 0px); transition-duration: 0ms;"><li class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="height: 22px;"><a href="javascript:void(0)" style="line-height:22px;"><i class="common-icons report-icon"></i>严禁任何形式的赌博行为</a></li>
                        <li class="swiper-slide swiper-slide-duplicate-active swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="height: 22px;"><a href="javascript:void(0)" style="line-height:22px;"><i class="common-icons report-icon"></i>严禁任何形式的赌博行为</a></li>
                    <li class="swiper-slide swiper-slide-duplicate swiper-slide-active swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="height: 22px;"><a href="javascript:void(0)" style="line-height:22px;"><i class="common-icons report-icon"></i>严禁任何形式的赌博行为</a></li></ul>
    </div>
</section>-->
   
   
 <header class="header-user-info">
        <div style="margin-left:4px" class="media-box clearfix head-left">
        <div class="media-img">
            <a onclick="location.href='<?php echo U('portal/user/index');?>'">
                <img id="userimg" src="" style="max-width: 100%;display: block" alt="">
            </a>
        </div>
        <div class="media-txt" style="max-width:6rem">
            <p class="media-txt-title"><a style="color:#fff;font-size:14px" class="name" onclick="location.href='<?php echo U('portal/user/index');?>'" id="nickname"></a></p>
            <p class="media-txt-content">
                <span>
                    <img src="/static/currencyicon.png" class="diamond-img"><span style="font-size:14px" id="fknum"></span></span>
            </p>
        </div>
    </div>
        <div class="head-right">
                        <!--<a href="javascript:void(0)" id="roomIdInput" class="golden-btn need_login">房号进入</a>-->
						<a href="/portal/user/fangka" style="margin-right:22px" class="golden-btn need_login">房卡发送</a>
                            </div>
</header>
 <section class="slide-wrap top-banner" style="margin-top: 60px;">
    <div style="height:23%" class="banner swiper-container top-swiper swiper-container-horizontal">
        <ul class="swiper-wrapper" style="transform: translate3d(-706px, 0px, 0px); transition-duration: 0ms;"><li class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 353px;"><a><img src="/static/1511256971516917.png" alt="" class="slide-img"></a></li>
                        <li class="swiper-slide swiper-slide-duplicate-active swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 353px;"><a><img src="/static/1511256971516917.png" alt="" class="slide-img"></a></li>
                    <li class="swiper-slide swiper-slide-duplicate swiper-slide-active swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 353px;"><a><img src="/static/1511256971516917.png" alt="" class="slide-img"></a></li></ul>
    </div>
</section>
<section class="slide-wrap report-panel">
    <div class="banner swiper-container report-swiper swiper-container-vertical" style="height:24px">
   <ul class="swiper-wrapper" style="transform: translate3d(0px, -44px, 0px); transition-duration: 0ms;">
     
     <li class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="height: 22px;"><i class="common-icons report-icon"></i><b style="color:#FF0000">严禁任何形式的赌博行为</b></li>
            <li class="swiper-slide swiper-slide-duplicate-active swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="height: 22px;"><i class="common-icons report-icon"></i><b style="color:#FF0000">严禁任何形式的赌博行为</b></li>
          <li class="swiper-slide swiper-slide-duplicate swiper-slide-active swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="height: 22px;"><a style="line-height:22px;"><i class="common-icons report-icon"></i><b style="color:#FF0000">严禁任何形式的赌博行为</b></a></li></ul>
    </div>
</section>
<script class="text/javascript">
    $(document).ready(function(){
         var swiper = new Swiper('.top-swiper', {
            slidesPerView: 1,
            autoplay: 3000,
            speed: 500,
            loop: true
        });

        var vswiper = new Swiper('.report-swiper',{
            direction: 'vertical',
            slidesPerView: 1,
            autoplay: 3000,
            speed: 500,
            loop: true
        });
    });
</script>
<section class="games-panel">
    <ul class="games-panel-content">
                <li>
                                            <a onclick="send('gameserver',{id:1})" class="need_login">
                    <img src="/static/1512638957372590.jpg" alt="六人牛牛">
                </a>
                                    </li>
                <li>
                                            <a onclick="send('gameserver',{id:2})" class="need_login">
                    <img src="/static/1512638976538926.jpg" alt="九人牛牛">
                </a>
                                    </li>
      
       <li>
                                            <a onclick="send('gameserver',{id:15})" class="need_login">
                    <img src="/static/10renniu.png" alt="十人牛牛">
                </a>
                                    </li>
      
      
                <li>
                                            <a onclick="send('gameserver',{id:10})" class="need_login">
                    <img src="/static/1512638307231480.jpg" alt="十二人牛牛">
                </a>
                                    </li>
                  <li>
                                            <a onclick="send('gameserver',{id:14})" class="need_login">
                    <img src="/static/1512640915210254.jpg" alt="九人八倍牛牛">
                </a>
                 </li>
                <li>
                                            <a onclick="send('gameserver',{id:5})" class="need_login">
                    <img src="/static/6renjh.jpg" alt="六人金花">
                </a>
                                    </li>
                <li>
                                            <a onclick="send('gameserver',{id:16})" class="need_login">
                    <img src="/static/9renjh.jpg" alt="九人金花">
                </a>
                                    </li>
                <li>
                                            <a onclick="send('gameserver',{id:3})" class="need_login">
                    <img src="/static/1512729845604014.jpg" alt="六人三公">
                </a>
                                    </li>
                <li>
                                            <a onclick="send('gameserver',{id:4})" class="need_login">
                    <img src="/static/9rensg.jpg" alt="九人三公">
                </a>
                                    </li>
                <li>
                                            <a onclick="send('gameserver',{id:17})" class="need_login">
                    <img src="/static/12rensg.jpg" alt="十二人三公">
                </a>
                                    </li>
                 <li>
                                            <a onclick="send('gameserver',{id:6})" class="need_login">
                    <img src="/static/28.jpg" alt="二八杠">
                </a>
                 </li>
      			<li>
                                            <a onclick="send('gameserver',{id:27})" class="need_login">
                    <img src="/static/paijiu.png" alt="牌九">
                </a>
                 </li>
     			 <li>
                                            <a onclick="send('gameserver',{id:26})" class="need_login">
                    <img src="/static/yuxiaxie.png" alt="鱼虾蟹">
                </a>
                 </li>
                <li><img src="/static/healthy_warn.png" alt="健康公告" style="border:0;border-radius:0;"></li>
        <li class="copyright"></li>
    </ul>
</section>
<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="footer-nav">
        <a href="/" class="aui-bar-tab-item home-item active" id="bar_index">
            <i class="home-icon-first"></i>
            <div class="aui-bar-tab-label nav-label home-label"></div>
        </a>
        <a onclick="tishi();" class="aui-bar-tab-item record-item need_login " id="bar_statistics">
            <i class="recharge-icon"></i>
            <div class="aui-bar-tab-label nav-label recharge-label"></div>
        </a>
        <a onclick="location.href='<?php echo U('portal/home/gerenzxkafangchaxun');?>'" class="aui-bar-tab-item games-item need_login " id="bar_discover" se_prerender_url="complete">
            <i class="games-icon"></i>
            <div class="aui-bar-tab-label nav-label games-label"></div>
        </a>
        <a onclick="location.href='<?php echo U('portal/user/index');?>'" class="aui-bar-tab-item need_login " id="bar_mine">
            <i class="mine-icon"></i>
            <div class="aui-bar-tab-label nav-label mine-label"></div>
        </a>
    </div>
</footer>
 <!--<div id="allgame" style="/*width: 100%;height: auto;*/position: absolute;z-index: 93;">
  </div>-->
<div class="createRoom" style="display:none" id="room"></div>
<script>
function tishi(){
alert("尊敬的玩家您好！" + '\n' +"热烈庆祝国家十九大顺利召开" + '\n' +"响应政策我司暂时关闭支付通道"+ '\n' +"申请代理，充值房卡请联系客服联系！")
}
</script>
<script>
function GoUrl(id){
		location.href="/game1.php?id="+id;
	}
     load('show');
     token='<?php echo ($token); ?>';
     if(dkxx){
      connect(dkxx);
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }
	//setInterval("$('#allgame').hide()",100);
</script>
</body>
</html>