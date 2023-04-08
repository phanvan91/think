<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>会员系统</title>
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
	
</head>

<script type="text/javascript">
  function getday(obj){
  
    
     if(obj.value == 2){
	   $("#alldays").show();
	 }else{
	   $("#alldays").hide();
	 }
  }
  
    function jian(obj){
      
	  var jian = parseInt($("#good1").val());
	  if(jian <= 5){
	     $("#good1").val(5);
	  }else{
	     jian -= 1;
		 $("#good1").val(jian);
	  }
   }
   
   function jia(obj){
      
	     var jia = parseInt($("#good1").val());
	     jia += 1;
		 $("#good1").val(jia);
	  
   }
   
   
</script>
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
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=319518833&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服1号</a></li>
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=319518833&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服2号</a></li>
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=319518833&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服3号</a></li>
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
										</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="description"> 提示：投资有风险，请使用非关键资金参与！！！</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- DASHBOARD CONTENT -->
				    <div class="row">
							<!-- COLUMN 1 -->
							<div class="col-md-12">
								<div class="row">
								  <div class="col-lg-4">
									 <div class="dashbox panel panel-default">
										<div class="panel-body">
										   <div class="panel-left red">
												<i class="fa fa-users fa-3x"></i>
										   </div>
										   <div class="panel-right">
												<div class="number">鸿基创富</div>
												<div class="title">User</div>
												<span class="label label-success">
													<?php echo number_format(mt_rand(13,30)); ?>
													% <i class="fa fa-arrow-up"></i>
												</span>
										   </div>
										</div>
									 </div>
								  </div>
								  <div class="col-lg-4">
									 <div class="dashbox panel panel-default">
										<div class="panel-body">
										   <div class="panel-left blue">
												<i class="fa fa-money fa-3x"></i>
										   </div>
										   <div class="panel-right">
												<div class="number"><?php echo ($ruchangzijin); ?></div>
												<div class="title">Money</div>
												<span class="label label-warning">
													<?php echo number_format(mt_rand(23,39)); ?>% <i class="fa fa-arrow-up"></i>
												</span>
										   </div>
										</div>
									 </div>
								  </div>
                                  <div class="col-lg-4">
									 <div class="dashbox panel panel-default">
										<div class="panel-body">
										   <div class="panel-left red">
												<img alt="" src="/img/avatars/avatar3.jpg" width="39" height="39"/>
										   </div>
										   <div class="panel-right">
												<div style="font-size:20px">帐号：<?php echo ($userData['ue_account']); ?></div>
												<div class="title">手机号：<?php echo ($userData['ue_phone']); ?></div>
												<div class="title">等级：<?php echo ($userData['levelname']); ?></div>
												<span class="label label-success">
													钱包：<?php echo ($userData['ue_money']); ?> $
												</span>
										   </div>
										</div>
									 </div>
								  </div>
								</div>
						  <!-- /COLUMN 1 -->
						</div>
							<!-- /COLUMN 1 -->
					</div>
				   <!-- /DASHBOARD CONTENT -->
                 <div class="row">
