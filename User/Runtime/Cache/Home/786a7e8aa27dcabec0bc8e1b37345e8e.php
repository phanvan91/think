<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>会员中心-注册</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="/css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="/css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="/css/responsive.css" >
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="/js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="/css/animate/css/animate.min.css" />
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- TODO -->
	<link rel="stylesheet" type="text/css" href="/js/jquery-todo/css/styles.css" />
	<!-- FULL CALENDAR -->
	<link rel="stylesheet" type="text/css" href="/js/fullcalendar/fullcalendar.min.css" />
	<!-- GRITTER -->
	<link rel="stylesheet" type="text/css" href="/js/gritter/css/jquery.gritter.css" />
	<!-- FONTS -->
	<link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/bitStyle/js/jquery.js">
</script>

 	
<script type="text/javascript" src="/bitStyle/js/modernizr.js">
</script>
<script type="text/javascript" src="/bitStyle/js/selectivizr.js">
</script>
<script type="text/javascript" src="/bitStyle//js/jquery.cookie.js">
</script>
<script type="text/javascript" src="/bitStyle/js/scripts.js">
</script>
<script type="text/javascript" src="/bitStyle/js/remaining.js">
</script>
<script type="text/javascript" src="/bitStyle/js/fn_number_format.js">
</script>
<script type="text/javascript" src="/bitStyle/js/9acba5c0d35076a1ccd574dfc21b8b2b.js">
</script>
<script type="text/javascript" src="/bitStyle/js/layer.js"></script>
<script src="/cssmmm/jquery.countdown.js"></script>


</head>
<body>
	<!-- HEADER -->
	<script src="/js/jquery/jquery-2.0.3.min.js"></script>
	<header class="navbar clearfix" id="header">
		<div class="container">
				<div class="navbar-brand">
					<!-- COMPANY LOGO -->
					<a href="/">
						<img src="/img/logo/logo.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120">
					</a>
					<!-- /COMPANY LOGO -->
					<!-- TEAM STATUS FOR MOBILE -->
					<div class="visible-xs">
						<a href="#" class="team-status-toggle switcher btn dropdown-toggle">
							<i class="fa fa-users"></i>
						</a>
					</div>
					<!-- /TEAM STATUS FOR MOBILE -->
					<!-- SIDEBAR COLLAPSE -->
					<div id="sidebar-collapse" class="sidebar-collapse btn">
						<i class="fa fa-bars" 
							data-icon1="fa fa-bars" 
							data-icon2="fa fa-bars" ></i>
					</div>
					<!-- /SIDEBAR COLLAPSE -->
				</div>
				<!-- NAVBAR LEFT -->
		  <ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
					<li class="dropdown">
			    <a href="#" class="team-status-toggle dropdown-toggle tip-bottom" data-toggle="tooltip" title="我的钱包">
							<i class="fa fa-users"></i>
							<span class="name">我的钱包</span>
							<i class="fa fa-angle-down"></i>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cog"></i>
							<span class="name">风格</span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu skins">
							<li class="dropdown-title">
								<span><i class="fa fa-leaf"></i> Theme Skins</span>
							</li>
							<li><a href="#" data-skin="default">默认</a></li>
							<li><a href="#" data-skin="night">蓝黑</a></li>
							<li><a href="#" data-skin="earth">棕色</a></li>
							<li><a href="#" data-skin="utopia">黄色</a></li>
							<li><a href="#" data-skin="nature">绿色</a></li>
							<li><a href="#" data-skin="graphite">咖色</a></li>
					  </ul>
					</li>
					
					 <li class="dropdown">
<div style="height:50px; line-height:50px; color:#FFF ; float:left; font-size:16px">公告：</div>

