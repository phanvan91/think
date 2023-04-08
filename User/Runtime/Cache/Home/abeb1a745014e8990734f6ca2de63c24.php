<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>会员系统-我的互助钱包</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="/css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="/css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="/css/responsive.css" >
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="/js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
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
	<!-- FONTS -->
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
										- 我的互助钱包</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="description">提示：投资有风险，请使用非关键资金参与！！！</div>
								</div>
							</div>
					</div>
						<!-- /PAGE HEADER -->
						<!-- DASHBOARD CONTENT --><!-- /DASHBOARD CONTENT -->
                 <div class="col-md-12">
										<!-- BASIC -->
				   <div class="box border primary ">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>我的互助钱包</h4>
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
											<table class="table table-bordered table-primary">
								<thead>
									<tr class="tac">
										<th>编号</th>
										<th>日期</th>
										<th>说明</th>
										<th>金额 </th>
										<th>利息 </th>
										<th>天数</th>
										<th>已提现本金</th>
                                        <th>提现 </th>
										<th>是否转出</th>
										<th>匹配编号</th>
										<th>匹配状态</th>
									</tr>
								</thead>
							 <tbody>

                                        <?php if(is_array($v_list)): foreach($v_list as $key=>$v): ?><tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo ($aab=$v["id"]); ?></td>
                                                <td><?php echo ($v["date"]); ?></td>
                                                <td>提供帮助</td>
                                                <td><?php echo ($v["jb"]); ?></td>
                                                <td><?php echo (user_jj_lx_jerry($aab,$ztrs)); ?></td>
                                                <td><?php echo (user_jj_ts_jerry($aab,$ztrs3)); ?></td>
                                                <td></td>
                                                <td>
                                                    <?php if($v["zt"] == '0'): ?>(不可提现)
                                                        <?php else: ?>
                                                        已转出<?php endif; ?>
                                                </td>
                                                <td><?php echo (user_tgbz_jerry($aab,$v["id"])); ?></td>
                                                <td>未匹配</td>
                                                <td>排队中</td>
                                            </tr><?php endforeach; endif; ?>
                                        <?php if(is_array($list1)): foreach($list1 as $key=>$v): ?><tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo ($aab=$v["id"]); ?></td>
                                                <td><?php echo ($v["date"]); ?></td>
                                                <td><?php echo ($v["note"]); ?></td>
                                                <td><?php echo ($v["jb"]); ?></td>
                                                <td>合计<?php echo (user_jj_lx($aab,$ztrs)); ?></td>
                                                <td>排单日息1%，<?php echo (user_jj_ts($aab,$ztrs3)); ?></td>
                                                <td><?php echo ($v["jb_finish"]); ?></td>
                                                <td>
                                                    <?php if($v["zt"] == '0'): ?><font color="#FF0000">恭喜你获得2%+X每天的利息</font><br>(<?php echo (user_jj_zt_z($aab,$ztrs1)); ?>) <a
                                                            href="javascript:if(confirm('打款后利息2-3.2%/天，是您获利最佳的时机！大多数会员都不着急提现，而是等待计息。转出提现后将停止计息,确定要转出吗?'))location='/Home/Info/tgbz_tx_cl/id/<?php echo ($v["id"]); ?>/'">点击确认提款</a>
                                                        <?php else: ?>
                                                        已转出<?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($v["zt"] == '0'): ?>未转出<?php endif; ?>
                                                    <?php if($v["zt"] == '1'): ?>已转出<?php endif; ?>
                                                </td>
                                                <td>R<?php echo ($bbh=$v["r_id"]); ?></td>
                                                <td><?php echo (user_jj_pipei_z($bbh,$ztrs2)); ?></td>
                                            </tr><?php endforeach; endif; ?>
                                    </table>