<div class="col-md-6">
								<!-- BOX -->
								<div class="box border green">
									<div class="box-title">
										<h4><i class="fa fa-bars"></i> <span class="hidden-inline-mobile">互助中心</span></h4>
									</div>
									<div class="box-body">
										<div class="tabbable header-tabs">
											<ul class="nav nav-tabs">
												 <li><a href="#box_tab2" data-toggle="tab"><i class="fa fa-search-plus"></i> <span class="hidden-inline-mobile">申请接受帮助 </span></a></li>
												 <li class="active"><a href="#box_tab1" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> <span class="hidden-inline-mobile">申请提供帮助 </span></a></li>
										  </ul>
											 <div class="tab-content">
												 <div class="tab-pane fade in active" id="box_tab1" style="height:600px;">
													<!-- TAB 1 -->
                                                    <div class="demo-container" style="height:600px;">
													<div id="chart-dash" class="chart" style="height:600px;">
                                                    <form method="post" action="/Home/Index/tgbzcl" name="buy_share_form"
		class="form-horizontal margin-none" id="provide_help">
		  <div class="widget-head widget-head-blue" style="text-align:center">
		    <h4 class="heading">
		      请认真选择排单方式
		    </h4>
		  </div>
		  <div class="widget-body">
		    <div class="form-group" >
		      <label class="col-md-3 control-label">
			支付方式
		      </label>
		      <div class="col-md-9">
			<label>
			  <input type="checkbox" value="1" class="ckbox" name="zffs2" checked="">
			  支付宝支付
			</label>
			<label>
			  <input type="checkbox" value="1" class="ckbox" name="zffs3" checked="">
			  微信支付
			</label>
			<label>
			  <input type="checkbox" value="1" class="ckbox" name="zffs1" checked="">
			  银行支付
			</label>
			<label>
			  <input type="checkbox" value="1" class="ckbox" name="zffs4" checked="">
			  比特币支付
			</label>
			
		      </div>
		    </div>
		   
		    <div class="form-group">
		      <label class="col-md-3 control-label">
			提供帮助金额
		      </label>
		      <div class="col-md-9">
			<input type="text" class="form-control get_amount" placeholder="输入<?php echo ($jj01s); ?>-<?php echo ($jj01m); ?>"
			name="amount" id="amount" autocomplete="off" required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">排单方式</label>
		      <div class="col-sm-9">
			  <div class="input-group" style="width:300px;">
			    
			      <?php if(C('style_1_flag')): ?><input type="radio"   name="tsa" id="tsa" autocomplete="off" checked="checked" required value="1" onclick="getday(this)">财富通道一<?php endif; ?>
                  <?php if(C('style_2_flag')): ?><input type="radio"   name="tsa" id="tsa" autocomplete="off" required value="2" onclick="getday(this)">财富通道二<?php endif; ?>
                  <?php if(C('style_3_flag')): ?><input type="radio"   name="tsa" id="tsa" autocomplete="off" required value="3" onclick="getday(this)">财富通道三<?php endif; ?>
			  </div>
			  
			
			  
			 <p class="help-block">
			      
			  </p>
			  
			  
			    <div class="form-group" id="daysall" style="display:none;">
		      <label class="col-sm-3 control-label">我愿意排队的天数</label>
		      <div class="col-sm-9">
			  <div class="input-group" style="width: 80px;">
			    <span class="input-group-btn">
			      <button class="btn btn-default btn-sm" type="button" id="tsa-sub" onclick="jian()">-</button>
			    </span>
			      <input type="text" class="form-control" readonly name="tsa_day" id="tsa1" autocomplete="off" required value="5">
			    <span class="input-group-btn">
			      <button class="btn btn-default btn-sm" type="button" id="tsa-add" onclick="jia()">+</button>
			    </span>
			  </div>
			  
			  
			  <p class="help-block">
			      <input type="checkbox" class="i-checks" name="i-checks" checked="" required style="position: absolute; opacity: 0;">
     排队期间利息1%/天，排队最多10天，会员自由选择排队天数。打款确认后日息2%-3.2%,不限制计息时间。
			  </p>
			  
			  
			  
		      </div>
		    </div>
			
			  
		  </div>
		   <div class="form-group">
			<label class="col-md-3 control-label">
			  手机号:
			  <span class="ast">
			    *
			  </span>
			</label>
			<div class="col-md-9">
			  <input type="text" class="form-control get_amount" style="width:150px;" value="<?php echo ($userData["ue_phone"]); ?>" placeholder="按说明输入手机号" readonly name="phone1" autocomplete="off" required>
			  <input type="button" value="获取验证码"    style="margin-left:150px;margin-top:-35px;width:100px;"  id="code1" class="form-control" name="yanzheng"  />
			  
			</div>
		      </div>
			  
			      <div class="form-group">
			<label class="col-md-3 control-label">
			  手机验证码:
			  <span class="ast">
			    *
			  </span>
			</label>
			<div class="col-md-9">
			  <input type="text" class="form-control get_amount" placeholder="按说明输入验证码" name="code" id="old_code1" autocomplete="off" required>
			 
			   <p class="help-block">
			      <input type="checkbox"  name="shengming" value="1"  required >
                  <a href="<?php echo U('Kefu/shengming');?>">免责声明</a>
			   </p>
			  
			</div>
		      </div>
		  
		  <div class="form-group" style="display:none;" id="alldays"> 
		      <label class="col-md-3 control-label">
			天数
		      </label>
		      <div class="col-md-9">
			 <span style="margin-right:30px;"><font style="font-size:24px;cursor:pointer;" onclick="jian(1)">-</font>
				 <input type="text" style="width:30px;line-height:30px;height:30px;vertical-align:middle;text-align:center;" name="goodsnum[]" value="5" id="good1" />
				 <font style="font-size:20px;cursor:pointer;" onclick="jia(1)">+</font></span>
		      </div>
		    </div>
		 
		  <footer class="data-footer innerAll half text-right clearfix" style="height:100px;margin-top:-15px;">
		    <button type="button" class="btn btn-default" data-dismiss="modal">
		      取消
		    </button>
		    <!-- <button type="button" class="btn_next btn-warning btn-sm" data-dismiss="modal"
		    data-toggle="modal" data-target="#myModal2">提供帮助</button>-->
		    <input name="jhwjjc" id="jhwjjc" type="submit" class="btn_next btn-warning btn-sm btn btn-primary "
		    value="提供帮助" onClick="reg1()">
		  </footer>
		  </form></div>
		
		      </div>
		    </div>
			
			
                                                    </div>
													<hr class="margin-bottom-0">
												   <!-- /TAB 1 -->
												 </div>
												 <div class="tab-pane fade" id="box_tab2">
													<div class="row">
														<div class="col-md-12">
															<div class="demo-container" style="height:600px;">
																<div class="demo-placeholder" >
                                                                <div class="tab-pane fade in active" id="box_tab1">
													<!-- TAB 1 -->
                                                    <div class="demo-container" style="height:600px;">
													<div id="chart-dash" class="chart" style="height:600px;">
                                                    <form action="/Home/Index/jsbzcl" method="post" name="wallet_transfer_form_head" class="form-horizontal margin-none" id="wallet_transfer_form_head">
		  <fieldset>
		    <div class="widget-head widget-head-blue" style="text-align:center">
		      <h4 class="heading">
			申请接受帮助
		      </h4>
		    </div>
		    <div class="widget-body">
		      <div class="form-group">
			<label class="col-md-3 control-label">
			  选择钱包
			</label>
			<div class="col-md-9">
			    <select name="wallet_type" id="wallet_type_head">
				<option value="1" selected>互助钱包 (余额: <?php echo ($userData["ue_money"]); ?> RMB)</option>
				<option value="2">经理奖钱包 (余额: <?php echo ($userData["jl_he"]); ?> RMB)</option>
				<option value="3">推荐奖钱包 (余额: <?php echo ($userData["tj_he"]); ?> RMB)</option>
			    </select>←选择钱包
			</div>
		      </div>
		      <div class="form-group">
			<label class="col-md-3 control-label">
			  支付方式
			</label>
			<div class="col-md-9">
			  <label>
			    <input type="checkbox" value="1" class="ckbox2" name="zffs2" checked="">
			    支付宝支付
			  </label>
			  <label>
			    <input type="checkbox" value="1" class="ckbox2" name="zffs3" checked="">
			    微信支付
			  </label>
			  <label>
			    <input type="checkbox" value="1" class="ckbox2" name="zffs1" checked="">
			    银行支付
			  </label>  
              
             <label>
			  <input type="checkbox" value="1" class="ckbox" name="zffs4" checked="">
			  比特币支付
			</label>
			
			</div>
		      </div>
		      <div class="form-group">
			<label class="col-md-3 control-label">
			  接受帮助总额:
			  <span class="ast">
			    *
			  </span>
			</label>
			<div class="col-md-9">
			  <input type="text" class="form-control get_amount" placeholder="按说明输入金额" name="get_amount" autocomplete="off" required>
			  <p class="help-block">
			      请输入RMB <span id="tx_themin"><?php echo ($jj01s); ?></span>起, 至<span id="tx_themax"><?php echo ($jj01m); ?></span>, 且为<span id="tx_thebeishu"><?php echo ($jj01); ?></span>的倍数
			  </p>
			  
			   
			  
			</div>
		      </div>
			   <div class="form-group">
			<label class="col-md-3 control-label">
			  手机号:
			  <span class="ast">
			    *
			  </span>
			</label>
			<div class="col-md-9">
			  <input type="text" class="form-control get_amount" style="width:150px;" value="<?php echo ($userData["ue_phone"]); ?>" placeholder="按说明输入手机号" readonly name="phone" autocomplete="off" required>
			  <input type="button" value="获取验证码"    style="margin-left:150px;margin-top:-35px;width:100px;"  id="code" class="form-control" name="yanzheng"  />
			  
			</div>
		      </div>
			  
			     <div class="form-group">
			<label class="col-md-3 control-label">
			  二级密码:
			  <span class="ast">
			    *
			  </span>
			</label>
			<div class="col-md-9">
			  <input type="text" class="form-control get_amount" placeholder="按说明输入二级密码" name="getsecpwd" autocomplete="off" required>
			 
			</div>
		      </div>
			  
			     <div class="form-group">
			<label class="col-md-3 control-label">
			  手机验证码:
			  <span class="ast">
			    *
			  </span>
			</label>
			<div class="col-md-9">
			  <input type="text" class="form-control get_amount" placeholder="按说明输入验证码" name="code" id="old_code" autocomplete="off" required>
			 
			   <p class="help-block">
			      <input type="checkbox"  name="shengming" value="1"  required >
                  <a href="<?php echo U('Kefu/shengming');?>">免责声明</a>
			   </p>
			  
			</div>
		      </div>
			 
		    </div>
		    <div class="data-footer innerAll half text-right clearfix">
			<button value="继续" id="withdraw_btn" type="submit" class="btn btn-primary btn-sm" onClick="reg()">
			  接受帮助
			</button>
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
          }
		  
		  
									document.getElementById("code1").onclick=function(){
									   time("code1");
									   
									  var phone=$("input[name='phone1']").val();
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
			function reg1() {
	
                                               var result=true;
											   var phone=$("input[name='phone1']").val();
											   if(phone == ''){
													 alert('手机号不能为空');
													  return false;
											   }
											   var reg=/^\d{11}$/;
											   if(reg.test(phone) == false){
											        alert('手机号格式不正确');
													  return false;
											   }
											   var old_code=$("#old_code1").val();
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
          }
			    $(function () {
				//选择钱包
				$("#wallet_type_head").change(function(){
				    var wallet_type = $("#wallet_type_head").val();
				    if(wallet_type==2){
					//经理奖
					$("#tx_themin").html('<?php echo ($txthemin); ?>');
					$("#tx_themax").html('<?php echo ($txthemax); ?>');
					$("#tx_thebeishu").html('<?php echo ($txthebeishu); ?>');
					document.wallet_transfer_form_head.action = "<?php echo U('/Home/Index/jsbzcl1');?>";
				    }else if(wallet_type==3){
					//推荐奖
					$("#tx_themin").html('<?php echo ($txthemin); ?>');
					$("#tx_themax").html('<?php echo ($txthemax); ?>');
					$("#tx_thebeishu").html('<?php echo ($txthebeishu); ?>');
					document.wallet_transfer_form_head.action = "<?php echo U('/Home/Index/jsbzcl2');?>";
				    }else{
					//互助奖金
					$("#tx_themin").html('<?php echo ($jj01s); ?>');
					$("#tx_themax").html('<?php echo ($jj01m); ?>');
					$("#tx_thebeishu").html('<?php echo ($jj01); ?>');
					document.wallet_transfer_form_head.action = "<?php echo U('/Home/Index/jsbzcl');?>";
				    }
				});
				
				//排队天数
				$('#tsa-add').on('click', function() {
				    var tsa_val = $('#tsa').val();
				    if(isNaN(tsa_val)){tsa_val = 0;}

				    var mat=Math.floor(parseInt(tsa_val)+1);
				    if(mat<0){mat=0;}else if(mat>10){mat=10;}
				    $("#tsa").val(mat);
			        });
			        $('#tsa-sub').on('click', function() {
				    var tsa_val = $('#tsa').val();
				    if(isNaN(tsa_val)){tsa_val = 0;}
				    
				    var mat=Math.floor(parseInt(tsa_val)-1);
				    if(mat<0){mat=0;}else if(mat>10){mat=10;}
				    $("#tsa").val(mat);
			        });
				$("#tsa").bind("change",function(){
				    if(isNaN($(this).val())){
					$(this).val(0);
				    }
				    var ths=$(this).val();
				    var mat=Math.floor(ths);
				    if(mat<0){
					    mat=0;
				    }else if(mat>10){
					    mat=10;
				    }
				    //alert(mat);
				    $("#tsa").val(mat);
				});
			    });
			</script>
		    </div>
		  </fieldset>
		</form>
                                                    </div></div>
													<hr class="margin-bottom-0">
												   <!-- /TAB 1 -->
												 </div>
                                                                </div>
															</div>
														</div>
													</div>
												</div>
											 </div>
										</div>
									</div>
								</div>
								<!-- /BOX -->
				   </div>
					
						<!-- NEW ORDERS & STATISTICS -->
						<div class="row">
						  <div class="col-md-6">
								<!-- BOX -->
								<div class="box border inverse">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>进入高息期的帮助 <span style="color:#ffff00;font-size: 12px;">(打款确认后进入高息期)</span></h4>
                                        <div class="tools hidden-xs">
											
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body ">
										<table class="table table-bordered table-primary">
		    <thead>
			<tr class="tac">
			    <th>编号</th>
			    <th>日期</th>
			    <th>说明</th>
			    <th>金额 </th>
			    <th>利息 </th>
			    <th>天数</th>
			    <th>提现 </th>
			    <th>是否转出</th>
			    <th>匹配编号</th>
			    <th>匹配状态</th>
			</tr>
		    </thead>
		     <tbody>
		    <?php if(is_array($list_high)): foreach($list_high as $key=>$v): ?><tr role="row" class="odd">
			    <td><img src="/cssmmm/strelka322.png" width="26" height="26"> R<?php echo ($aab=$v["id"]); ?></td>
			    <td>申请时间:<?php echo ($v["date"]); ?></td>
			    <td><?php echo ($v["note"]); ?></td>
			    <td><?php echo ($v["jb"]); ?></td>
			    <td>合计<?php echo (user_jj_lx($aab,$ztrs)); ?></td>
			    <td>
                <?php if($v["dakuantype"] == '1'): ?>财富通道一：冻结时间15天 每天百分之1 利息<?php endif; ?>
                <?php if($v["dakuantype"] == '2'): ?>财富通道二<?php endif; ?>
                <?php if($v["dakuantype"] == '3'): ?>财富通道三：冻结时间10天  每日利息百分之1.5<?php endif; ?>
                </td>
			    <td>
				<?php if($v["zt"] == '0'): ?><font color="#FF0000">恭喜你获得2%+X的日息</font><br>(<?php echo (user_jj_zt_z($aab,$ztrs1)); ?>) <a
					href="javascript:if(confirm('打款后日息2-3.2%，是您获利最佳的时机！大多数会员都不着急提现，而是等待计息。转出提现后将停止计息,确定要转出吗?'))location='/Home/Info/tgbz_tx_cl/id/<?php echo ($v["id"]); ?>/'">点击确认提款</a>
				    <?php else: ?>
				    已转出<?php endif; ?>
			    </td>
			    <td>
				<?php if($v["zt"] == '0'): ?>未转出<?php endif; ?>
				<?php if($v["zt"] == '1'): ?>已转出<?php endif; ?>
			    </td>
			    <td>R<?php echo ($bbh=$v["r_id"]); ?></td>
			    <td><?php echo (user_jj_pipei_z($bbh,$ztrs2)); ?></td>
			</tr>
			</if><?php endforeach; endif; ?>
		</table>
									</div>
								</div>
								<!-- /BOX -->
							</div>
			       </div>
						<!-- /NEW ORDERS & STATISTICS -->
						<!-- CALENDAR & CHAT -->
						<div class="row">
							<!-- CALENDAR -->
							<div class="col-md-6">
								<!-- BOX -->
						    <div class="box border pink">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>处理中的提供帮助</h4>
                                        <div class="tools hidden-xs">
											
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
						  </div>
									<div class="box-body">
                                     <?php if(empty($plist)): ?><p class="text-center">暂无数据</p>
	      <?php else: ?>
										<table class="table table-bordered table-primary">
                <thead>
                  <tr class="tac">
                    <th>
                      编号
                    </th>
                    <th>
                      交易进度
                    </th>
                    <th>
                      交易时间
                    </th>
                    <th>
                      提供会员
                    </th>
                    <th>
                      付款方式
                    </th>
                    <th>
                      付款金额
                    </th>
                    <th>
                      接受会员
                    </th>
                    <th>
                      操作
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i; if($o["zt"] != 2): ?><tr class="odd">
                      <td>
                        <i>
                          <?php if($o["zt"] == 0): ?><img src="/cssmmm/zt0.jpg"><?php endif; ?>
                          <?php if($o["zt"] == 1): ?><img src="/cssmmm/zt1.jpg"><?php endif; ?>
                          <?php if($o["zt"] == 2): ?><img src="/cssmmm/zt2.jpg"><?php endif; ?>
                        </i>
                        <br>
                        <p class="text-center">R<?php echo ($o["id"]); ?></p>
                      </td>
                      <td>
                        <?php if($o["zt"] == 0): ?>待付款<?php endif; ?>
                        <?php if($o["zt"] == 1): ?>已付款<?php endif; ?>
                        <?php if($o["zt"] == 2): ?><font color="#017F01">
                            交易成功
                          </font><?php endif; ?>
                      </td>
                      </td>
                      <td>
                        <small>
                          配对时间<?php echo ($a1=$o["date"]); ?>
                          <div style="display: none">
                            <?php echo ($aab=$o["g_user"]); ?>
                          </div>
                        </small>
                        <br>
                        <?php if($o["zt"] == 0): ?><small style="font-size:14px;font-weight:bold;color:#ff0000;">
                            剩余打款时间：
                            <span data="<?php echo (datedqsj($o["date"])); ?>" class="countdownbox">
                            </span>
                            <div style="display: none">
                              <?php echo ($aab=$v3["p_user"]); ?>
                            </div>
                          </small><?php endif; ?>
                        <?php if($o["zt"] == 1): ?><small style="font-size:14px;font-weight:bold;color:#ff0000;">
                            剩余确认时间：
                            <span data="<?php echo (datedqsj($o["date_hk"])); ?>" class="countdownbox">
                            </span>
                            <div style="display: none">
                              <?php echo ($aab=$o["p_user"]); ?>
                            </div>
                          </small><?php endif; ?>
                        <?php if($o["zt"] == 2): ?><small>
                            汇款时间<?php echo ($aa1=$o["date_hk"]); ?>
                            <div style="display: none">
                              <?php echo ($aab=$o["p_user"]); ?>
                            </div>
                          </small><?php endif; ?>
                      </td>
                      <td>
                        自己
                      </td>
                      <td>
                        <?php if($o["zffs1"] == 1): ?>银行<?php endif; ?>
                        <?php if($o["zffs2"] == 1): ?>支付宝<?php endif; ?>
                        <?php if($o["zffs3"] == 1): ?>微信<?php endif; ?>
                      </td>
                      <td>
                        <?php echo ($o["jb"]); ?>元
                        <br>
                        <br>
                        <?php if($o["pic"] != '0'): ?><a href="<?php echo ($o["pic"]); ?>" target="_blank">
                            <i style="font-size: 14px;wallet-colorr:#ff0000;display: inline-block;font: normal normal normal 14px/1 FontAwesome;">
                              付款凭证
                            </i>
                          </a><?php endif; ?>
                      </td>
                      <td>
                        <?php echo (cx_user($o["g_user"])); ?>
                      </td>
                      <td>
                        <input style="width:80px;margin-bottom:3px; background-color:#fff; color:#333;" name="btn2"
                        id="btn2<?php echo ($o["id"]); ?>" type="button" value="留　言" class="btn btn-info btn-xs addmsg"
                        data-toggle="modal" data-id="8802104" data-target="#myModal7">
                        <br>
                        <input style="width:80px;margin-bottom:3px;" name="btn" id="btn<?php echo ($o["id"]); ?>"
                        type="button" value="详细资料" class="btn_detail btn btn-xs btn-default" data-toggle="modal" 
                        data-target="#myModal5">
                        <br>
                        <?php if($o["zt"] == '0'): if($o["ts_zt"] == '1'): ?>24小时未汇款
                            <br>
                            请联系对方取
                            <br>
                            消投诉!
                            <?php else: ?>
                            <input style="width:80px;background:#003d74; color:#fff;" name="btn3" id="btn33<?php echo ($o["id"]); ?>" type="button"
                            value="确认已付款" class="btn_detail btn-primary btn-xs" data-toggle="modal"
                            data-target="#myModa24">
                            <script>
                              $(function() {
                                $('#btn33<?php echo ($o["id"]); ?>').click(function() {
                                  $("#mainframe13", parent.document.body).attr("src", "/Home/Index/home_ddxx_pcz/id/<?php echo ($o["id"]); ?>/"); $("#mainframe13").reload()
                                })
                              })
                            </script><?php endif; endif; ?>
                        <?php if($o["zt"] == 1): if($o["ts_zt"] == '2'): ?>你已被对方投诉请与
                            <br>
                            对方取得联系!
                            <?php else: ?>
                            <span <?php echo (datedqsj2($o["date"])); ?>>
                              <input style="width:120px;" name="btn3" id="btn33<?php echo ($o["id"]); ?>" type="button"
                              value="<?php echo ($jjdktime); ?>小时未确认投诉" class="btn_detail btn-primary btn-xs" data-toggle="modal"
                              data-target="#myModa24">
                              </span>
                              <script>
                                $(function() {
                                  $('#btn33<?php echo ($o["id"]); ?>').click(function() {
                                    $("#mainframe13", parent.document.body).attr("src", "/Home/Index/home_ddxx_g_wqr/id/<?php echo ($o["id"]); ?>/"); $("#mainframe13").reload()
                                  })
                                })
                              </script><?php endif; endif; ?>
                      </td>
                    </tr>
                    <script>
                      $(function() {
                        $('#btn<?php echo ($o["id"]); ?>').click(function() {
                          $("#mainframe11", parent.document.body).attr("src", "/Home/Index/home_ddxx/id/<?php echo ($o["id"]); ?>/"); $("#mainframe11").reload();
                        });
                        $('#btn2<?php echo ($o["id"]); ?>').click(function() {
                          $("#mainframe12", parent.document.body).attr("src", "/Home/Index/home_ddxx_ly/id/<?php echo ($o["id"]); ?>/"); $("#mainframe12").reload();
                        });
                      });
                    </script><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </table><?php endif; ?>
									</div>
								</div>
								<!-- /BOX -->
							</div>
							<!-- /CALENDAR -->
							<!-- CHAT -->
							<div class="col-md-6">
								<!-- BOX -->
						    <div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i><span class="heading">处理中的接受帮助</span></h4><div class="tools hidden-xs">
											
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body">
                                    <?php if(empty($glist)): ?><p class="text-center">暂无数据</p>
	      <?php else: ?>
										<table class="table table-bordered table-primary">
                <thead>
                  <tr class="tac">
                    <th>
                      编号
                    </th>
                    <th>
                      交易进度
                    </th>
                    <th>
                      交易时间
                    </th>
                    <th>
                      提供会员
                    </th>
                    <th>
                      付款方式
                    </th>
                    <th>
                      付款金额
                    </th>
                    <th>
                      接受会员
                    </th>
                    <th>
                      操作
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($glist)): $i = 0; $__LIST__ = $glist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i; if($o["zt"] != 2): ?><tr class="odd" role="row">
                      <td>
                        <i>
                          <?php if($o["zt"] == 0): ?><img src="/cssmmm/zt0.jpg"><?php endif; ?>
                          <?php if($o["zt"] == 1): ?><img src="/cssmmm/zt1.jpg"><?php endif; ?>
                          <?php if($o["zt"] == 2): ?><img src="/cssmmm/zt2.jpg"><?php endif; ?>
                        </i>
                        <p class="text-center">S<?php echo ($o["id"]); ?></p>
                      </td>
                      <td>
                        <?php if($o["zt"] == 0): ?>待付款<?php endif; ?>
                        <?php if($o["zt"] == 1): ?>已付款<?php endif; ?>
                        <?php if($o["zt"] == 2): ?><font color="#017F01">
                            交易成功
                          </font><?php endif; ?>
                      </td>
                      </td>
                      <td>
                        <small>
                          配对时间<?php echo ($a1=$o["date"]); ?>
                          <div style="display: none">
                            <?php echo ($aab=$o["g_user"]); ?>
                          </div>
                        </small>
                        <br>
                        <?php if($o["zt"] == 0): ?><small style="font-size:14px;font-weight:bold;color:#ff0000;">
                            剩余打款时间：
                            <span data="<?php echo (datedqsj($o["date"])); ?>" class="countdownbox">
                            </span>
                            <div style="display: none">
                              <?php echo ($aab=$v3["p_user"]); ?>
                            </div>
                          </small><?php endif; ?>
                        <?php if($o["zt"] == 1): ?><small style="font-size:14px;font-weight:bold;color:#ff0000;">
                            剩余确认时间：
                            <span data="<?php echo (datedqsj($o["date_hk"])); ?>" class="countdownbox">
                            </span>
                            <div style="display: none">
                              <?php echo ($aab=$o["p_user"]); ?>
                            </div>
                          </small><?php endif; ?>
                        <?php if($o["zt"] == 2): ?><small>
                            汇款时间<?php echo ($aa1=$o["date_hk"]); ?>
                            <div style="display: none">
                              <?php echo ($aab=$o["p_user"]); ?>
                            </div>
                          </small><?php endif; ?>
                      </td>
                      <td>
                        <?php echo (cx_user($o["p_user"])); ?>
                      </td>
                      <td>
                        <?php if($o["zffs1"] == 1): ?>银行<?php endif; ?>
                        <?php if($o["zffs2"] == 1): ?>支付宝<?php endif; ?>
                        <?php if($o["zffs3"] == 1): ?>微信<?php endif; ?>
                      </td>
                      <td>
                        <?php echo ($o["jb"]); ?>元
                        <br>
                        <?php if($o["pic"] != '0'): ?><a href="<?php echo ($o["pic"]); ?>" target="_blank">
                            <i style="font-size: 14px;wallet-colorr:#ff0000;display: inline-block;font: normal normal normal 14px/1 FontAwesome;">
                              付款凭证
                            </i>
                          </a><?php endif; ?>
                      </td>
                      <td>
                        自己
                      </td>
                      <td>
                        <input style="width:80px;margin-bottom:3px;background:#4CBDEB" name="btn2"
                        id="btn2<?php echo ($o["id"]); ?>" type="button" value="留　言" class="btn btn-info btn-xs addmsg"
                        data-toggle="modal" data-id="8802104" data-target="#myModal7">
                        <br>
                        <input style="width:80px;margin-bottom: 3px;" name="btn" id="btn<?php echo ($o["id"]); ?>"
                        type="button" value="详细资料" class="btn_detail btn btn-xs btn-default" data-toggle="modal" 
                        data-target="#myModal5">
                        <br>

                      <?php if($o["zt"] == 1): if($o["ts_zt"] == '3'): ?>28小时未确认收款,<br>
                            已被投诉,请联系对<br>
                            方取消投诉!

                            <?php else: ?>
                            <input style="width:80px;" name="btn23" id="btn23<?php echo ($o["id"]); ?>" type="button" value="确认收款" class="btn_detail btn-primary btn-xs" data-toggle="modal"  data-target="#myModa23"><?php endif; ?>
                            <script>
                            $(function(){
                            $('#btn23<?php echo ($o["id"]); ?>').click(function(){
                            $("#mainframe188",parent.document.body).attr("src","/Home/Index/home_ddxx_gcz/id/<?php echo ($o["id"]); ?>/") 
                            $("#mainframe188").reload();
                            })
                            })
                            </script><?php endif; ?>


                        <?php if($o["zt"] == 0): if($o["ts_zt"] == '2'): ?>你已被对方投诉请与
                            <br>
                            对方取得联系!
                            <?php else: ?>
                              <span <?php echo (datedqsj2($a1,$aa2)); ?>>
                              <input style="width:120px;" name="btn23" id="btn23<?php echo ($o["id"]); ?>" type="button" value="<?php echo ($jjdktime); ?>小时未打款投诉" class="btn_detail btn-primary btn-xs" data-toggle="modal"  data-target="#myModa23"></span>   
                             <script>
                              $(function(){
                                $('#btn23<?php echo ($o["id"]); ?>').click(function(){
                                $("#mainframe188",parent.document.body).attr("src","/Home/Index/home_ddxx_g_wdk/id/<?php echo ($o["id"]); ?>/") 
                                $("#mainframe188").reload();
                                });
                              });
                              </script><?php endif; endif; ?>
                      </td>
                    </tr>
                    <script>
                      $(function() {
                        $('#btn<?php echo ($o["id"]); ?>').click(function() {
                          $("#mainframe11", parent.document.body).attr("src", "/Home/Index/home_ddxx/id/<?php echo ($o["id"]); ?>/"); $("#mainframe11").reload();
                        });
                        $('#btn2<?php echo ($o["id"]); ?>').click(function() {
                          $("#mainframe12", parent.document.body).attr("src", "/Home/Index/home_ddxx_ly/id/<?php echo ($o["id"]); ?>/"); $("#mainframe12").reload();
                        });
                      });
                    </script><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </table><?php endif; ?>
									</div>
								</div>
								<!-- /BOX -->
							</div>
							<!-- CHAT -->
					</div>
                    <div class="col-md-6">
								<!-- BOX -->
								<div class="box border orange">
									<div class="box-title">
										<h4><i class="fa fa-hand-o-up"></i>申请提供的帮助</h4>
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
										<table class="table table-hover">
											<thead>
											  <tr>
												<th>编号</th>
												<th>参与者</th>
												<th>数额</th>
												<th>日期</th>
                                                <th>状态</th>
                                                <th>互助模式</th>
											  </tr>
											</thead>
											<tbody>
                                            <?php if(is_array($tlist)): $i = 0; $__LIST__ = $tlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
												<td>P<?php echo ($v["id"]); ?></td>
												<td><?php echo ($v["user_nc"]); ?></td>
												<td><?php echo (hk($v["jb"])); ?></td>
												<td><?php echo ($v["date"]); ?></td>
                                                <td> <?php if($v["zt"] == 0): ?><span class="pending">
                      等待中
                    </span><?php endif; ?>
                  <?php if($v["zt"] == 1): ?><span class="pending">
                      匹配成功
                    </span><?php endif; ?></td>
                  <td><font style="color:#ff0000;">
        <?php if($v["dakuantype"] == '1'): ?>财富通道一：冻结时间15天，每天百分之1 利息<?php endif; ?>
                <?php if($v["dakuantype"] == '2'): ?>财富通道二：冻结时间15天，打款对方确认之后进入每日高利息区<?php endif; ?>
                <?php if($v["dakuantype"] == '3'): ?>财富通道三：冻结时间10天，每日利息百分之1.5<?php endif; ?>
		</font>
                      </td>
											  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										  </table>
									</div>
                                    
								</div>
								<!-- /BOX -->
							</div>