<div style="float:left; width:300px"><marquee scrollamount="3"  style="font-size: 16px;height:50px; line-height:50px;color="#FF9900" width="300px">
<a href="<?php echo U('Kefu/gonggao',array('id'=>$gonggao['if_id']));?>" color="#FF9900">
<font color="#FF9900">
<?php echo ($gonggao["if_theme"]); ?></font></a></marquee>
</div>
					</li>
				</ul>
				<!-- /NAVBAR LEFT -->
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
					<li>
						<a href="<?php echo U('Index/news');?>" class="dropdown-toggle" title="新闻">
							<i class="fa fa-bell"></i>
												
						</a>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown" >
						<a href="<?php echo U('Myuser/lxwm');?>" class="dropdown-toggle" title="邮件">
						<i class="fa fa-envelope"></i>
						
						</a>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user" id="header-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img alt="" src="/img/avatars/avatar3.jpg" />
							<span class="username"><?php echo ($userData['ue_theme']); ?></span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-bars"></i> 编码：<?php echo ($userData['ue_id']); ?></a></li>
							<li><a href="#"><i class="fa fa-user"></i> 帐号：<?php echo ($userData['ue_account']); ?></a></li>
							<li><a href="#"><i class="fa fa-phone-square"></i> 手机号：<?php echo ($userData['ue_phone']); ?></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i> 钱包：<?php echo ($userData['ue_money']); ?></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i> 诚信积分：<?php echo ($userData['chengxin']); ?></a></li>
							<li><a href="<?php echo U('Reg/logout');?>"><i class="fa fa-power-off"></i> 退出</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
		  </ul>
				<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- TEAM STATUS -->
		<div class="container team-status" id="team-status">
		  <div id="scrollbar">
			<div class="handle">
			</div>
		  </div>
		  <div id="teamslider">
			  <ul class="team-list">
				<li class="current">
				  <a href="<?php echo U('Info/rwhistory');?>" >
				  <span class="image">
					  <img src="/bitStyle/images/e-wallet.png" alt="" />
				  </span>互助钱包
				  <div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 35%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 20%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 10%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
							<span class="badge badge-green"> <?php echo ($userData["ue_money"]); ?></span> RMB
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				  <a href="<?php echo U('Info/cwhistory');?>">
				  <span class="image">
					  <img src="/bitStyle/images/r-wallet.png" alt="" />
				  </span>
				  <span class="title">
					经理奖钱包
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 15%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 40%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 20%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
                        <span class="badge badge-green"><?php echo ($userData["jl_he"]); ?></span> RMB
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				  <a href="<?php echo U('Info/cwhistory');?>">
				  <span class="image">
					  <img src="/bitStyle/images/n-wallet.png" alt="" />
				  </span>
				  <span class="title">
					推荐奖钱包
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 65%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 10%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 15%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
							<span class="badge badge-green"><?php echo ($userData["tj_he"]); ?></span> RMB
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				  <a href="<?php echo U('Info/pin');?>">
				  <span class="image">
					  <img src="/bitStyle/images/i-wallet.png" alt="" />
				  </span>
				  <span class="title">
					激活码数量
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 5%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 48%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 27%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
							<span class="badge badge-green"><?php if($pin_zs): echo ($pin_zs); else: ?>0<?php endif; ?></span> 个
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				 <a href="<?php echo U('Info/pai');?>">
				  <span class="image">
					  <img src="/bitStyle/images/i-wallet.png" alt="" />
				  </span>
				  <span class="title">
					拍单币数量
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 21%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 20%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 40%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
				  <span class="status">
						<div class="field">
							<span class="badge badge-green"><?php if($userData["paidan"] != 0): echo ($userData["paidan"]); else: ?>0<?php endif; ?> 个
							<span class="pull-right fa fa-check"></span>
					  </div>