<div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><?php echo ($page1); ?></div>
						</div>
				   </div>
                   </div>


					
					 <div class="col-md-12">
					   <div style=" background-color:#003d74; padding:10px; padding-bottom:20px; margin-bottom:20px; color:#fff;border-radius:5px;">
	<h4 class="font-light m-b-xs">鸿基 互助创业平台制度：</h4>
	<p class="font-light m-b-xs"><b><font color="#FFFF00">平台亮点：</font></b></p>
	<p class="font-light m-b-xs">一、 
	平台服务器美国虚拟主机位于美国西海岸的洛杉矶。在亚太与美洲乃至全球都有较好的访问速度，高防主机部署有10GB硬件防火墙，可有效防御10GB DDOS与CC攻击，配合平台强大的维护团队加上网站应急预案，确保个人信息安全，个人用户数据得到顶级保障，让您理财毫无顾虑。<br>
	二、 首个尝试多静态模式运营，加强平台资金互动。<br>
	三、 自主研发诚信积分系统，完全代替以往互助平台烧伤机制，更好的抑制投机财团，给诚信玩家一个优越的互助平台。<br>
	四、 间歇式运营，定期对平台例行维护，预防突发状态减少会员恐慌。</p>
	<p><strong style="color:#ffff00;">会员与利息：</strong><br>
	<p>LV.1： 可拿一代直推奖10%领导奖3% <br>
	LV.2 ：直推10人团队20人—可拿一代直推奖10%领导奖5% <br>
	LV.3：直推15人团队150人—多拿2代3%+3代1%+4代0.25%，领导奖提取限制40%。 <br>
	LV.4：直推20人团队300人—1代7%、2代5%、3代3%、4代1%、5代，0.05%领导奖提取限制50%。<br>
	LV5：直推2个LV4或以上团队1000人，多拿无限代0.01%，领导奖提取限制60% <br>
	初级经理：直推4个LV5或以上团队2000人，领导奖提取限制70%。 <br>
	中级经理：直推6个初级经理以上团队3000人，领导奖提取限制80%。 <br>
	高级经理：直推10个中级经理或以上团队5000人，领导奖提取限制90%。<br>
	</p>
	<p><strong><span style="color: #FFFF00">静态</span></strong><strong style="color:#ffff00;">收益：</strong><br>
	<br>
	财富通道（一）<br>
	提供帮助，即100-30000的阶段性开放。首单限额10-5000元，第二单限制10-10000元，第三单10-20000元，第四单30000元封顶。申请帮助等待系统匹配，每日利息为1%。<br>
	<br>
	财富通道（二）<br>
	首单限额10-5000元 第二单限额10-10000元， 
	第三单限额10-20000元，最高限额20000.自由选择排对时间，排队中每日利息0.5％，匹配打款确认后每日利息1.5％，15天强制出局。<br>
	<br>
	财富通道（三）<br>
	首单限额10-5000元 第二单限额10-10000元， 
	第三单限额10-20000元，最高限额20000.购买后立即打款，第二天开始每天提款15％，持续提款10天，每月限购一次。</p>
	<p><b><font color="#FFFF00">平台规则</font></b><br>
	<br>
	1. 平台设立诚信积分，会员诚信积分低于50分不能提取奖金，低于12分不能提款操作。 <br>
	2. 排单消耗排单币，每排单1000元消耗1枚排单币。 <br>
	3. 新会员进入系统积分为零，通过打款、做任务、推广会员获得诚信积分。 <br>
	4. 系统匹配短信通知交易双方会员。 <br>
	5. 七天强制复投，确保平台稳健运行。 <br>
	6. 每个手机号只能注册一个账号，三代内同名玩家不可超过3个。 <br>
	7. 直推会员下单金额不高于领导人下单金额百分之30以上。 <br>
	8. 排单、提款需二级密码验证和手机短信验证。 <br>
	9. 排单后无法删除订单，请用非关键资金参与。 <br>
	10.上传虚假凭证、收款确认超时永久封号，如发现对方有不诚信行为请立即向系统举报。被封号的会员旗下团队由上级接管。 <br>
	11. 领导人账号中没有订单的时间内，下属会员下单会造成领导奖流失。 <br>
	12. 超过24小时没有排队中的订单，打款上传假图的系统采取封号处理。 <br>
	13. 领导奖每天限提一次。 <br>
	14. 直推奖冻结15后可提取，领导奖冻结一月后可提取。 <br>
	15. 团队发展为1:3比例，如领导人有一个直推，该领导团队人数上限为3人，多出人员只计算团队人数不计奖金。 <br>
	16. 提款匹配时间为上午9：00-晚上21:00 。其他时间段内不可提款操作。每周六日系统例行维护暂停匹配。<br>
	<br>
	<br>
	<b><font color="#FFFF00">诚信积分系统：</font></b><br>
	<br>
	1. 诚信积分低于12分时不可提款，低于50分不可提取奖金，可通过任务、推广新会员和诚信打款方式获得诚信积分。<br>
	2 .做任务每周限做一次（不累计），每次获得5诚信积分。<br>
	3. 推广有效新会员获得 2/每人 诚信积分。<br>
	4. 1小时内打款奖励3诚信积分，两小时内打款奖励2诚信积分，3小时内打款奖励1诚信积分。<br>
	5 .诚信积分可以为负数。<br>
	6. 商城可购买诚信积分1诚信积分=10元<br>
	7. 每月清零诚信积分,负数不变。<br>
	8. 会员超8小时未打款扣5诚信积分。<br>
	9. 规定时间内未打款扣60诚信积分，领导人扣30诚信积分。<br>
	10. 未按系统规定复投的扣60诚信积分。<br>
	11. 虚假打款上传假图一次扣100诚信积分，领导人连带责任扣50诚信积分。<br>
	12. 会员封号领导人扣80诚信积分。<br>
	13. 复投金额少于上笔进场金额扣200诚信积分。<br>
	14. 诚信积分可做月底抽奖活动，有几率获得1000-10000高额奖金。</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	</div>
  </div>
		</div>
	</div>
											<br>
						</div></div>

	</section>
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
<script type="text/javascript" src="/js/jquery-todo/js/paddystodolist.js"></script>
	<!-- TIMEAGO -->
<script type="text/javascript" src="/js/timeago/jquery.timeago.min.js"></script>
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
	

	<!-- /JAVASCRIPTS -->
</body>
</html>