<div class="col-md-6">
								<!-- BOX -->
<div class="box border primary ">
									<div class="box-title">
										<h4><i class="fa fa-hand-o-up"></i>申请接受的帮助</h4>
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
										<table class="table table-hover">
											<thead>
											  <tr>
												<th>编号</th>
												<th>参与者</th>
												<th>数额</th>
												<th>钱包</th>
                                                <th>日期</th>
                                                <th>状态</th>
											  </tr>
											</thead>
											<tbody>
                                             <?php if(is_array($jlist)): $i = 0; $__LIST__ = $jlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
												<td>G<?php echo ($v["id"]); ?></td>
												<td><?php echo ($v["user_nc"]); ?></td>
												<td><?php echo (hk($v["jb"])); ?></td>
												<td>
                                                <?php if($v["qb"] == 0): ?>余额钱包<?php endif; ?>
                                                <?php if($v["qb"] == 2): ?>推荐钱包<?php endif; ?>
                                                <?php if($v["qb"] == 1): ?>经理钱包<?php endif; ?></td>
       											 <td><?php echo ($v["date"]); ?></td>
                                                <td> <?php if($v["zt"] == 0): ?><span class="pending">
                                                              等待中
                                                            </span><?php endif; ?>
                                                          <?php if($v["zt"] == 1): ?><span class="pending">
                                                              匹配成功
                                                            </span><?php endif; ?></td>
											  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										  </table>