</span>
				  </a>
				</li>
				
			  </ul>
			</div>
		  </div>
		<!-- /TEAM STATUS -->
	</header>
    	<section id="page">
    				<!-- SIDEBAR -->
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<div class="divide-20"></div>						
						<!-- SIDEBAR QUICK-LAUNCH -->
						<!-- <div id="quicklaunch">
						<!-- /SIDEBAR QUICK-LAUNCH -->
						
						<!-- SIDEBAR MENU -->
						<ul>
							<li class="active">
						    <a href="/">
								<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">首页</span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-user fa-fw"></i> <span class="menu-text">用户中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a class="" href="<?php echo U('Info/index');?>"><span class="sub-menu-text">个人资料</span></a></li>
                                    <li><a class="" href="<?php echo U('Info/pin');?>"><span class="sub-menu-text">激活码</span></a></li>
									<li><a class="" href="<?php echo U('Info/pai');?>"><span class="sub-menu-text">排单币</span></a></li>
									<li><a class="" href="<?php echo U('Myuser/index');?>"><span class="sub-menu-text">我的团队</span></a></li>
									<li><a class="" href="<?php echo U('Myuser/xzzh');?>"><span class="sub-menu-text">团队记录</span></a></li>
									<li class="has-sub-sub"> </li>
							  </ul>
						  </li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-briefcase"></i> <span class="menu-text">财务中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Info/rwhistory');?>">我的互助钱包</a></li>
									<li><a href="<?php echo U('Index/pdList');?>">提供帮助记录</a></li>
									<li><a href="<?php echo U('Index/gdList');?>">接受帮助记录</a></li>
									<li><a href="<?php echo U('Info/cwhistory');?>">奖金钱包记录</a></li>
									<li><a href="<?php echo U('Info/nwhistory');?>">总账记录</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-star"></i> <span class="menu-text">抽奖中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Award/index');?>">抽奖</a></li>
								</ul>
							</li>
							<li><a href="<?php echo U('Index/news');?>" class="glyphicons home" ><i class="fa fa-newspaper-o"></i> 新闻公告<?php if($news_count): ?><span class="badge"><?php echo ($news_count); ?></span><?php endif; ?></a></li>
							
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-columns fa-fw"></i> <span class="menu-text">抢单中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Order/orderList');?>">抢单列表</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-shopping-cart"></i> <span class="menu-text">商城中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Good/lists');?>">商城产品</a></li>
									<li><a href="<?php echo U('Good/orderList');?>">订单管理</a></li>
								</ul>
							</li>
							<li> <a href="<?php echo U('Index/reg');?>" class="glyphicons home" ><i class="fa fa-male"></i>注册新会员</a></li>
							
							<?php if($renchou == 1): ?><li> <a href="<?php echo U('Kefu/fromer');?>" class="title" ><i class="fa fa-universal-access"></i>认筹通道</a></li><?php endif; ?>
							<li class="has-sub">
								<a  href="<?php echo U('Myuser/task');?>" class="title"><i class="fa fa-universal-access"></i>获得排单币</a>
							</li>
                            <li class="has-sub">
								<a href="<?php echo U('Reg/logout');?>" class="title"><i class="fa fa-sign-out"></i>退出</a>
							</li>
</ul>
						<!-- /SIDEBAR MENU -->
					</div>
				</div>
				<!-- /SIDEBAR -->
				
<style type="text/css">