</div>
								</div>
								<!-- /BOX -->
							</div>
						<!-- /CALENDAR & CHAT -->
						<div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
						</div>
				  </div><!-- /CONTENT-->
				</div>
		  </div>
</div>
	</section>
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="color-line">
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="title">
          详细的订单信息
        </h5>
        <small class="font-bold">
        </small>
      </div>
      <div class="modal-body" style="height:400px; overflow:auto">
        <iframe src='' id="mainframe11" width="100%;" height="350px;">
        </iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-default" data-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
    <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="color-line">
          </div>
          <div class="modal-header">
            <h5 class="modal-title" id="title2">
              留言信息
            </h5>
            <small class="font-bold">
            </small>
          </div>
          <div class="modal-body" style="height:300px; overflow:auto">
            <iframe src='' id="mainframe12" width="830px;" height="350px;">
            </iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-default" data-dismiss="modal">
              关闭
            </button>
          </div>
        </div>
      </div>
    </div>
<div class="modal fade" id="dialog-msg">
  <div class="modal-dialog">
    <fieldset>
      <form id="pdgd_message_form" method="post">
        <input type="hidden" name="uid" value="82662186">
        <input type="hidden" name="mdid">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="hierarchy_title">
              信息
            </h3>
          </div>
          <div class="modal-body np">
            <div id="message_div" class="messageWrap">
            </div>
            <div id="message_foot">
              <div id="upload">
                <div class="btn-group btn-group-sm" id="upload_clone">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="input-group">
                      <div class="form-control col-md-3">
                        <i class="fa fa-file fileupload-exists">
                        </i>
                        <span class="fileupload-preview">
                        </span>
                      </div>
                      <span class="input-group-btn">
                        <span class="btn btn-default btn-sm btn-file">
                          <span class="fileupload-new">
                            选择文件
                          </span>
                          <span class="fileupload-exists">
                            替换文件
                          </span>
                          <input type="file" class="btn btn-inverse" name="upload">
                        </span>
                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                          清除
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <textarea class="form-control form-control-text-area" placeholder="回复"
              name="message" id="message" rows="4">
              </textarea>
              <p class="error" id="message_text">
              </p>
            </div>
          </div>
          <footer class="modal-footer clearfix">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal"
            value="取消" />
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add_message"
            value="回复信息" />
          </footer>
        </div>
      </form>
    </fieldset>

  </div>
</div>
<div class="modal fade" id="dialog-confirm-confirm">
  <div class="modal-dialog">
    <form id="approve_pdgd_form" enctype="multipart/form-data" method="post">
      <input type="hidden" name="__req" value="12">
      <input type="hidden" name="__nonce" value="658026269a5cc1d7205b34c6b6e35efcee9d5c2c51b388305200daabf13efd20">
      <input type="hidden" name="confirm_mdid">
      <fieldset>
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="hierarchy_title">
              确认
            </h3>
          </div>
          <div class="modal-body">
            您确定要肯定此合并舍得吗?
            <br/>
            <br/>
            为了双方资金安全抵达，系统新上了上传汇款交易成功图片，您可以选择直接点上确认，或者上传付款证明以确认此舍得合并，才点上确认都可以。
            <br/>
            <br/>
            在得的会员，对方在能点上批准时，会看到您所上传的打款交易照片！
            <br/>
            <br/>
            <div id="confirm_upload_images_div">
              <div id="confirm_message_div" class="messageWrap">
              </div>
              <div id="confirm_message_foot">
                <div id="confirm_upload">
                  <div class="btn-group btn-group-sm" id="confirm_upload_clone">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="input-group">
                        <div class="form-control col-md-3">
                          <i class="fa fa-file fileupload-exists">
                          </i>
                          <span class="fileupload-preview">
                          </span>
                        </div>
                        <span class="input-group-btn">
                          <span class="btn btn-default btn-sm btn-file">
                            <span class="fileupload-new">
                              选择文件
                            </span>
                            <span class="fileupload-exists">
                              替换文件
                            </span>
                            <input type="file" class="btn btn-inverse" name="confirm_upload[]">
                          </span>
                          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                            清除
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="confirm_message_div" class="messageWrap">
              </div>
              <div id="confirm_message_foot">
                <div id="confirm_upload">
                  <div class="btn-group btn-group-sm" id="confirm_upload_clone">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="input-group">
                        <div class="form-control col-md-3">
                          <i class="fa fa-file fileupload-exists">
                          </i>
                          <span class="fileupload-preview">
                          </span>
                        </div>
                        <span class="input-group-btn">
                          <span class="btn btn-default btn-sm btn-file">
                            <span class="fileupload-new">
                              选择文件
                            </span>
                            <span class="fileupload-exists">
                              替换文件
                            </span>
                            <input type="file" class="btn btn-inverse" name="confirm_upload[]">
                          </span>
                          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                            清除
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="confirm_message_div" class="messageWrap">
              </div>
              <div id="confirm_message_foot">
                <div id="confirm_upload">
                  <div class="btn-group btn-group-sm" id="confirm_upload_clone">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="input-group">
                        <div class="form-control col-md-3">
                          <i class="fa fa-file fileupload-exists">
                          </i>
                          <span class="fileupload-preview">
                          </span>
                        </div>
                        <span class="input-group-btn">
                          <span class="btn btn-default btn-sm btn-file">
                            <span class="fileupload-new">
                              选择文件
                            </span>
                            <span class="fileupload-exists">
                              替换文件
                            </span>
                            <input type="file" class="btn btn-inverse" name="confirm_upload[]">
                          </span>
                          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                            清除
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="confirm_message_div" class="messageWrap">
              </div>
              <div id="confirm_message_foot">
                <div id="confirm_upload">
                  <div class="btn-group btn-group-sm" id="confirm_upload_clone">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="input-group">
                        <div class="form-control col-md-3">
                          <i class="fa fa-file fileupload-exists">
                          </i>
                          <span class="fileupload-preview">
                          </span>
                        </div>
                        <span class="input-group-btn">
                          <span class="btn btn-default btn-sm btn-file">
                            <span class="fileupload-new">
                              选择文件
                            </span>
                            <span class="fileupload-exists">
                              替换文件
                            </span>
                            <input type="file" class="btn btn-inverse" name="confirm_upload[]">
                          </span>
                          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                            清除
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="confirm_message_div" class="messageWrap">
              </div>
              <div id="confirm_message_foot">
                <div id="confirm_upload">
                  <div class="btn-group btn-group-sm" id="confirm_upload_clone">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="input-group">
                        <div class="form-control col-md-3">
                          <i class="fa fa-file fileupload-exists">
                          </i>
                          <span class="fileupload-preview">
                          </span>
                        </div>
                        <span class="input-group-btn">
                          <span class="btn btn-default btn-sm btn-file">
                            <span class="fileupload-new">
                              选择文件
                            </span>
                            <span class="fileupload-exists">
                              替换文件
                            </span>
                            <input type="file" class="btn btn-inverse" name="confirm_upload[]">
                          </span>
                          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                            清除
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer" id="confirm_cancel_btn">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
              取消
            </button>
            <input type="submit" id="btn_approve_donation" class="btn btn-primary btn-sm"
            value="确定" />
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<div class="modal fade" id="dialog-report-confirm">
  <div class="modal-dialog">
    <form id="report_pdgd_form" enctype="multipart/form-data" method="post">
      <input type="hidden" name="__req" value="8">
      <input type="hidden" name="__nonce" value="db1938e53e777acaafe76bdaa833d43352a4303272baa4541d4dbbf5560859c4">
      <input type="hidden" name="report_uid">
      <input type="hidden" name="report_mdid">
      <fieldset>
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="hierarchy_title">
              确认举报
            </h3>
          </div>
          <div class="modal-body">
            <p>
              请提供您欲举报此合并舍得的原因。
            </p>
            <label>
              选项:
            </label>
            <select class="form-control" name="report_reason">
              <option value="">
                请选择
              </option>
              <option value="6">
                已经打款,对方没有确认
              </option>
              <option value="7">
                对方银行账号错误
              </option>
              <option value="8">
                联系方式有问题
              </option>
              <option value="5">
                其他
              </option>
            </select>
            <span id="report_reason_err_text" class="error">
            </span>
            <br/>
            <label>
              信息:
            </label>
            <textarea class="form-control form-control-text-area" placeholder="Reply here..."
            name="report_message" rows="4">
            </textarea>
            <div id="confirm_upload_images_div">
              <div id="confirm_message_div" class="messageWrap">
              </div>
              <div id="confirm_message_foot">
                <div id="report_upload">
                  <div class="btn-group btn-group-sm" id="confirm_upload_clone">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="input-group">
                        <div class="form-control col-md-3">
                          <i class="fa fa-file fileupload-exists">
                          </i>
                          <span class="fileupload-preview">
                          </span>
                        </div>
                        <span class="input-group-btn">
                          <span class="btn btn-default btn-sm btn-file">
                            <span class="fileupload-new">
                              选择文件
                            </span>
                            <span class="fileupload-exists">
                              替换文件
                            </span>
                            <input type="file" class="btn btn-inverse" name="report_upload">
                          </span>
                          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                            清除
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer" id="approve_cancel_btn">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
              取消
            </button>
            <input type="submit" id="btn_cancel_donation" class="btn btn-primary btn-sm"
            value="确定" />
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<div class="modal fade" id="dialog-photo">
  <div class="modal-dialog">
    <form name="cancel_order_form" method="post" action="">
      <input type="hidden" name="" value="">
      <input type="hidden" name="" value="">
      <input type="hidden" name="pboid" value>
      <div class="modal-content">
        <div class="modal-body np" id="image_div">
        </div>
      </div>
    </form>
  </div>