/*浮动客服*/
#floatDivBoxs{width:170px;background:#fff;position:fixed;top:180px;right:0;z-index:999;}
#floatDivBoxs .floatDtt{width:100%;height:45px;line-height:45px; background:#f08326;color:#fff;font-size:18px;text-indent:22px;position:relative;}
#floatDivBoxs .floatDqq{padding:0 14px;}
#floatDivBoxs .floatDqq li{height:45px;line-height:45px;font-size:15px;border-bottom:1px solid #e3e3e3; padding:0 0 0 50px;}
#floatDivBoxs .floatDtxt{font-size:18px;color:#333;padding:12px 14px;}
#floatDivBoxs .floatDtel{padding:0 0 15px 10px;}
#floatDivBoxs .floatDtel img{display:block;}
#floatDivBoxs .floatDbg{width:100%;height:20px;background:url(../images/online_botbg.jpg) no-repeat;box-shadow:-2px 0 3px rgba(0,0,0,0.25);}
.floatShadow{ background:#fff;box-shadow:-2px 0 3px rgba(0,0,0,0.25);}
#rightArrow{width:50px;height:45px;background:url(/Public/online_arrow.jpg) no-repeat;position:fixed;top:180px;right:170px;z-index:999999;}
#rightArrow a{display:block;height:45px;}



</style>
<div id="rightArrow"><a href="javascript:;" title="在线客户"></a></div>
<div id="floatDivBoxs">
	<div class="floatDtt">在线客服</div>
    <div class="floatShadow">
        <ul class="floatDqq">
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=4828816&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服1号</a></li>
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=4828816&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服2号</a></li>
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=4828816&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服3号</a></li>
        </ul>
        <div class="floatDtxt">在线时间</div>
        <div class="floatDtel">早上9点到晚上10点</div>
        
    </div>
    
</div>

<script type="text/javascript">
var flag=1;
$('#rightArrow').click(function(){
    
	if(flag==1){
		$("#floatDivBoxs").animate({right: '-175px'},300);
		$(this).animate({right: '-5px'},300);
		$(this).css('background-position','-50px 0');
		flag=0;
	}else{
		$("#floatDivBoxs").animate({right: '0'},300);
		$(this).animate({right: '170px'},300);
		$(this).css('background-position','0px 0');
		flag=1;
	}
});
</script>

		<div id="main-content">
<div class="container">
				<div class="row">
				  <div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
					<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="/">首页</a>
										- 注册新会员</li>
									</ul>
									<!-- /BREADCRUMBS -->
								  <div class="description"> 提示：投资有风险，请使用非关键资金参与！！！</div>
							  </div>
							</div>
					</div>
						<!-- /PAGE HEADER -->
						<!-- DASHBOARD CONTENT --><!-- /DASHBOARD CONTENT -->
  <div class="col-md-12">
										<div class="box border inverse">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>注册新会员</h4>
												<div class="tools">
													
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body">
												<form class="margin-none" name="register_form" action="<?php echo U('Index/regadd');?>" method="post" id="register_form">                 
	    <div class="widget widget-body-white padding-none">
		<div class="widget-head">
		</div>
		<div class="widget-body">
		    <div class="row"  style=" padding:10px;">
		    <div class="form-group col-lg-6">
		     <label>登入用户名</label>
			<input type="text" id="username" class="form-control" name="email"  required="">
		    </div>
		     <div class="form-group col-lg-6">
			<label>姓名<span  style="color:#0034dd;">(请务必填写真实收款姓名)</span></label>
			<input type="text" id="realname" class="form-control" name="username"  maxlength="60" required>
		    </div>
		    <div class="col-lg-12">
			<div class="row">
			
			    <div class="form-group col-lg-12">
				<p style="height:20px;">
				<label style="float:left;">手机号码<span  style="color:#0034dd;">(不可修改)</span></label>
				<span style="clear:both;"></span>
				</p>
				<div style="width:200px; float:left;">
				<select id="codett" name="codett" class="form-control">
				<option value="">中国大陆+86</option>
				<option value="+886">台湾+886</option>
				<option value="+852">香港+852</option>
				<option value="+60">马来西亚+60</option>
				<option value="+65">新加坡+65</option>
				<option value="+81">日本+81</option>
				<option value="+82">韩国+82</option>
				<option value="+1">美国+1</option>
				<option value="+1">加拿大+1</option>
				<option value="+61">奥大利亚+61</option>
				<option value="+64">新西兰+64</option>
				<option value="+54">阿根廷+54</option>
				<option value="+971">阿联酋+971</option>
				<option value="+353">爱尔兰+353</option>
				<option value="+20">埃及+20</option>
				<option value="+372">爱沙尼亚+372</option>
				<option value="+43">奥地利+43</option>
				<option value="+853">澳门+853</option>
				<option value="+1242">巴哈马+1242</option>
				<option value="+507">巴拿马+507</option>
				<option value="+55">巴西+55</option>
				<option value="+375">白俄罗斯+375</option>
				<option value="+359">保加利亚+359</option>
				<option value="+32">比利时+32</option>
				<option value="+48">波兰+48</option>
				<option value="+501">伯利兹+501</option>
				<option value="+45">丹麦+45</option>
				<option value="+49">德国+49</option>
				<option value="+7">俄罗斯+7</option>
				<option value="+33">法国+33</option>
				<option value="+63">菲律宾+63</option>
				<option value="+358">芬兰+358</option>
				<option value="+57">哥伦比亚+57</option>
				<option value="+31">荷兰+31</option>
				<option value="+996">吉尔吉斯斯坦+996</option>
				<option value="+855">柬埔寨+855</option>
				<option value="+974">卡塔尔+974</option>
				<option value="+370">立陶宛+370</option>
				<option value="+352">卢森堡+352</option>
				<option value="+40">罗马尼亚+40</option>
				<option value="+960">马尔代夫+960</option>
				<option value="+976">蒙古+976</option>
				<option value="+51">秘鲁+51</option>
				<option value="+212">摩洛哥+212</option>
				<option value="+52">墨西哥+52</option>
				<option value="+27">南非+27</option>
				<option value="+234">尼日利亚+234</option>
				<option value="+47">挪威+47</option>
				<option value="+351">葡萄牙+351</option>
				<option value="+46">瑞典+46</option>
				<option value="+41">瑞士+41</option>
				<option value="+381">塞尔维亚+381</option>
				<option value="+248">塞舌尔+248</option>
				<option value="+966">沙特阿拉伯+966</option>
				<option value="+94">斯里兰卡+94</option>
				<option value="+66">泰国+66</option>
				<option value="+90">土耳其+90</option>
				<option value="+216">突尼斯+216</option>
				<option value="+58">委内瑞拉+58</option>
				<option value="+380">乌克兰+380</option>
				<option value="+34">西班牙+34</option>
				<option value="+30">希腊+30</option>
				<option value="+36">匈牙利+36</option>
				<option value="+39">意大利+39</option>
				<option value="+972">以色列+972</option>
				<option value="+91">印度+91</option>
				<option value="+62">印度尼西亚62</option>
				<option value="+44">英国+44</option>
				<option value="+1284">英属维尔京群岛+1284</option>
				<option value="+962">约旦+962</option>
				<option value="+84">越南+84</option>
				<option value="+56">智利+56</option>
				</select>
				</div>
				
				<input type="text" id="phone" class="form-control" name="phone" maxlength="13"  required="">
                <input type="button" value="获取验证码"  style="width:200px;" id="code" class="form-control" name="yanzheng"  />					
				</div>
				
				<div style="clear:both;"></div>	
			    </div>
				
			    <!--<div class="form-group col-lg-6">
				<label style="width:100%; float:left;">&nbsp;</label>
				<input type="text" id="phonetex" class="form-control" style="width:153px; float:left;" name="phonetex" maxlength="13"  required="">
				<div class="getverima"><div id="getverima" title="获取短信验证码" disabled="disabled"><span id="timeLeft"></span><span id="verimaTip">获取短信验证码</span></div></div>
			    </div><div style="clear:both;"><p style="padding:0 20px;"></p></div>-->
			</div>
		    </div>
			
			<div class="col-lg-12">
			<div class="row">
			    <div class="form-group col-lg-6">
				<label>短信验证码</label>
				 <div class="input-group"> <input type="text" value="" id="old_code" class="form-control"   required="" > 
				 
				 
				 
			      
			    </div>
			   
			</div>
		    </div>
			 </div>
			 
		    <div class="col-lg-12">
			<div class="row">
			    <div class="form-group col-lg-6">
				<label>介绍人用户名</label>
				 <div class="input-group"> <input type="text" value="<?php echo ($userData['ue_account']); ?>" id="pemail" class="form-control" name="pemail"  required="" readonly> 
				 <span class="input-group-btn"><input name="check_jsr" id="check_jsr" type="button" class="btn btn-primary  pemailcheck btn-success" value="检查"> </span>
				 <div class="btn btn-primary  pemailcheck btn-danger ">激活码<span style="color:#ffff00;">(余额: <?php echo ($pin_zs); ?>个)</span> </div></div>
				 
			       <font id="alert_pemail"></font>
			    </div>
			   
			</div>
		    </div>
		    <div class="form-group col-lg-6">
			<label>登录密码</label>
			<input type="password" id="password" class="form-control" name="password"  min="6" required>
		    </div>
		    <div class="form-group col-lg-6">
			<label>确认登录密码</label>
			<input type="password" id="password2" class="form-control" name="password2"  required="">
		    </div>
		    <div class="form-group col-lg-6">
			<label>二级密码</label>
			<input name="secpwd" type="password" class="form-control" id="cpassword"  min="6" required>
		    </div>
		    <div class="form-group col-lg-6">
			<label>确认二级密码</label>
			<input name="resecpwd" type="password" class="form-control" id="cpassword2"  required="">
		    </div>

		    <div class="form-group col-lg-6">
			<label>密保问题</label>
			    <select id="question" name="question" class="form-control">
				 <option value="0">----请选择问题----</option>
                                    <option value="q1">您的生日是什么时间？</option>
                                    <option value="q2">您最喜欢人的叫什么名字？</option>
                                    <option value="q3">您最喜欢的是什么？</option>
                                    <option value="q4">您父亲的名字叫什么？</option>   
			    </select>
		    </div>
		    <div class="form-group col-lg-6">
			<label><font color="red">*</font>密保答案</label>
			<input type="" value="" id="answer" class="form-control" name="answer" autocomplete="off" required>
		    </div>

  <!-- <div class="form-group">
                                <label class="col-md-3 control-label">激活码<span class="ast">*</span></label>
                                <div class="col-md-9"><input class="form-control" id="password2" name="code"  type="text" value="<?php echo ($pin1["pin"]); ?>"></div>
                            </div> -->

		    <div class="checkbox col-lg-12">
			<div class="icheckbox_square-green checked" style="position: relative;"></div>
		      <input name="ty" type="checkbox" id="ty" value="ye" checked>
		      我已完全了解所有风险。<a href="/Home/Login/shengming.html" target="_blank">免责声明</a>
		    </div>
		    </div>
		    <div class="data-footer innerAll half text-right clearfix" style="text-align:center; padding:10px;">
			<button type="button" class="btn btn-primary" onClick="reg()">注册</button>                         
			<input type="hidden" name="ip" id="ip" value="<?php echo get_client_ip();?>" />
			<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>  
			<script>document.getElementById('ip').value=returnCitySN["cip"];</script>
		    </div>
		</div>
	    </div>
	</form>
											</div>
                                            
		  </div>
									</div>
<div class="col-md-12">
										<!-- BASIC -->
				   <!-- <div class="box border primary ">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>问题记录</h4>
												<div class="tools hidden-xs">
													
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
                                           <div class="box-body big">
											<table cellpadding="1" id="example" cellspacing="1" class="table table-bordered table-striped cus_datatable dataTable no-footer" role="grid" aria-describedby="example_info">
                <thead>
                  <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="descending" aria-label="编号: activate to sort column ascending" style="width: 99px;">编号</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="用户: activate to sort column ascending" style="width: 299px;">用户</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="MMMPIN码: activate to sort column ascending" style="width: 284px;">(青年创业计划) 
激活码</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="新用户: activate to sort column ascending" style="width: 283px;">新用户</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="注册时间: activate to sort column ascending" style="width: 254px;">注册时间</th></tr>
                </thead>
                <tbody>
				
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr role="row" class="odd">
                      <td class="sorting_1"><?php echo ($v["ue_id"]); ?></td>
                      <td><?php echo ($v["zcr"]); ?></td>
                      <td><?php echo ($v["pin"]); ?></td>
                      <td><?php echo ($v["ue_account"]); ?></td>
                      <td><?php echo ($v["ue_regtime"]); ?></td>
                    </tr><?php endforeach; endif; ?>
					
					</tbody>
              </table>
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><?php echo ($page); ?></div>
                        <br>
						</div>
				   </div>
                   </div>       
</div> 
</div> -->

<!--/PAGE -->

<script src="/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
<script src="/js/jquery-ui-1.10.3.custom//js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
<script src="/bootstrap-dist/js/bootstrap.min.js"></script>
	
		
	<!-- DATE RANGE PICKER -->
<script src="/js/bootstrap-daterangepicker/moment.min.js"></script>
	
<script src="/js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	<!-- SLIMSCROLL -->
<script type="text/javascript" src="/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script>
	<!-- SLIMSCROLL -->
<script type="text/javascript" src="/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	<!-- BLOCK UI -->
<script type="text/javascript" src="/js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
	<!-- SPARKLINES -->
<script type="text/javascript" src="/js/sparklines/jquery.sparkline.min.js"></script>
	<!-- EASY PIE CHART -->
<script src="/js/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/js/easypiechart/jquery.easypiechart.min.js"></script>
	<!-- FLOT CHARTS -->
<script src="/js/flot/jquery.flot.min.js"></script>
<script src="/js/flot/jquery.flot.time.min.js"></script>

<script src="/js/flot/jquery.flot.resize.min.js"></script>
<script src="/js/flot/jquery.flot.pie.min.js"></script>
<script src="/js/flot/jquery.flot.stack.min.js"></script>
<script src="/js/flot/jquery.flot.crosshair.min.js"></script>
	<!-- TODO -->


	<!-- FULL CALENDAR -->
<script type="text/javascript" src="/js/fullcalendar/fullcalendar.min.js"></script>
	<!-- COOKIE -->
<script type="text/javascript" src="/js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- GRITTER -->
<script type="text/javascript" src="/js/gritter/js/jquery.gritter.min.js"></script>
<script src="/js/script.js"></script>
<script>
		jQuery(document).ready(function() {		
			App.setPage("index");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
<script>

var wait=60;
									function time(o) {
									
									if (wait == 0) {
									document.getElementById(o).removeAttribute("disabled");	
									document.getElementById(o).value="免费获取验证码";
									wait = 60;
									} else {
									document.getElementById(o).setAttribute("disabled", true);
									document.getElementById(o).value="重新发送(" + wait + ")";
									wait--;
									setTimeout(function() {
									time(o)
									},
									1000)
									}
									}
									document.getElementById("code").onclick=function(){
									   time("code");
									  
									  var phone=$("input[name='phone']").val();
										   if(phone == ''){
													 alert('手机号不能为空');
													  return false;
											   }
											   var reg=/^\d{11}$/;
											   if(reg.test(phone) == false){
											        alert('手机号格式不正确');
													  return false;
											   }
										    $.ajax({
													 
													 type: "post",
													 url: "/Home/Duanxin/getcode",
													 data: "phone="+phone,
													 dataType: "json",
													 success: function(data){
													         
														   
														}
													 })
									  }
    function reg() {
	
        if ($("#username").val() == "") {
            layer.msg("请填写用户名");
            return false;
        }
	else if ($("#realname").val() == "") {
            layer.msg("请填写姓名");
            return false;
        }
	else if ($("#phone").val() == "") {
            layer.msg("请填写手机号");
            return false;
        }
	else if ($("#pemail").val() == "") {
            layer.msg("请填写推荐人");
            return false;
        }
        else if ($("#password").val() == "") {
            layer.msg("请填写密码");
            return false;
        }
        else if ($("#password").val() != $("#password2").val()) {
            layer.msg("两次密码不一致");
            return false;
        }
        else if ($("#cpassword").val() == "") {
            layer.msg("请填写二级密码");
            return false;
        }
        else if ($("#cpassword").val() != $("#cpassword2").val()) {
            layer.msg("两次二级密码不一致");
            return false;
        }
	else if ($("#answer").val() == "") {
            layer.msg("请填写密保答案");
            return false;
        }

        if (!isMobile($("#phone").val())) {
            layer.msg("手机格式不正确");
            return false;
        }
		
		var result=true;
											   var phone=$("input[name='phone']").val();
											   if(phone == ''){
													 alert('手机号不能为空');
													  return false;
											   }
											   var reg=/^\d{11}$/;
											   if(reg.test(phone) == false){
											        alert('手机号格式不正确');
													  return false;
											   }
											   var old_code=$("#old_code").val();
												$.ajax({
													 async:false,
													 type: "post",
													 url: "/Home/Duanxin/yanzhengcode",
													 data: "old_code="+old_code+"&phone="+phone,
													 dataType: "json",
													 success: function(data){
														   if(data==1){
															   alert("手机验证码错误");
															   result=false;
														   }
														}
													 })
													 if(result == true){
													    
													 }else{
													    
														return false;
													 }

	$("#register_form").submit();

    }

    function isMobile(str) {
        var myreg = /^[0-9]*$/;
        //var myreg = /^([0]?)(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(16[0-9]{1})|(17[0-9]{1})|(18[0-9]{1})|(19[0-9]{1}))+\d{8})$/;
        return myreg.test(str);
    }

    function isEmail(str) {
        var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
        return reg.test(str);
    }

    var wait = 60;

    

$(function(){

$('#check_jsr').click(function() {
    var $dfzh = $('#pemail').val();
    var $action = '/Home/Myuser/xm';
    $.post($action,{dfzh:$dfzh},function(data){
	if(data.sf == 0){
	    document.getElementById('alert_pemail').innerHTML = data.nr;
	}else{
	    document.getElementById('alert_pemail').innerHTML = data;
	}
    });
});


$('#phone').blur(function() {
var $dfzh = $('#phone').val();
var $action = '/Home/Myuser/xmb';
$.post($action,{dfzh:$dfzh},function(data){
if(data.sf == 0){
document.getElementById('alert_phone').innerHTML = data.nr;
}else{
document.getElementById('alert_phone').innerHTML = data;
}
});
});


var intDiff =0;
$('#getverima').click(function() {
if(intDiff<=0){
	
	var $dfzh = $('#phone').val();
	var $action = '/Home/Myuser/xmbb';
	$.post($action,{dfzh:$dfzh},function(data){
	
	    intDiff = parseInt(60);//倒计时总秒数量
	    var timer = window.setInterval(function(){
	    document.getElementById ("getverima").title =''+intDiff+'秒后重新获取';
	    document.getElementById ('verimaTip').innerHTML=''+intDiff+'秒后重新获取';
	    intDiff--;
	    if(intDiff<0){
		    clearInterval(timer);
		    document.getElementById ("getverima").title ='获取短信验证码';
		    document.getElementById ('verimaTip').innerHTML='获取短信验证码';
		    document.getElementById('alert_phone').innerHTML = '';
	    }
	    }, 1000);
	
	    if(data.sf == 0){
		    document.getElementById('alert_phone').innerHTML = data.nr;
	    }
	});
}

});

});

$(function () {       
    $('input:checkbox').each(function() {
	if ($(this).attr('checked') ==true) {
	    alert($(this).val());
	}
    });
});

</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>