</div>


<div class="modal fade" id="myModa23" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="title23">请选择</h5>
                <small class="font-bold"></small>
            </div>
            <div class="modal-body" style="height:400px; overflow:auto">
              <iframe src='' id="mainframe188" width="830px;" height="350px;" ></iframe>
            </div>
            <div class="modal-footer">
                
                  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <!--  
                <button type="button" class="btn-primary" data-dismiss="modal" id="select_fanshi">确认</button>-->
            </div>



        </div>
    </div>
</div>

<div class="modal fade" id="myModa24" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="title24">请选择</h5>
                <small class="font-bold"></small>
            </div>
            <div class="modal-body" style="height:400px; overflow:auto">
              <iframe src='' id="mainframe13" width="830px;" height="350px;" ></iframe>
            </div>
            <div class="modal-footer">
                
                  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                 
                <!--<button type="button" class="btn-primary" data-dismiss="modal" id="select_fanshi2">确认</button> -->
            </div>
        </div>
    </div>
</div>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
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
	<script type="text/javascript" src="/js/jquery-todo/js/paddystodolist.js"></script>
	<!-- TIMEAGO -->
	<script type="text/javascript" src="/js/timeago/jquery.timeago.min.js"></script>
	<!-- FULL CALENDAR -->
	<script type="text/javascript" src="/js/fullcalendar/fullcalendar.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="/js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- GRITTER -->
	<script type="text/javascript" src="/js/gritter/js/jquery.gritter.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="/js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("index");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
               <script type="text/javascript">
                jQuery(document).ready(function($) {
                  // prompt user a box to pd after completed a gd
                  if (0) {
                    // $('#prompt-repd').modal('show');
                  }
                  $('#prompt-repd').on('click', '#click-pd',
                  function(e) {
                    e.preventDefault();
                    $("#pdBtn").trigger("click");
                    $('#prompt-repd').modal('hide');
                  });

                  $("#load_expected_bonus").click(function() {
                    $("#expected_bonus_list").html('<img src="/bitStyle/images/loader2.gif"/>');
                    $("#expected_bonus_list").load("?uid=" + 82662186);
                  });
                });
              </script>
              <script type="text/javascript">
                jQuery(document).ready(function($) {
                  var gdBtn = $('#gdBtn');
                  var pdBtn = $('#pdBtn');

                  pdBtn.click(function() {
                    $(this).toggleClass('active');
                    gdBtn.removeClass('active');
                    $('#pdWrap').stop(true, false).slideToggle('fast');
                    $('#gdWrap').stop(true, false).slideUp('fast').removeClass('open');
                    return false;
                  });
                  // if user status is freeze or just unblock and not yet do the maintain
                  gdBtn.click(function() {
                    $(this).toggleClass('active');
                    pdBtn.removeClass('active');
                    $('#gdWrap').stop(true, false).slideToggle('fast');
                    $('#pdWrap').stop(true, false).slideUp('fast').removeClass('open');
                    return false;
                  });

                  // Tooltips
                  $('.tip').tooltip({
                    placement: 'top'
                  });
                  $('.tipr').tooltip({
                    placement: 'right'
                  });
                  $('.tipb').tooltip({
                    placement: 'bottom'
                  });
                  $('.tipl').tooltip({
                    placement: 'left'
                  });

                  $("a[href='#top']").click(function() {
                    $("html, body").animate({
                      scrollTop: 0
                    },
                    "slow");
                    return false;
                  });

                  var _server_time = new Date(),
        _server_time2 = new Date(),
        _local_time = new Date(),
        _local_time2 = new Date();
                  _server_time2 = new Date(),
                  _local_time = new Date(),
                  _local_time2 = new Date();

                  _timer = setInterval(function() {
                    var now = new Date();
                    true_elapsed = Math.round((now.getTime() - _gNow.getTime()) / 1000); //synchronize & increment 1 second
                    second = _local_time.getTime() + 1000;
                    elapsed = Math.round((second - _local_time2.getTime()) / 1000);
                    if (elapsed < true_elapsed) {
                      diff = true_elapsed - elapsed;
                      second += (diff * 1000);
                    }
                    _local_time.setTime(second);
                    second = _server_time.getTime() + 1000;
                    elapsed = Math.round((second - _server_time2.getTime()) / 1000);
                    if (elapsed < true_elapsed) {
                      diff = true_elapsed - elapsed;
                      second += (diff * 1000);
                    }
                    _server_time.setTime(second);

                    //update server time
                    date_text = padNumber(_server_time.getHours()) + ':' + padNumber(_server_time.getMinutes()) + ':' + padNumber(_server_time.getSeconds());
                    date_text += ' ' + _server_time.getDate() + '/' + (_server_time.getMonth() + 1) + '/' + _server_time.getFullYear();
                    $('#server_time_text').html(date_text);
                    //update local time
                    date_text = padNumber(_local_time.getHours()) + ':' + padNumber(_local_time.getMinutes()) + ':' + padNumber(_local_time.getSeconds());
                    date_text += ' ' + _local_time.getDate() + '/' + (_local_time.getMonth() + 1) + '/' + _local_time.getFullYear();
                    $('#local_time_text').html(date_text);
                  },
                  1000);

                  /**
    * @param number An integer
    * @return Integer padded with a 0 if necessary
    */
                  function padNumber(number) {
                    return (number >= 0 && number < 10) ? '0' + number: number;
                  }
                });
              </script>
              <script type="text/javascript">
                jQuery(document).ready(function($) {
                  var _allsecs = new Array();
                  var _allsecs2 = new Array();
                  var _i18n = {
                    weeks: ['星期', '星期'],
                    days: ['天', '天'],
                    hours: ['小时', '小时'],
                    minutes: ['分', '分'],
                    seconds: ['秒', '秒']
                  };
                  $('.maintain_remain_time').each(function() {
                    var _rid = $(this).attr('id');
                    var _seconds = parseInt($(this).attr('rel'));
                    if (_seconds > 0) {
                      $(this).html(remaining.getString(_seconds, _i18n, false));
                    } else {
                      $(this).html('剩余0天');
                    }
                    _allsecs[_rid] = _seconds;
                    _allsecs2[_rid] = _seconds;
                  });
                  timer = setInterval(function() {
                    var now = new Date();
                    true_elapsed = Math.round((now.getTime() - _gNow.getTime()) / 1000);
                    $('.maintain_remain_time').each(function() {
                      var _rid = $(this).attr('id');
                      if (typeof _allsecs[_rid] == 'undefined') {
                        _allsecs[_rid] = parseInt($(this).attr('rel'));
                      }
                      _seconds = _allsecs[_rid];
                      if (typeof _allsecs2[_rid] == 'undefined') {
                        _allsecs2[_rid] = parseInt($(this).attr('rel'));
                      }
                      // by QQ 4828816
                      _diff_sec = _allsecs2[_rid] - _seconds;
                      if (_diff_sec < true_elapsed) {
                        _seconds = _allsecs2[_rid] - true_elapsed;
                      }
                      if (_seconds > 0) {
                        $(this).html(remaining.getString(_seconds, _i18n, false));
                        _allsecs[_rid] = --_seconds;
                      } else {
                        $("#too_many_user").hide();
                        $("#login_btn").removeAttr("disabled");
                        $(this).html('剩余0天');
                      }
                    });
                  },
                  1000);
                });
              </script>
              <script type="text/javascript">
              </script>
              <script type="text/javascript">
                jQuery(document).ready(function($) {
                  var pin_message = "此次执行需要{quantity}PIN。";
                  $('#maintain_back_btn, #pd_back_btn, #gd_back_btn').click(function() {
                    $('input[name=__req]').val('start'); //back to starting step
                  });

                  if ("0") {
                    $("#pd_pin").text(pin_message.replace("{quantity}", parseInt(0 / 0.5)));
                  } else {
                    $("#pd_pin").text(pin_message.replace("{quantity}", 1));
                  }

                  $("input[name=from_wallet]").change(function() {
                    if ($(this).val() == 'cwallet') {
                      $("#minimum_amount").text("BTC0.50000000");
                    } else {
                      $("#minimum_amount").text("BTC0.50000000");
                    }
                  });

                  $("#show_pd_amount").html(format_monetary_value(0));
                  $("#show_gd_amount").html(format_monetary_value(0));

                  $("#pd_amount").keyup(function() {
                    $("#show_pd_amount").html(format_monetary_value($(this).val()));
                    if ($(this).val() > 0.5 && $(this).val() % 0.5 == 0) {
                      $("#pd_pin").text(pin_message.replace("{quantity}", $(this).val() / 0.5));
                    } else {
                      $("#pd_pin").text(pin_message.replace("{quantity}", 1));
                    }
                  });
                  $("#gd_amount").keyup(function() {
                    $("#show_gd_amount").html(format_monetary_value($(this).val()));
                  });

                  if (false) {
                    $("#recalc-ep-message").text("您的额外回酬已计算。请稍候片刻再尝试。");
                    $("#recalc-ep-button").attr("disabled", "disabled");
                    setTimeout(function() {
                      $("#recalc-ep-button").removeAttr("disabled");
                      $("#recalc-ep-message").text("");
                    },
                    0);
                  }

                  $("#recalc-ep-button").on("click",
                  function(e) {
                    e.preventDefault();
                    $("#recalc-ep-message").text("您的额外回酬已计算成功。如果想再计算，请稍候片刻再尝试。");
                    $(this).attr("disabled", "disabled");
                    $.ajax({
                      url: '?aj=1&type=recalc_user_ep',
                      data: {
                        'uid': 82662186
                      },
                      type: 'post',
                      dataType: 'json',
                      error: function(data) {
                        console.log(data);
                      },
                      success: function(data) {
                        if (data.percent > 0) {
                          $("#current_ep").html(data.percent);
                        }
                      }
                    });
                    setTimeout(function() {
                      $("#recalc-ep-button").removeAttr("disabled");
                      $("#recalc-ep-message").text("");
                    },
                    1800000);
                  });
                });
              </script>
	<!-- /JAVASCRIPTS -->
</body>
</html>